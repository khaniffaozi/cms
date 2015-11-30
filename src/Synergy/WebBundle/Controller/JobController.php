<?php

namespace Synergy\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Synergy\WebBundle\Entity\Job;
use Synergy\WebBundle\Entity\JobReference;

class JobController extends Controller {

    public function indexAction() {
        return $this->render('SynergyWebBundle:Job:list.html.twig');
    }

    public function listAction(Request $request, $id = "") {

        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);

        $limit = $request->query->get('limit', '');
        $offset = $request->query->get('offset', '');
        $search = $request->query->get('search', '');

        if ($id !== "") {
            /** @var Synergy\WebBundle\Repository\WebRepository $repository */
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('SynergyWebBundle:Job');
            $job = $repository->findJobDetail($id);
            $data = array();
            $data = $job;
            $jsonContent = $serializer->serialize($data, 'json');
            return new Response($jsonContent);
        } else {

            $users = $this->get('security.token_storage')->getToken()->getUser();
            $country = $users->getCountry();

            if ($limit !== "" && $offset !== "") {
                /** @var Synergy\WebBundle\Repository\WebRepository $repository */
                $em = $this->getDoctrine()->getManager();
                $repository = $em->getRepository('SynergyWebBundle:Job');
                $job = $repository->findJob($country, $search, $limit, $offset);
                $total = $repository->findTotalJob($country, $search);

                $data = array();
                $data["rows"] = $job;
                $data["total"] = count($total);

                $jsonContent = $serializer->serialize($data, 'json');
                return new Response($jsonContent);
            } else {

                $em = $this->getDoctrine()->getManager();
                $job = $em->getRepository('SynergyWebBundle:Job')->findAll();
                $data["rows"] = $job;
                $data["total"] = count($job);
                $jsonContent = $serializer->serialize($data, 'json');
                return new Response($jsonContent);
            }
        }

        $data = array();
        $data['messages'] = "not a valid action";
        $response = new Response(json_encode($data), 500);
        return $response;
    }

    public function formAction($id = "") {
        //Inisialization array value null
        $forms['job'] = array(
            'id' => '',
            'title' => '',
            'validUntil' => '',
            'isPublish' => '',
            'country' => ''
        );
        //Status
        $forms['status'] = array(
            "publish" => array("value" => "1", "lable" => "Publish"),
            "unpublish" => array("value" => "0", "lable" => "Unpublish")
        );      
        $users = $this->get('security.token_storage')->getToken()->getUser();
        $forms['userCountry'] = $users->getCountry();  
        //Country
        $em = $this->getDoctrine()->getManager();
        $county = $em->getRepository('SynergyWebBundle:Country')->findAll();
        $arr = array();
        foreach ($county as $rows) {
            array_push($arr, $rows->getCountryName());
        }
        $forms['country'] = $arr;
        $forms['responsibilities'] = array();
        $forms['required'] = array();
        $forms['desirable'] = array();

        //Check value id (Decided edit/add)
        if (!empty($id)) {
            //Get data by id
            $job = $this->getDoctrine()
                    ->getRepository('SynergyWebBundle:Job')
                    ->find($id);
            $data['job'] = $job;
            $data['jobReference'] = $this->getDoctrine()
                            ->getRepository('SynergyWebBundle:JobReference')->findByJob($job);

//            \Doctrine\Common\Util\Debug::dump($data['job']);
            $rows = $data['job'];
            $id = $rows->getId();
            $title = $rows->getTitle();
            $validUntil = $rows->getValidUntil();
            $isPublish = $rows->getIsPublish();
            $country = $rows->getCountry();

            $forms['job'] = array(
                'id' => $id,
                'title' => $title,
                'validUntil' => $validUntil,
                'isPublish' => $isPublish,
                'country' => $country
            );

            $arrayResponsibilities = array();
            $arrayRequired = array();
            $arrayDesirable = array();
            foreach ($data['jobReference'] as $rows => $cols) {
                $rows_reference = $cols;
                $id = $rows_reference->getId();
                $type = $rows_reference->getType();
                $description = $rows_reference->getDescription();
                if ($type == "responsibilities") {
                    array_push($arrayResponsibilities, array(
                        'type' => $type,
                        'description' => $description)
                    );
                } elseif ($type == "required") {
                    array_push($arrayRequired, array(
                        'type' => $type,
                        'description' => $description)
                    );
                } elseif ($type == "desirable") {
                    array_push($arrayDesirable, array(
                        'type' => $type,
                        'description' => $description)
                    );
                }
            }
            $forms['responsibilities'] = $arrayResponsibilities;
            $forms['required'] = $arrayRequired;
            $forms['desirable'] = $arrayDesirable;
//            \Doctrine\Common\Util\Debug::dump($form['jobReference']);die;
        }
        //Render to form
        return $this->render('SynergyWebBundle:Job:edit.html.twig', $forms);
    }

    public function saveAction($id, Request $request) {

        $responsibilities = $request->request->get('responsibilities');
        $required = $request->request->get('required');
        $desirable = $request->request->get('desirable');
        $title = $request->request->get('title');
        $validUntil = $request->request->get('validUntil');
        $isPublish = $request->request->get('isPublish');
        $country = $request->request->get('country');
        //Decide Insert Or Update
        if (empty($id)) {
            //Insert to table Job
            $data = new Job();
            $data->setTitle($title);
            $data->setvalidUntil(new \DateTime($validUntil));
            $data->setCountry($country);
            $data->setIsPublish($isPublish);

            $em = $this->getDoctrine()->getManager();
            $em->persist($data);
            try {
                $em->flush();
                // insert code for responsibilities
                if (!empty($responsibilities)) {
                    foreach ($responsibilities as $rows) {
                        if($rows != ""){
                            $data_responsibilities = new JobReference();
                            $data_responsibilities->setType('responsibilities');
                            $data_responsibilities->setDescription($rows);
                            $data_responsibilities->setJob($data);
                            $em->persist($data_responsibilities);
                            try {
                                $em->flush();
                            } catch (Exception $e) {
                                $this->addFlash(
                                        'alert', 'Ops, Responsibilities failed save !'
                                );
                                return $this->redirect($this->generateUrl('web_job'));
                            }
                        }
                    }
                }
                // insert code for required
                if (!empty($required)) {
                    foreach ($required as $rows) {
                        if($rows != ""){
                            $data_required = new JobReference();
                            $data_required->setType('required');
                            $data_required->setDescription($rows);
                            $data_required->setJob($data);
                            $em->persist($data_required);
                            try {
                                $em->flush();
                            } catch (Exception $e) {
                                $this->addFlash(
                                        'alert', 'Ops, Required failed save !'
                                );
                                return $this->redirect($this->generateUrl('web_job'));
                            }
                        }
                    }
                }
                // insert code for desirable
                if (!empty($desirable)) {
                    foreach ($desirable as $rows) {
                        if($rows != ""){
                            $data_desirable = new JobReference();
                            $data_desirable->setType('desirable');
                            $data_desirable->setDescription($rows);
                            $data_desirable->setJob($data);
                            $em->persist($data_desirable);
                            try {
                                $em->flush();
                            } catch (Exception $e) {
                                $this->addFlash(
                                        'alert', 'Ops, Desirable failed save !'
                                );
                                return $this->redirect($this->generateUrl('web_job'));
                            }
                        }
                    }
                }
                $this->addFlash(
                        'success', 'Well, Job has been saved !'
                );
                return $this->redirect($this->generateUrl('web_job'));
            } catch (Exception $e) {
                $this->addFlash(
                        'alert', 'Ops, Unable save data!'
                );
                return $this->redirect($this->generateUrl('web_job'));
            }
            //Update Data
        } else {
            $em = $this->getDoctrine()->getManager();
            $data = $em->getRepository('SynergyWebBundle:Job')->find($id);
            if (!$data) {
                $this->addFlash(
                        'alert', 'Ops, Data not found !'
                );
                return $this->redirect($this->generateUrl('web_job'));
            } else {
                $data->setTitle($title);
                $data->setvalidUntil(new \DateTime($validUntil));
                $data->setCountry($country);
                $data->setIsPublish($isPublish);
                try {
                    $em->flush();
                    //remove Responsibilities, required and desirable
                    $reference = $em->getRepository('SynergyWebBundle:JobReference')
                            ->findByJob($data);
                    foreach ($reference as $references) {
                        $em->remove($references);
                        try {
                            $em->flush();
                        } catch (Exception $e) {
                            $data = array();
                            $data['messages'] = "Unable to remove data";
                            $response = new Response(json_encode($data), 500);
                        }
                    }
                    // insert code for responsibilities
                    if (!empty($responsibilities)) {
                        foreach ($responsibilities as $rows) {
                            if($rows != ""){
                                $data_responsibilities = new JobReference();
                                $data_responsibilities->setType('responsibilities');
                                $data_responsibilities->setDescription($rows);
                                $data_responsibilities->setJob($data);
                                $em->persist($data_responsibilities);
                                try {
                                    $em->flush();
                                } catch (Exception $e) {
                                    $this->addFlash(
                                            'alert', 'Ops, Responsibilities failed save !'
                                    );
                                    return $this->redirect($this->generateUrl('web_job'));
                                }
                            }
                        }
                    }
                    // insert code for required
                    if (!empty($required)) {
                        foreach ($required as $rows) {
                            if($rows != ""){
                                $data_required = new JobReference();
                                $data_required->setType('required');
                                $data_required->setDescription($rows);
                                $data_required->setJob($data);
                                $em->persist($data_required);
                                try {
                                    $em->flush();
                                } catch (Exception $e) {
                                    $this->addFlash(
                                            'alert', 'Ops, Required failed save !'
                                    );
                                    return $this->redirect($this->generateUrl('web_job'));
                                }
                            }
                        }
                    }
                    // insert code for desirable
                    if (!empty($desirable)) {
                        foreach ($desirable as $rows) {
                            if($rows != ""){
                                $data_desirable = new JobReference();
                                $data_desirable->setType('desirable');
                                $data_desirable->setDescription($rows);
                                $data_desirable->setJob($data);
                                $em->persist($data_desirable);
                                try {
                                    $em->flush();
                                } catch (Exception $e) {
                                    $this->addFlash(
                                            'alert', 'Ops, Desirable failed save !'
                                    );
                                    return $this->redirect($this->generateUrl('web_job'));
                                }
                            }
                        }
                    }
                    
                    $this->addFlash(
                            'success', 'Well, Job has been updated !'
                    );
                    return $this->redirect($this->generateUrl('web_job'));
                } catch (Exception $e) {
                    $this->addFlash(
                            'alert', 'Ops, Unable update data!'
                    );
                    return $this->redirect($this->generateUrl('web_job'));
                }
            }
        }
    }

    public function deleteAction($id) {
        $em = $this->getDoctrine()->getManager();
        $data = $em->getRepository('SynergyWebBundle:Job')->find($id);

        if (!$data) {
            throw $this->createNotFoundException(
                    'No news found for id ' . $id
            );
        } else {

            try {
                $em->remove($data);
                $em->flush();
                $this->addFlash(
                        'success', 'Well, Job has been deleted !'
                );
                return $this->redirect($this->generateUrl('web_job'));
            } catch (Exception $e) {
                $this->addFlash(
                        'alert', 'Ops, Job failed to delete !'
                );
                return $this->redirect($this->generateUrl('web_job'));
            }
        }
    }

    public function findAllAction() {

        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);

        /** @var Synergy\WebBundle\Repository\WebRepository $repository */
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('SynergyWebBundle:Job');
        $job = $repository->findAll();
        $jobIndonesia = $repository->findBy(array('country'=>'Indonesia','isPublish'=>true));
        $jobMalaysia = $repository->findBy(array('country'=>'Malaysia','isPublish'=>true));
        $jobSingapore = $repository->findBy(array('country'=>'Singapore','isPublish'=>true));
        $jobVietnam = $repository->findBy(array('country'=>'Vietnam','isPublish'=>true));
        $jobDetail = $repository->findJobDetailWeb();
        $country = $repository->findJobCountry();
        $countries = array();
        $i = 0;
//        \Doctrine\Common\Util\Debug::dump($country);die;
        foreach($country as $rows){
//            echo $rows['country'];die;
            if($rows['country'] == "Indonesia"){
                if(count($jobIndonesia) > 1){
                    $countries[$i] = array(
                        "country"=>$rows['country'],
                        "total"=>count($jobIndonesia),
                        "label"=> 'Jobs'
                    );
                }else{
                    $countries[$i] = array(
                        "country"=>$rows['country'],
                        "total"=>count($jobIndonesia),
                        "label"=> 'Job'
                    );
                }
            }
            elseif($rows['country'] == "Malaysia"){
                if(count($jobMalaysia) > 1){
                    $countries[$i] = array(
                        "country"=>$rows['country'],
                        "total"=>count($jobMalaysia),
                        "label"=> 'Jobs'
                    );
                }else{
                    $countries[$i] = array(
                        "country"=>$rows['country'],
                        "total"=>count($jobMalaysia),
                        "label"=> 'Job'
                    );
                }
            }
            elseif($rows['country'] == "Singapore"){
                if(count($jobSingapore) > 1){
                    $countries[$i] = array(
                        "country"=>$rows['country'],
                        "total"=>count($jobSingapore),
                        "label"=> 'Jobs'
                    );
                }else{
                    $countries[$i] = array(
                        "country"=>$rows['country'],
                        "total"=>count($jobSingapore),
                        "label"=> 'Job'
                    );
                }
            }
            elseif($rows['country'] == "Vietnam"){
                if(count($jobVietnam) > 1){
                    $countries[$i] = array(
                        "country"=>$rows['country'],
                        "total"=>count($jobVietnam),
                        "label"=> 'Jobs'
                    );
                }else{
                    $countries[$i] = array(
                        "country"=>$rows['country'],
                        "total"=>count($jobVietnam),
                        "label"=> 'Job'
                    );
                }
            }
            $i++;
        }
        
        $data["country"] = $countries;
        $data["totalJobIndonesia"] = count($jobIndonesia);
        $data["totalJobMalaysia"] = count($jobMalaysia);
        $data["totalJobSingapore"] = count($jobSingapore);
        $data["totalJobVietnam"] = count($jobVietnam);
        $data["jobs"] = $job;
        $data["jobDetails"] = $jobDetail;
        $jsonContent = $serializer->serialize($data, 'json');
        return new Response($jsonContent);
    }

}

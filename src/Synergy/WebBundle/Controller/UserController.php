<?php

namespace Synergy\WebBundle\Controller;

use Synergy\WebBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class UserController extends Controller {

    public function indexAction() {
        return $this->render('SynergyWebBundle:User:list.html.twig');
    }

    public function listAction(Request $request, $id = "") {

        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);

        $limit = $request->query->get('limit', '');
        $offset = $request->query->get('offset', '');
        $search = $request->query->get('search', '');

        if ($limit !== "" && $offset !== "") {
            /** @var Synergy\WebBundle\Repository\WebRepository $repository */
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('SynergyWebBundle:User');
            $users = $repository->findUser($search, $limit, $offset);
            $total = $repository->findTotalUser($search);

            $data = array();
            $data["rows"] = $users;
            $data["total"] = count($total);

            $jsonContent = $serializer->serialize($data, 'json');
            return new Response($jsonContent);
        } else {
            $em = $this->getDoctrine()->getManager();
            $users = $em->getRepository('SynergyWebBundle:User')->findAll();
            $data["rows"] = $users;
            $data["total"] = count($users);
            $jsonContent = $serializer->serialize($data, 'json');
            return new Response($jsonContent);
        }
        $data = array();
        $data['messages'] = "not a valid action";
        $response = new Response(json_encode($data), 500);
        return $response;
    }

    public function formAction($id = "") {
        //Inisialization array value null
        $forms['data'] = array(
            'id' => '',
            'username' => '',
            'email' => '',
            'country' => '',
            'userType' => '',
            'isActive' => ''
        );
        //Country
        $em = $this->getDoctrine()->getManager();
        $county = $em->getRepository('SynergyWebBundle:Country')->findAll();
        $arr = array();
        foreach ($county as $rows) {
            array_push($arr, $rows->getCountryName());
        }
        $forms['country'] = $arr;
        //User Type
        $forms['userType'] = array(
            "admin" => array("value" => "admin", "lable" => "Admin"),
            "user" => array("value" => "user", "lable" => "User")
        );
        //Status
        $forms['status'] = array(
            "activate" => array("value" => "1", "lable" => "Activate"),
            "deactivate" => array("value" => "0", "lable" => "Deactivate")
        );
        
        //Check value id (Decided edit/add)
        if (!empty($id)) {
            //Get data by id
            $forms['data'] = $this->getDoctrine()
                    ->getRepository('SynergyWebBundle:User')
                    ->find($id);
//            \Doctrine\Common\Util\Debug::dump($data['data']);die;
        }

        //Render to form
        return $this->render('SynergyWebBundle:User:edit.html.twig', $forms);
    }

    public function saveAction($id, Request $request) {
        //Get post data from form
        $email = $request->request->get('email');
        $username = $request->request->get('username');
        $password = $request->request->get('password');
        $country = $request->request->get('country');
        $userType = $request->request->get('userType');
        $isActive = $request->request->get('isActive');
        //check id to decide insert or update
        if ($id == 0) {
            //insert
            $data = new User();

            $data->setPassword($password);
            $data->setEmail($email);
            $data->setUsername($username);
            $data->setCountry($country);
            $data->setUserType($userType);
            $data->setIsActive($isActive);
            //Insert to table
            $em = $this->getDoctrine()->getManager();
            $em->persist($data);
            $em->flush();
            
            $this->addFlash(
                'success',
                'Well, User has been created !'
            );
        } else {
            //Update by id
            $em = $this->getDoctrine()->getManager();
            $data = $em->getRepository('SynergyWebBundle:User')->find($id);
            if($password != ""){
                $data->setPassword($password);
            }
            $data->setEmail($email);
            $data->setUsername($username);
            $data->setCountry($country);
            $data->setUserType($userType);
            $data->setIsActive($isActive);
            $em->flush();
            
            $this->addFlash(
                'success',
                'Well, Your changes were saved !'
            );
        }
        // Render to  list 
        return $this->redirect($this->generateUrl('web_user'));
    }
    
    public function deleteAction($id)
            
    {
        $em = $this->getDoctrine()->getManager();
        $data = $em->getRepository('SynergyWebBundle:User')->find($id);

          if (!$data) {
            throw $this->createNotFoundException(
                    'No news found for id ' . $id
            );
          }else{
            $em->remove($data);
            $em->flush();
            
            $this->addFlash(
                'success',
                'Well, User has been deleted !'
            );
          }

        return $this->redirect($this->generateUrl('web_user'));
    }

}

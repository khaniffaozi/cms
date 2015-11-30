<?php

namespace Synergy\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Core\SecurityContextInterface;

class SecurityController extends Controller {

    /**
     * @Route("/login", name="login_route")
     */
    public function loginAction(Request $request) {
        $helper = $this->get('security.authentication_utils');

        return $this->render('SynergyWebBundle:Security:login.html.twig', array(
                    'last_username' => $helper->getLastUsername(),
                    'error' => $helper->getLastAuthenticationError(),
        ));
    }

    /**
     * @Route("/login_check", name="login_check")
     */
    public function loginCheckAction() {
        // this controller will not be executed,
        // as the route is handled by the Security system
    }
    
    public function changePasswordAction(){
        return $this->render('SynergyWebBundle:Security:changePassword.html.twig',array(
            'passwordCurrent'=>'',
            'passwordNew'=>'',
            'passwordRetype'=>''));
    }
    
    public function saveChangeAction(Request $request) {
        $passwordCurrent = $request->request->get('passwordCurrent');
        $passwordNew = $request->request->get('passwordNew');
        $passwordRetype = $request->request->get('passwordRetype');
        $users = $this->get('security.token_storage')->getToken()->getUser();
        $id = $users->getId();
        $password = $users->getPassword();
//        var_dump(md5($passwordCurrent));die;
        if($passwordCurrent != "" && $passwordNew != "" && $passwordRetype != ""){
            if(md5($passwordCurrent) == $password){
                if($passwordNew == $passwordRetype){
                     //Update by id
                    $em = $this->getDoctrine()->getManager();
                    $data = $em->getRepository('SynergyWebBundle:User')->find($id);
                    $data->setPassword($passwordRetype);

                    $em->flush();

                    $this->addFlash(
                        'success',
                        'Well, Your changes were saved !'
                    );
                     return $this->render('SynergyWebBundle:Security:changePassword.html.twig', array(
                        'passwordCurrent'=>'',
                        'passwordNew'=>'',
                        'passwordRetype'=>''));
                }else{
                    $this->addFlash(
                        'danger',
                        'Ops, Password mismatch!'
                    );
                }
            }else{
                $this->addFlash(
                    'danger',
                    'Ops, Current password wrong!'
                );
            }            
        }else{
            $this->addFlash(
                'danger',
                'Ops, Password required!'
            );
        }
        // Render to  form 
        return $this->render('SynergyWebBundle:Security:changePassword.html.twig', array(
            'passwordCurrent'=>$passwordCurrent,
            'passwordNew'=>$passwordNew,
            'passwordRetype'=>$passwordRetype));
    }

}

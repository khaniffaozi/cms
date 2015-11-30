<?php

namespace Synergy\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {
//        $user = $this->get('security.token_storage')->getToken()->getUser();
//        $users = $user->getUsername();
//        return $this->render('SynergyWebBundle:Layout:home.html.twig', array('user'=>$users));
        return $this->render('SynergyWebBundle:Layout:home.html.twig');
    }

    public function goToWebAction() {
        return $this->redirect('http://localhost/pt-synergy-engineering-website/');
    }

}

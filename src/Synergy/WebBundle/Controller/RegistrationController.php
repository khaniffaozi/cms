<?php

namespace Synergy\WebBundle\Controller;


//class AccountController extends Controller
//{
//    public function changePasswordAction()
//    {
//        return $this->render('SynergyWebBundle:Account:changePassword.html.twig');
//    }
//}

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Synergy\WebBundle\Form\UserType;
use Synergy\WebBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class RegistrationController extends Controller
{
    /**
     * @Route("/register", name="user_registration")
     */
    public function registerAction(Request $request)
    {
        // 1) build the form
        $user = new User();
        $form = $this->createForm(new UserType(), $user);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isValid() && $form->isSubmitted()) {
            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            // ... do any other work - like send them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('replace_with_some_route');
        }

        return $this->render(
            'SynergyWebBundle:Registration:register.html.twig',
            array('form' => $form->createView())
        );
    }
}


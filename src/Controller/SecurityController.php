<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Repository\CustomerRepository;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils,CustomerRepository $customerRepository): Response
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        var_dump($lastUsername);
        if ($lastUsername){
            return $this->redirectToRoute('admin_index'); 
        }else{
            return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);   
        }
        
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction()
    {
        $request->getSession()->invalidate();
        return $this->render('security/login.html.twig', array(
            'number' => $number,
        ));
    }

}

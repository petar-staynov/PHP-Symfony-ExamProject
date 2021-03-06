<?php

namespace WebStoreBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="security_login")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function login()
    {
        if($this->getUser()){
            $this->addFlash('danger','You are logged in.');
            return $this->redirectToRoute('index');
        }
        return $this->render('security/login.html.twig');
    }
}

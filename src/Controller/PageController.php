<?php
// src/Controller/PageController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PageController extends AbstractController {

    /**
    * @Route("/")
    */
    public function acceuil() : Response {

        return $this->render('acceuil.html.twig');
    }

    /**
    * @Route("/a-propos")
    */
    public function apropos() : Response {

        return $this->render('a-propos.html.twig');
    }
}
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;



class ClientController extends AbstractController
{
    /**
    * @Route("/", name="index")
    */
    public function index()
    {
        return $this->redirectToRoute('movies');
    }

    /**
    * @Route("/film", name="movies")
    */
    public function movies()
    {
        return $this->render("client/index.twig");
    }

    /**
    * @Route("/film/{id}", name="movie")
    */
    public function movie($id)
    {
        return $this->render("client/index.twig");
    }
}

<?php

namespace App\Controller;

use App\Entity\Movie;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    /**
    * @Route("v1/api/movies", name="api_movies")
    */
    public function getMovies(ManagerRegistry $doctrine): Response
    {
        $movies = $doctrine->getRepository(Movie::class)->findAll();

        if(empty($movies)){
            return $this->json(["message" => "Data bulunamadı.!"], Response::HTTP_BAD_REQUEST);
        }

        return $this->json($movies, Response::HTTP_OK);
    }

    /**
    * @Route("v1/api/movies/{id}", name="api_movie")
    */
    public function getMovie(ManagerRegistry $doctrine, Request $request): Response
    {
        if(empty($request->get("id"))){
            return $this->json(["message" => "Data bulunamadı.!"], Response::HTTP_BAD_REQUEST);
        }
        $movie = $doctrine->getRepository(Movie::class)->find($request->get("id"));

        if(empty($movie)){
            return $this->json(["message" => "Data bulunamadı.!"], Response::HTTP_BAD_REQUEST);
        }

        return $this->json($movie, Response::HTTP_OK);
    }
}
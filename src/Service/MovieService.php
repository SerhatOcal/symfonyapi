<?php

namespace App\Service;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use stdClass;


class MovieService extends AbstractController
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client   = $client;
        $this->method   = 'GET';
        $this->url      = 'https://api.tvmaze.com/search/shows?q=girls';
    }

    public function getMovieRequest()
    {
        $response       = $this->client->request($this->method,$this->url);
        $content        = $response->getContent();
        $content        = $response->toArray();

        return $content;
    }

    public function setMovieData()
    {
        $data = self::getMovieRequest();
        $responseData = [];
        foreach ($data as $row){
            $movieData = new stdClass();
            $movieData->score           = $row["score"];
            $movieData->id              = $row["show"]["id"];
            $movieData->url             = $row["show"]["url"];
            $movieData->name            = $row["show"]["name"];
            $movieData->type            = $row["show"]["type"];
            $movieData->language        = $row["show"]["language"];
            $movieData->runtime         = $row["show"]["runtime"];
            $movieData->officialsite    = $row["show"]["officialSite"];
            $movieData->rating          = $row["show"]["rating"]["average"];
            $movieData->network         = (isset($row["show"]["network"]["name"])) ? $row["show"]["network"]["name"] : null;
            $movieData->image_medium    = $row["show"]["image"]["medium"];
            $movieData->image_original  = $row["show"]["image"]["original"];
            $movieData->summary         = $row["show"]["summary"];

            array_push($responseData, $movieData);
        }
        return $responseData;
    }
}
<?php

namespace App\Controller;

use App\Entity\EplLeague;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EplLeagueController extends AbstractController
{
    /**
     * @Route("/epl/league", name="epl_league")
     */
    public function createEpl(): Response
    {
      $client = HttpClient::create();
      // api specific epl league log standing
      $client_uri = 'http://api.football-data.org/v2/competitions/2021/standings';
      $reqPrefs['http']['method'] = 'GET';
      // we get the api auth key this is a temp free version with only 10 API calls
      $reqPrefs['http']['header'] = 'X-Auth-Token: 7213f04fd627456dae738b6ac302e26f';
      $response_context = stream_context_create($reqPrefs);
      $response = file_get_contents($client_uri, false, $response_context);
      $content = json_decode($response);
      $content = $content->getContent();
      $content = $content->toArray();

      // let's update the database with the api data
      $entityManager = $this->getDoctrine()->getManager();
      // extending our EntityLeague class
      $league = new EplLeague();
      $league->setID($content['standings']['table']['team']['id']);
      $league->setPosition($content['standings']['table']['team']['position']);
      $league->setTeam($content['standings']['table']['team']['name']);
      $league->setGamesPlayed($content['standings']['table']['gamesPlayed']);
      $league->setWon($content['standings']['table']['won']);
      $league->setDraw($content['standings']['table']['draw']);
      $league->setLost($content['standings']['table']['lost']);
      $league->setGoalsFor($content['standings']['table']['goalsFor']);
      $league->setGoalsAgainst($content['standings']['table']['goalsAgainst']);
      $league->setCrestUrl($content['standings']['table']['crestUrl']);
      $league->setPoints($content['standings']['table']['points']);
      dump($content);die;
      // updating the database everytime /epl/league is hit, there other good ways besides this
      $entityManager->persist($league);
      $entityManager->flush();

      return $this->render('epl_league/index.html.twig', [
        'controller_name' => 'EplLeagueController',
      ]);
    }
}

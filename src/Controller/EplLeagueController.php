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
      $content = json_decode($response, true);
      //$content = $content->getContent();
      //$content = $content->toArray();
      // dump($content['standings'][2]['table'][1]);die;
      // let's update the database with the api data
      $entityManager = $this->getDoctrine()->getManager();
      // extending our EntityLeague class
      $league = new EplLeague();
      $league->setID($content['standings'][2]['table'][0]['team']['id']);
      $league->setPosition($content['standings'][2]['table'][0]['position']);
      $league->setGamesPlayed($content['standings'][2]['table'][0]['playedGames']);
      $league->setWon($content['standings'][2]['table'][0]['won']);
      $league->setDraw($content['standings'][2]['table'][0]['draw']);
      $league->setLost($content['standings'][2]['table'][0]['lost']);
      $league->setGoalsFor($content['standings'][2]['table'][0]['goalsFor']);
      $league->setGoalsAgainst($content['standings'][2]['table'][0]['goalsAgainst']);
      $league->setCrestUrl($content['standings'][2]['table'][0]['team']['crestUrl']);
      $league->setPoints($content['standings'][2]['table'][0]['points']);
      $league->setName($content['standings'][2]['table'][0]['team']['name']);
      $entityManager->persist($league);
      $entityManager->flush();

      $league->setID($content['standings'][2]['table'][1]['team']['id']);
      $league->setPosition($content['standings'][2]['table'][1]['position']);
      $league->setGamesPlayed($content['standings'][2]['table'][1]['playedGames']);
      $league->setWon($content['standings'][2]['table'][1]['won']);
      $league->setDraw($content['standings'][2]['table'][1]['draw']);
      $league->setLost($content['standings'][2]['table'][1]['lost']);
      $league->setGoalsFor($content['standings'][2]['table'][1]['goalsFor']);
      $league->setGoalsAgainst($content['standings'][2]['table'][1]['goalsAgainst']);
      $league->setCrestUrl($content['standings'][2]['table'][1]['team']['crestUrl']);
      $league->setPoints($content['standings'][2]['table'][1]['points']);
      $league->setName($content['standings'][2]['table'][1]['team']['name']);
      $entityManager->persist($league);
      $entityManager->flush();

      $league->setID($content['standings'][2]['table'][2]['team']['id']);
      $league->setPosition($content['standings'][2]['table'][2]['position']);
      $league->setGamesPlayed($content['standings'][2]['table'][2]['playedGames']);
      $league->setWon($content['standings'][2]['table'][2]['won']);
      $league->setDraw($content['standings'][2]['table'][2]['draw']);
      $league->setLost($content['standings'][2]['table'][2]['lost']);
      $league->setGoalsFor($content['standings'][2]['table'][2]['goalsFor']);
      $league->setGoalsAgainst($content['standings'][2]['table'][2]['goalsAgainst']);
      $league->setCrestUrl($content['standings'][2]['table'][2]['team']['crestUrl']);
      $league->setPoints($content['standings'][2]['table'][2]['points']);
      $league->setName($content['standings'][2]['table'][2]['team']['name']);
      $entityManager->persist($league);
      $entityManager->flush();

      $league->setID($content['standings'][2]['table'][3]['team']['id']);
      $league->setPosition($content['standings'][2]['table'][3]['position']);
      $league->setGamesPlayed($content['standings'][2]['table'][3]['playedGames']);
      $league->setWon($content['standings'][2]['table'][3]['won']);
      $league->setDraw($content['standings'][2]['table'][3]['draw']);
      $league->setLost($content['standings'][2]['table'][3]['lost']);
      $league->setGoalsFor($content['standings'][2]['table'][3]['goalsFor']);
      $league->setGoalsAgainst($content['standings'][2]['table'][3]['goalsAgainst']);
      $league->setCrestUrl($content['standings'][2]['table'][3]['team']['crestUrl']);
      $league->setPoints($content['standings'][2]['table'][3]['points']);
      $league->setName($content['standings'][2]['table'][3]['team']['name']);
      $entityManager->persist($league);
      $entityManager->flush();

      $league->setID($content['standings'][2]['table'][4]['team']['id']);
      $league->setPosition($content['standings'][2]['table'][4]['position']);
      $league->setGamesPlayed($content['standings'][2]['table'][4]['playedGames']);
      $league->setWon($content['standings'][2]['table'][4]['won']);
      $league->setDraw($content['standings'][2]['table'][4]['draw']);
      $league->setLost($content['standings'][2]['table'][4]['lost']);
      $league->setGoalsFor($content['standings'][2]['table'][4]['goalsFor']);
      $league->setGoalsAgainst($content['standings'][2]['table'][4]['goalsAgainst']);
      $league->setCrestUrl($content['standings'][2]['table'][4]['team']['crestUrl']);
      $league->setPoints($content['standings'][2]['table'][4]['points']);
      $league->setName($content['standings'][2]['table'][4]['team']['name']);
      $entityManager->persist($league);
      $entityManager->flush();

      $league->setID($content['standings'][2]['table'][5]['team']['id']);
      $league->setPosition($content['standings'][2]['table'][5]['position']);
      $league->setGamesPlayed($content['standings'][2]['table'][5]['playedGames']);
      $league->setWon($content['standings'][2]['table'][5]['won']);
      $league->setDraw($content['standings'][2]['table'][5]['draw']);
      $league->setLost($content['standings'][2]['table'][5]['lost']);
      $league->setGoalsFor($content['standings'][2]['table'][5]['goalsFor']);
      $league->setGoalsAgainst($content['standings'][2]['table'][5]['goalsAgainst']);
      $league->setCrestUrl($content['standings'][2]['table'][5]['team']['crestUrl']);
      $league->setPoints($content['standings'][2]['table'][5]['points']);
      $league->setName($content['standings'][2]['table'][5]['team']['name']);
      //dump($content);die;
      // updating the database everytime /epl/league is hit, there other good ways besides this
      $entityManager->persist($league);
      $entityManager->flush();

      return $this->render('epl_league/index.html.twig', [
        'controller_name' => 'EplLeagueController',
      ]);
    }
}

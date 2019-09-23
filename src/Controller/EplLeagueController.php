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
      //dump($content['standings'][2]['table']);die;
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

      $league_1 = new EplLeague();
      $league_1->setID($content['standings'][2]['table'][1]['team']['id']);
      $league_1->setPosition($content['standings'][2]['table'][1]['position']);
      $league_1->setGamesPlayed($content['standings'][2]['table'][1]['playedGames']);
      $league_1->setWon($content['standings'][2]['table'][1]['won']);
      $league_1->setDraw($content['standings'][2]['table'][1]['draw']);
      $league_1->setLost($content['standings'][2]['table'][1]['lost']);
      $league_1->setGoalsFor($content['standings'][2]['table'][1]['goalsFor']);
      $league_1->setGoalsAgainst($content['standings'][2]['table'][1]['goalsAgainst']);
      $league_1->setCrestUrl($content['standings'][2]['table'][1]['team']['crestUrl']);
      $league_1->setPoints($content['standings'][2]['table'][1]['points']);
      $league_1->setName($content['standings'][2]['table'][1]['team']['name']);
      $entityManager->persist($league_1);
      $entityManager->flush();

      $league_2 = new EplLeague();
      $league_2->setID($content['standings'][2]['table'][2]['team']['id']);
      $league_2->setPosition($content['standings'][2]['table'][2]['position']);
      $league_2->setGamesPlayed($content['standings'][2]['table'][2]['playedGames']);
      $league_2->setWon($content['standings'][2]['table'][2]['won']);
      $league_2->setDraw($content['standings'][2]['table'][2]['draw']);
      $league_2->setLost($content['standings'][2]['table'][2]['lost']);
      $league_2->setGoalsFor($content['standings'][2]['table'][2]['goalsFor']);
      $league_2->setGoalsAgainst($content['standings'][2]['table'][2]['goalsAgainst']);
      $league_2->setCrestUrl($content['standings'][2]['table'][2]['team']['crestUrl']);
      $league_2->setPoints($content['standings'][2]['table'][2]['points']);
      $league_2->setName($content['standings'][2]['table'][2]['team']['name']);
      $entityManager->persist($league_2);
      $entityManager->flush();

      $league_3 = new EplLeague();
      $league_3->setID($content['standings'][2]['table'][3]['team']['id']);
      $league_3->setPosition($content['standings'][2]['table'][3]['position']);
      $league_3->setGamesPlayed($content['standings'][2]['table'][3]['playedGames']);
      $league_3->setWon($content['standings'][2]['table'][3]['won']);
      $league_3->setDraw($content['standings'][2]['table'][3]['draw']);
      $league_3->setLost($content['standings'][2]['table'][3]['lost']);
      $league_3->setGoalsFor($content['standings'][2]['table'][3]['goalsFor']);
      $league_3->setGoalsAgainst($content['standings'][2]['table'][3]['goalsAgainst']);
      $league_3->setCrestUrl($content['standings'][2]['table'][3]['team']['crestUrl']);
      $league_3->setPoints($content['standings'][2]['table'][3]['points']);
      $league_3->setName($content['standings'][2]['table'][3]['team']['name']);
      $entityManager->persist($league_3);
      $entityManager->flush();

      $league_4 = new EplLeague();
      $league_4->setID($content['standings'][2]['table'][4]['team']['id']);
      $league_4->setPosition($content['standings'][2]['table'][4]['position']);
      $league_4->setGamesPlayed($content['standings'][2]['table'][4]['playedGames']);
      $league_4->setWon($content['standings'][2]['table'][4]['won']);
      $league_4->setDraw($content['standings'][2]['table'][4]['draw']);
      $league_4->setLost($content['standings'][2]['table'][4]['lost']);
      $league_4->setGoalsFor($content['standings'][2]['table'][4]['goalsFor']);
      $league_4->setGoalsAgainst($content['standings'][2]['table'][4]['goalsAgainst']);
      $league_4->setCrestUrl($content['standings'][2]['table'][4]['team']['crestUrl']);
      $league_4->setPoints($content['standings'][2]['table'][4]['points']);
      $league_4->setName($content['standings'][2]['table'][4]['team']['name']);
      $entityManager->persist($league_4);
      $entityManager->flush();

      $league_5 = new EplLeague();
      $league_5->setID($content['standings'][2]['table'][5]['team']['id']);
      $league_5->setPosition($content['standings'][2]['table'][5]['position']);
      $league_5->setGamesPlayed($content['standings'][2]['table'][5]['playedGames']);
      $league_5->setWon($content['standings'][2]['table'][5]['won']);
      $league_5->setDraw($content['standings'][2]['table'][5]['draw']);
      $league_5->setLost($content['standings'][2]['table'][5]['lost']);
      $league_5->setGoalsFor($content['standings'][2]['table'][5]['goalsFor']);
      $league_5->setGoalsAgainst($content['standings'][2]['table'][5]['goalsAgainst']);
      $league_5->setCrestUrl($content['standings'][2]['table'][5]['team']['crestUrl']);
      $league_5->setPoints($content['standings'][2]['table'][5]['points']);
      $league_5->setName($content['standings'][2]['table'][5]['team']['name']);
      //dump($content);die;
      // updating the database everytime /epl/league is hit, there other good ways besides this
      $entityManager->persist($league_5);
      $entityManager->flush();

      return $this->render('epl_league/index.html.twig', [
        'controller_name' => 'EplLeagueController',
      ]);
    }
}

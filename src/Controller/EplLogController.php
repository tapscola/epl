<?php
/**
 * Created by PhpStorm.
 * User: tapscola
 * Date: 2019-09-17
 * Time: 13:19
 */

namespace App\Controller;


use App\Entity\EplLeague;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;


class EplLogController extends AbstractController
{
  /**
   * @Route("/epl/log")
   */
  public function showEpl(EntityManagerInterface $em)
  {
    $repository = $em->getRepository(EplLeague::class);
    /** @var EplLeague $teams */
    $teams = $repository->findAll();
    //dump($teams);die;
    return $this->render('epl_league/index.html.twig', [
      'name' => $teams[0]->getName(),
      'pos' => $teams[0]->getPosition(),
      'played' => $teams[0]->getGamesPlayed(),
      'won' => $teams[0]->getWon(),
      'lost' => $teams[0]->getLost(),
      'goalsfor' => $teams[0]->getGoalsFor(),
      'goalsagainst' => $teams[0]->getGoalsAgainst(),
      'draw' => $teams[0]->getDraw(),
      'points' => $teams[0]->getPoints(),
      'cresturl' => $teams[0]->getCrestUrl(),
      'name_1' => $teams[1]->getName(),
      'pos_1' => $teams[1]->getPosition(),
      'played_1' => $teams[1]->getGamesPlayed(),
      'won_1' => $teams[1]->getWon(),
      'lost_1' => $teams[1]->getLost(),
      'goalsfor_1' => $teams[1]->getGoalsFor(),
      'goalsagainst_1' => $teams[1]->getGoalsAgainst(),
      'draw_1' => $teams[1]->getDraw(),
      'points_1' => $teams[1]->getPoints(),
      'cresturl_1' => $teams[1]->getCrestUrl(),
      'name_2' => $teams[2]->getName(),
      'pos_2' => $teams[2]->getPosition(),
      'played_2' => $teams[2]->getGamesPlayed(),
      'won_2' => $teams[2]->getWon(),
      'lost_2' => $teams[2]->getLost(),
      'goalsfor_2' => $teams[2]->getGoalsFor(),
      'goalsagainst_2' => $teams[2]->getGoalsAgainst(),
      'draw_2' => $teams[2]->getDraw(),
      'points_2' => $teams[2]->getPoints(),
      'cresturl_2' => $teams[2]->getCrestUrl(),
      'name_3' => $teams[3]->getName(),
      'pos_3' => $teams[3]->getPosition(),
      'played_3' => $teams[3]->getGamesPlayed(),
      'won_3' => $teams[3]->getWon(),
      'lost_3' => $teams[3]->getLost(),
      'goalsfor_3' => $teams[3]->getGoalsFor(),
      'goalsagainst_3' => $teams[3]->getGoalsAgainst(),
      'draw_3' => $teams[3]->getDraw(),
      'points_3' => $teams[3]->getPoints(),
      'cresturl_3' => $teams[3]->getCrestUrl(),
      'name_4' => $teams[4]->getName(),
      'pos_4' => $teams[4]->getPosition(),
      'played_4' => $teams[4]->getGamesPlayed(),
      'won_4' => $teams[4]->getWon(),
      'lost_4' => $teams[4]->getLost(),
      'goalsfor_4' => $teams[4]->getGoalsFor(),
      'goalsagainst_4' => $teams[4]->getGoalsAgainst(),
      'draw_4' => $teams[4]->getDraw(),
      'points_4' => $teams[4]->getPoints(),
      'cresturl_4' => $teams[4]->getCrestUrl(),
      'name_5' => $teams[5]->getName(),
      'pos_5' => $teams[5]->getPosition(),
      'played_5' => $teams[5]->getGamesPlayed(),
      'won_5' => $teams[5]->getWon(),
      'lost_5' => $teams[5]->getLost(),
      'goalsfor_5' => $teams[5]->getGoalsFor(),
      'goalsagainst_5' => $teams[5]->getGoalsAgainst(),
      'draw_5' => $teams[5]->getDraw(),
      'points_5' => $teams[5]->getPoints(),
      'cresturl_5' => $teams[5]->getCrestUrl()
    ]);
  }
}

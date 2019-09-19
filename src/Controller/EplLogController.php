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
    //dump($teams[0]);die;
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
      'cresturl' => $teams[0]->getCrestUrl()
    ]);
  }

}

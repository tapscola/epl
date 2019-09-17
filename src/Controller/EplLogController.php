<?php
/**
 * Created by PhpStorm.
 * User: tapscola
 * Date: 2019-09-17
 * Time: 13:19
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class EplLogController extends AbstractController
{
  /**
   * @Route("/epl/log")
   */
  public function index()
  {
    return $this->render('epl_league/index.html.twig');
  }

}

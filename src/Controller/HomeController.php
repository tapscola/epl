<?php
/**
 * Created by PhpStorm.
 * User: tapiwamusasa
 * Date: 2019-09-20
 * Time: 10:08
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends AbstractController
{
  /**
   * @Route("/")
   */
  public function index()
  {
    return $this->render('epl_league/index.html.twig');
  }
}
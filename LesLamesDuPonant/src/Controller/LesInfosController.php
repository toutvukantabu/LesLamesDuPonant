<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LesInfosController extends AbstractController
{
    /**
     * @Route("/les/infos", name="les_infos")
     */
    public function index()
    {
        return $this->render('les_infos/index.html.twig', [
            'controller_name' => 'LesInfosController',
        ]);
    }
}

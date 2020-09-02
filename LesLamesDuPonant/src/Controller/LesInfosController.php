<?php

namespace App\Controller;

use App\Repository\HomeInfoRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LesInfosController extends AbstractController
{
    /**
     * @Route("/les/infos", name="les_infos")
     */
    public function index(HomeInfoRepository $homeInfoRepository)
    {
        return $this->render('les_infos/index.html.twig', [
            'controller_name' => 'LesInfosController',
            'home_infos' => $homeInfoRepository->findAll(),
        ]);
    }
}

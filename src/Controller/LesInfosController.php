<?php

namespace App\Controller;

use App\Repository\HomeInfoRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
class LesInfosController extends AbstractController
{
    /**
     * @Route("/infos", name="les_infos")
     */
    public function index(HomeInfoRepository $homeInfoRepository)
    {
        return $this->render('les_infos/index.html.twig', [
            'controller_name' => 'LesInfosController',
            'home_infos' => $homeInfoRepository->findAll(),
        ]);
    }
}

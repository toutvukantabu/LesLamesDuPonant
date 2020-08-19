<?php

namespace App\Controller;



use App\Repository\HomeDisciplineRepository;
use App\Repository\TimeStampRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(HomeDisciplineRepository $homeDisciplineRepository,UserRepository $userRepository, TimeStampRepository $timeStampRepository)
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'users' => $userRepository->findAll(),
            'time_stamp'=> $timeStampRepository->findall(),
            'home_disciplines' => $homeDisciplineRepository->findAll(),
        ]);
    }
}

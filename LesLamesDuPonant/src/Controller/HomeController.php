<?php

namespace App\Controller;

use App\Entity\TimeStamp;
use App\Entity\User;
use App\Repository\TimeStampRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(UserRepository $userRepository, TimeStampRepository $timeStameRepository)
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'users' => $userRepository->findAll(),
            'timeStamp'=> $timeStameRepository->findall(),
        ]);
    }
}

<?php

namespace App\Controller;



use App\Repository\UserRepository;
use App\Repository\HowWeAreRepository;
use App\Repository\TimeStampRepository;
use App\Repository\HomePicturesRepository;
use App\Repository\HomeDisciplineRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(HowWeAreRepository $howWeAreRepository, HomePicturesRepository $homePicturesRepository, HomeDisciplineRepository $homeDisciplineRepository, UserRepository $userRepository, TimeStampRepository $timeStampRepository)
    {

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'users' => $userRepository->findAll(),
            'how_we_are' => $howWeAreRepository->findAll(),
            'time_stamp' => $timeStampRepository->findby([],['id'=>'DESC'], ['limit'=>4]
            ),
            'home_disciplines' => $homeDisciplineRepository->findAll(),
            'home_pictures' => $homePicturesRepository->findAll(),
        ]);
    }
}

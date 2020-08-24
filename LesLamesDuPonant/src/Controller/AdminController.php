<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\Repository\MedievalFamilyRepository;
use App\Repository\HomeDisciplineRepository;
use App\Repository\ContactMessageRepository;
use App\Repository\TimeStampRepository;
use App\Repository\HomePicturesRepository;
use App\Repository\AMHERepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(HomePicturesRepository $homePicturesRepository,AMHERepository $aMHERepository,MedievalFamilyRepository $medievalFamilyRepository,HomeDisciplineRepository $homeDisciplineRepository,ContactMessageRepository $contactMessageRepository,TimeStampRepository $timeStampRepository,UserRepository $userRepository )
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
            'time_stamps' => $timeStampRepository->findAll(),
            'user' => $userRepository->findAll(),
            'contact_messages' => $contactMessageRepository->findAll(),
            'home_disciplines' => $homeDisciplineRepository->findAll(),
            'medieval_families' => $medievalFamilyRepository->findAll(),
            'amhes' => $aMHERepository->findAll(),  
            'home_pictures' => $homePicturesRepository->findAll(),
          

        ]);
    }
}

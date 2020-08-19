<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\TimeStamp;
use App\Repository\UserRepository;
use App\Repository\HomeDisciplineRepository;
use App\Entity\ContactMessage;
use App\Repository\ContactMessageRepository;
use App\Repository\TimeStampRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(HomeDisciplineRepository $homeDisciplineRepository,ContactMessageRepository $contactMessageRepository,TimeStampRepository $timeStampRepository,UserRepository $userRepository )
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
            'time_stamps' => $timeStampRepository->findAll(),
            'user' => $userRepository->findAll(),
            'contact_messages' => $contactMessageRepository->findAll(),
            'home_disciplines' => $homeDisciplineRepository->findAll(),

        ]);
    }
}

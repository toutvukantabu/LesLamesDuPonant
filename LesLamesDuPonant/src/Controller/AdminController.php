<?php

namespace App\Controller;

use App\Repository\AMHERepository;
use App\Repository\UserRepository;
use App\Repository\TimeStampRepository;
use App\Repository\HomePicturesRepository;
use App\Repository\ContactMessageRepository;
use App\Repository\HomeDisciplineRepository;
use App\Repository\MedievalFamilyRepository;
use App\Repository\LesLamesDuPonantRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;


class AdminController extends AbstractController
{
    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/admin", name="admin")
     */
    public function index(LesLamesDuPonantRepository $lesLamesDuPonantRepository, HomePicturesRepository $homePicturesRepository, AMHERepository $aMHERepository, MedievalFamilyRepository $medievalFamilyRepository, HomeDisciplineRepository $homeDisciplineRepository, ContactMessageRepository $contactMessageRepository, TimeStampRepository $timeStampRepository, UserRepository $userRepository)
    {
        return $this->render('admin.html.twig', [
            'controller_name' => 'AdminController',
            'time_stamps' => $timeStampRepository->findAll(),
            'users' => $userRepository->findAll(),
            'contact_messages' => $contactMessageRepository->findAll(),
            'home_disciplines' => $homeDisciplineRepository->findAll(),
            'medieval_families' => $medievalFamilyRepository->findAll(),
            'amhes' => $aMHERepository->findAll(),
            'home_pictures' => $homePicturesRepository->findAll(),
            'les_lames_du_ponants' => $lesLamesDuPonantRepository->findAll(),


        ]);
    }
}

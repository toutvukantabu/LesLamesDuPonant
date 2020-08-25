<?php

namespace App\Controller;
use App\Repository\AMHERepository;
use App\Repository\MedievalFamilyRepository;
use App\Repository\LesLamesDuPonantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LesAMHEController extends AbstractController
{
    /**
     * @Route("/lesamhe", name="les_amhe")
     */
    public function index(LesLamesDuPonantRepository $lesLamesDuPonantRepository,AMHERepository $aMHERepository,MedievalFamilyRepository $medievalFamilyRepository)
    {
        return $this->render('les_amhe/index.html.twig', [
            'controller_name' => 'LesAMHEController',
            'medieval_families' => $medievalFamilyRepository->findAll(),
            'amhes' => $aMHERepository->findAll(),
            'les_lames_du_ponants' => $lesLamesDuPonantRepository->findAll(),
        ]);
    }
    
}

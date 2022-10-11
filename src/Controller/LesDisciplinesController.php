<?php

namespace App\Controller;

use App\Repository\DisciplineRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LesDisciplinesController extends AbstractController
{
    /**
     * @Route("/disciplines", name="les_disciplines")
     */
    public function index(DisciplineRepository $disciplineRepository)
    {
        return $this->render('les_disciplines/index.html.twig', [
            'controller_name' => 'LesDisciplinesController',
            'disciplines' => $disciplineRepository->findAll(),
        ]);
    }
}

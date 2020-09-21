<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RgpdController extends AbstractController
{
    /**
     * @Route("/rgpd", name="rgpd")
     */
    public function index()
    {
        return $this->render('rgpd/index.html.twig', [
            'controller_name' => 'RgpdController',
        ]);
    }

/**
 * @route ("/mentions-legales", name="mentions_legale")
 */
public function politiquedeconf()
    {
        return $this->render('rgpd/mentions_legales.html.twig', [
            'controller_name' => 'RgpdController',
        ]);
    }

}





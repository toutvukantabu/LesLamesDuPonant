<?php

namespace App\Controller;

use App\Repository\CategoryForumRepository;
use App\Repository\HomeSectionForumRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LeForumController extends AbstractController
{
    /**
     * @Route("/forumldp", name="le_forum")
     */
    public function index(CategoryForumRepository $categoryForumRepository ,HomeSectionForumRepository $homeSectionForumRepository)
    {
        return $this->render('le_forum/index.html.twig', [
            'controller_name' => 'LeForumController',
            'home_section_forums' => $homeSectionForumRepository->findAll(),
            'category_forums' => $categoryForumRepository->findAll(),
        ]);
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\HomeSectionForum;
use App\Entity\SubjectForum;
use App\Repository\SubjectForumRepository;
use App\Repository\HomeSectionForumRepository;

class ForumHomeController extends AbstractController
{
    /**
     * @Route("/forum/home", name="forum_home")
     */
    public function index(HomeSectionForumRepository $homeSectionForumRepository, SubjectForumRepository $subjectForumRepository)
    {
        return $this->render('forum_home/index.html.twig', [
            'controller_name' => 'ForumHomeController',
            'home_section_forums' => $homeSectionForumRepository->findAll(),
            'subject_forums' => $subjectForumRepository->findAll(),
            
        ]);
    }
}

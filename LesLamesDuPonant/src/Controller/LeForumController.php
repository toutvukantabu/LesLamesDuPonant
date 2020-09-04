<?php

namespace App\Controller;

use App\Entity\MessageForum;
use App\Entity\SubjectForum;
use App\Entity\CategoryForum;
use App\Form\MessageForumType;
use App\Entity\HomeSectionForum;
use phpDocumentor\Reflection\Types\This;
use App\Repository\MessageForumRepository;
use App\Repository\SubjectForumRepository;
use App\Repository\CategoryForumRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\HomeSectionForumRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/forum" )
 */
class LeForumController extends AbstractController
{
    /**
     * @Route("/section", name="le_forum")
     */
    public function index(MessageForumRepository $messageForumRepository,SubjectForumRepository $subjectForumRepository,CategoryForumRepository $categoryForumRepository ,HomeSectionForumRepository $homeSectionForumRepository)
    {
        return $this->render('le_forum/index.html.twig', [
            'controller_name' => 'LeForumController',
            'home_section_forums' => $homeSectionForumRepository->findAll(),
            'category_forums' => $categoryForumRepository->findAll(),
            'subject_forums' => $subjectForumRepository->findAll(),
            'message_forums' => $messageForumRepository->findAll(),
            
        ]);
    }
    /**
     * @Route("/categories/{id}", name="le_forum_category", )
     */
    public function showCategory(CategoryForum $categoryForum, SubjectForum $subjectForum,HomeSectionForumRepository $homeSectionForumRepository, MessageForum $messageForum ): Response

    {
        return $this->render("le_forum/categoriesforum.html.twig",[

            "category_forum"=>$categoryForum,
            "subject_forum"=>$subjectForum,
            "message_forum"=>$messageForum,
            'home_section_forums' => $homeSectionForumRepository->findAll(),

            ]
    );  
}
  /**
     * @Route("/categories/sujet/{id}", name="le_forum_subject", )
     */
    public function showMessage($id,Request $request,CategoryForum $categoryForum, SubjectForum $subjectForum,HomeSectionForumRepository $homeSectionForumRepository, MessageForum $messageForum ){ 
        
    $messageForum = $this->getDoctrine()->getRepository(MessageForum::class)->findBy([

    ]);
    if(!$subjectForum){
        throw $this->createNotFoundException('Il n\'y a aucun sujets');
    }
    $messageForum = new MessageForum();
        $form = $this->createForm(MessageForumType::class, $messageForum);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $messageForum->setSubjectMessageForum($subjectForum);
            $messageForum->setDatePublicationMessageForum(new \DateTime('now'));
            $doctrine = $this->getDoctrine()->getManager();
            $doctrine->persist($messageForum);
            $doctrine->flush();
        }

        return $this->render("le_forum/subjectforum.html.twig",[

            "message_forum"=>$messageForum,
            'form' => $form->createView(),
            "category_forum"=>$categoryForum,
            "subject_forum"=>$subjectForum,
            'home_section_forums' => $homeSectionForumRepository->findAll(),

            ]
    );    
}
//     /**
//      * @Route("/categories/sujet/{id}", name="le_forum_subject", )
//      */
//     public function showsubject(CategoryForum $categoryForum, SubjectForum $subjectForum,HomeSectionForumRepository $homeSectionForumRepository, MessageForum $messageForum ): Response

//     {
//         return $this->render("le_forum/subjectforum.html.twig",[

//             "message_forum"=>$messageForum,
//             "category_forum"=>$categoryForum,
//             "subject_forum"=>$subjectForum,
//             'home_section_forums' => $homeSectionForumRepository->findAll(),            
//             ]);    
// }
  

}




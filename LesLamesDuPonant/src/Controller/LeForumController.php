<?php

namespace App\Controller;

use App\Entity\SubjectForum;
use App\Entity\CategoryForum;
use App\Form\SubjectForumType;
use phpDocumentor\Reflection\Types\This;
use App\Repository\MessageForumRepository;
use App\Repository\SubjectForumRepository;
use App\Repository\CategoryForumRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\HomeSectionForumRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * @Route("/forum" )
 */
class LeForumController extends AbstractController
{
    /**
     * @Route("/section", name="le_forum")
     */
    public function index(MessageForumRepository $messageForumRepository,
                        SubjectForumRepository $subjectForumRepository,
                        CategoryForumRepository $categoryForumRepository,
                        HomeSectionForumRepository $homeSectionForumRepository)
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
     * @Route("/categories/{slug}", name="le_forum_category")
     */
    public function showCategory( $slug ,CategoryForum $categoryForum, SubjectForumRepository $subjectForumRepository, Request $request){
        $categoryForum = $this->getDoctrine()->getRepository(CategoryForum::class)->findOneBy(['slug' => $slug]);
        $subjectForum = $this->getDoctrine()->getRepository(SubjectForum::class)->findBy([
            
     
        ]);
        if(!$categoryForum){

            throw $this->createNotFoundException('La categorie n\'existe pas');
        }
            if(!$subjectForum){

                throw $this->createNotFoundException('il n\'y a aucun sujet dans cette catégorie');

        }
        $subjectForum = new SubjectForum();
        $subjectForum->setUser($this->getUser());
        $form = $this->createForm(SubjectForumType::class, $subjectForum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($subjectForum);
            $entityManager->flush();



    }
    return $this->render('le_forum/categoriesforum.html.twig', [
        'form' => $form->createView(),
        'category_forum' => $categoryForum,
        'subject_forums' => $subjectForumRepository->findAll(),
    ]);

}
//     /**
//      * @Route("/categories/sujet/{id}", name="le_forum_subject", )
//      */
//     public function showMessage($id,Request $request,CategoryForum $categoryForum, SubjectForum $subjectForum,HomeSectionForumRepository $homeSectionForumRepository, MessageForum $messageForum ){ 
        
//     $messageForum = $this->getDoctrine()->getRepository(MessageForum::class)->findBy([

//     ]);
//     if(!$subjectForum){
//         throw $this->createNotFoundException('Il n\'y a aucun sujets');
//     }
//     $messageForum = new MessageForum();
//         $form = $this->createForm(MessageForumType::class, $messageForum);
//         $form->handleRequest($request);
//         if ($form->isSubmitted() && $form->isValid()) {
//             $messageForum->setUser($this->getUser());
//             $messageForum->setSubjectMessageForum($subjectForum);
//             $messageForum->setActive(true);
//             $doctrine = $this->getDoctrine()->getManager();
//             $doctrine->persist($messageForum);
//             $doctrine->flush();
//         }

//         return $this->render("le_forum/subjectforum.html.twig",[

//             "message_forum"=>$messageForum,
//             'form' => $form->createView(),
//             "category_forum"=>$categoryForum,
//             "subject_forum"=>$subjectForum,
//             'home_section_forums' => $homeSectionForumRepository->findAll(),

//             ]
//     );    
// }
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




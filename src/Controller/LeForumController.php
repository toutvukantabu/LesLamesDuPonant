<?php

namespace App\Controller;

use App\Entity\MessageForum;
use App\Entity\SubjectForum;
use App\Entity\CategoryForum;
use App\Form\MessageForumType;
use App\Form\SubjectForumType;

use App\Repository\CategoryForumRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\HomeSectionForumRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


/**
 * @Route("forum" )
 */
class LeForumController extends AbstractController
{
    /**
     * @Route("/section", name="le_forum")
     */
    public function index( HomeSectionForumRepository $homeSectionForumRepository){ 
    $categoryForum = $this->getDoctrine()->getRepository(CategoryForum::class)->findAll();                                             
    $subjectForum = $this->getDoctrine()->getRepository(SubjectForum::class)->findOneBy([
                'categorySubjectForum'=> $categoryForum,
                'active'=> 1 ,
     ],['dateSubjectForum'=>'DESC']);
        return $this->render('le_forum/index.html.twig', [
            'controller_name' => 'LeForumController',
            'home_section_forums' => $homeSectionForumRepository->findAll(),
            'category_forum' => $categoryForum,
            'subject_forum'=>$subjectForum,  
        ]);
    }
    
    /**
     * @Route("/categories/{slug}", name="le_forum_category", methods={"GET","POST"})
     */
    public function showCategory( $slug ,CategoryForum $categoryForum,CategoryForum $categorySubjectForum, Request $request,HomeSectionForumRepository $homeSectionForumRepository){
        $categoryForum = $this->getDoctrine()->getRepository(CategoryForum::class)->findOneBy(['slug' => $slug]);
        $subjectForum = $this->getDoctrine()->getRepository(SubjectForum::class)->findBy([
        'categorySubjectForum'=> $categoryForum,
        'active'=> 1 ,
        ],['dateSubjectForum'=>'DESC']);

        $subjectForum = new SubjectForum();
        $subjectForum->setUser($this->getUser());
        $subjectForum->setActive('1');
        $form = $this->createForm(SubjectForumType::class, $subjectForum);
        $form->add('submit', SubmitType::class, [
            'label' => 'envoyer',
            'attr' => ['class' => 'btn btn-default pull-right'],]);
        $form->handleRequest($request);

        if ($form->isSubmitted()&& $form->isValid()) {
            $subjectForum->setCategorySubjectForum( $this->categorySubjectForum = $categorySubjectForum);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($subjectForum);
            $entityManager->flush();

            return $this->redirectToRoute('le_forum_category',['slug'=> $slug]);

    }
    return $this->render('le_forum/categoriesforum.html.twig', [
        'form' => $form->createView(),
        'category_forum' => $categoryForum,
        'subject_forum' => $subjectForum,
        'home_section_forums' => $homeSectionForumRepository->findAll(),
    ]);

}
    /**
     * @Route("/categories/sujet/{slug}", name="le_forum_subject", methods={"GET","POST"})
     */
    public function showMessage($slug,
    Request $request,
    SubjectForum $subjectForum,
    SubjectForum $subjectMessageForum, 
    CategoryForumRepository $categoryForumRepository
    ,HomeSectionForumRepository $homeSectionForumRepository){
        $subjectForum = $this->getDoctrine()->getRepository(SubjectForum::class)->findOneBy(['slug' => $slug]);
        $messageForum= $this->getDoctrine()->getRepository(MessageForum::class)->findBy([
        'subjectMessageForum'=> $subjectForum,
        'active'=> 1 ,
        ],['datePublicationMessageForum'=>'DESC']);
 
        $messageForum = new MessageForum();
        $messageForum->setUser($this->getUser());
        $messageForum->setActive('1');
        $messageForum->getSubjectMessageForum( $this->subjectMessageForum = $subjectMessageForum);
        $form = $this->createForm(MessageForumType::class, $messageForum);
        $form->add('submit', SubmitType::class, [
            'label' => 'envoyer',
            'attr' => ['class' => 'btn btn-default pull-right'],
        ]);
        $form->handleRequest($request);



        if ($form->isSubmitted()&& $form->isValid()) {
            $messageForum->setSubjectMessageForum( $this->subjectMessageForum = $subjectMessageForum);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($messageForum);
            $entityManager->flush();
            return $this->redirectToRoute('le_forum_subject',['slug'=> $slug]);
    }

        return $this->render("le_forum/subjectforum.html.twig",[

            "message_forum"=>$messageForum,
            'form' => $form->createView(),
            'category_forums' => $categoryForumRepository->findAll(),
            'home_section_forums' => $homeSectionForumRepository->findAll(),
            "subject_forum"=>$subjectForum,

            ]
    );    
}


}
<?php

namespace App\Controller;

use App\Entity\MessageForum;
use App\Entity\SubjectForum;
use App\Entity\CategoryForum;
use App\Form\MessageForumType;
use App\Form\SubjectForumType;
use phpDocumentor\Reflection\Types\This;
use App\Repository\MessageForumRepository;
use App\Repository\SubjectForumRepository;
use App\Repository\CategoryForumRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\HomeSectionForumRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
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
            'subject_forum' => $subjectForum,
            
        ]);
    }

    /**
     * @Route("/categories/{slug}", name="le_forum_category")
     */
    public function showCategory( $slug ,CategoryForum $categoryForum,CategoryForum $categorySubjectForum, Request $request){
        $categoryForum = $this->getDoctrine()->getRepository(CategoryForum::class)->findOneBy(['slug' => $slug]);
        $subjectForum = $this->getDoctrine()->getRepository(SubjectForum::class)->findBy([
        'categorySubjectForum'=> $categoryForum,
        'active'=> 1 ,
        ],['dateSubjectForum'=>'DESC']);
        if(!$categoryForum){

            throw $this->createNotFoundException('La categorie n\'existe pas');
        }
            if(!$subjectForum){

                throw $this->createNotFoundException('il n\'y a aucun sujet dans cette catégorie');

        }
        $subjectForum = new SubjectForum();
        $subjectForum->setUser($this->getUser());
        $subjectForum->setActive('1');
        $subjectForum->setCategorySubjectForum( $this->categorySubjectForum = $categorySubjectForum);
        $form = $this->createForm(SubjectForumType::class, $subjectForum);
        $form->add('submit', SubmitType::class, [
            'label' => 'envoyer',
            'attr' => ['class' => 'btn btn-default pull-right'],
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted()&& $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($subjectForum);
            $entityManager->flush();

    }
    return $this->render('le_forum/categoriesforum.html.twig', [
        'form' => $form->createView(),
        'category_forum' => $categoryForum,
        'subject_forum' => $subjectForum,
        
    ]);

}
    /**
     * @Route("/categories/sujet/{slug}", name="le_forum_subject", )
     */
    public function showMessage($slug,
    Request $request,
    SubjectForum $subjectForum,
    SubjectForum $subjectMessageForum, 
    CategoryForumRepository $categoryForumRepository){
        $subjectForum = $this->getDoctrine()->getRepository(SubjectForum::class)->findOneBy(['slug' => $slug]);
        $messageForum= $this->getDoctrine()->getRepository(MessageForum::class)->findBy([
        'subjectMessageForum'=> $subjectForum,
        'active'=> 1 ,
        ],['datePublicationMessageForum'=>'DESC']);
        if(!$subjectForum){
            throw $this->createNotFoundException('Le sujet n\'existe pas');
        }
           
        $messageForum = new MessageForum();
        $messageForum->setUser($this->getUser());
        $messageForum->setActive('1');
        $messageForum->setSubjectMessageForum( $this->subjectMessageForum = $subjectMessageForum);
        $form = $this->createForm(MessageForumType::class, $messageForum);
        $form->add('submit', SubmitType::class, [
            'label' => 'envoyer',
            'attr' => ['class' => 'btn btn-default pull-right'],
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted()&& $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($messageForum);
            $entityManager->flush();

    }

        return $this->render("le_forum/subjectforum.html.twig",[

            "message_forum"=>$messageForum,
            'category_forums' => $categoryForumRepository->findAll(),
            "subject_forum"=>$subjectForum,

            ]
    );    
}


}
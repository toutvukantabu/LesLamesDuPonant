<?php

namespace App\Controller;

use App\Entity\SubjectForum;
use App\Form\SubjectForumType;
use App\Repository\SubjectForumRepository;
use App\Repository\CategoryForumRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/subject/forum")
 */
class SubjectForumController extends AbstractController
{
    /**
     * @Route("/", name="subject_forum_index", methods={"GET"})
     */
    public function index(SubjectForumRepository $subjectForumRepository,CategoryForumRepository $categoryForumRepository): Response
    {
        return $this->render('subject_forum/index.html.twig', [
            'subject_forums' => $subjectForumRepository->findAll(),
            'category_forums' => $categoryForumRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="subject_forum_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $subjectForum = new SubjectForum();
        $subjectForum->setUser($this->getUser());
        $form = $this->createForm(SubjectForumType::class, $subjectForum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($subjectForum);
            $entityManager->flush();

            return $this->redirectToRoute('subject_forum_index');
        }

        return $this->render('subject_forum/new.html.twig', [
            'subject_forum' => $subjectForum,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="subject_forum_show", methods={"GET"})
     */
    public function show(SubjectForum $subjectForum): Response
    {
        return $this->render('subject_forum/show.html.twig', [
            'subject_forum' => $subjectForum,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="subject_forum_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, SubjectForum $subjectForum): Response
    {
        $form = $this->createForm(SubjectForumType::class, $subjectForum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('subject_forum_index');
        }

        return $this->render('subject_forum/edit.html.twig', [
            'subject_forum' => $subjectForum,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="subject_forum_delete", methods={"DELETE"})
     */
    public function delete(Request $request, SubjectForum $subjectForum): Response
    {
        if ($this->isCsrfTokenValid('delete'.$subjectForum->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($subjectForum);
            $entityManager->flush();
        }

        return $this->redirectToRoute('subject_forum_index');
    }
        /**
     * @Route("/supprimer/{id}", name="supprimer_subject_forum")
     */
    public function supprimer(  SubjectForum $subjectForum){

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove( $subjectForum);
        $entityManager->flush();
        
        $this->addFlash(
            'how we are',
            'supprimé avec succes!');
        return $this->redirectToRoute('home_pictures_index');
    }
    
         /**
         * @Route("/activer/{id}", name="activer_subject_forum")
         */
        public function activer(  SubjectForum $subjectForum){
    
             $subjectForum->setActive(( $subjectForum->getActive())? false : true);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist( $subjectForum);
            $entityManager->flush();
            return new Response ('true');
           
        }
}

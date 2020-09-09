<?php

namespace App\Controller;

use App\Entity\MessageForum;
use App\Form\MessageForumType;
use App\Repository\MessageForumRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/message/forum")
 */
class MessageForumController extends AbstractController
{
    /**
     * @Route("/", name="message_forum_index", methods={"GET"})
     */
    public function index(MessageForumRepository $messageForumRepository): Response
    {
        return $this->render('message_forum/index.html.twig', [
            'message_forums' => $messageForumRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="message_forum_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $messageForum = new MessageForum();
        $messageForum->setUser($this->getUser());
        $form = $this->createForm(MessageForumType::class, $messageForum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($messageForum);
            $entityManager->flush();

            return $this->redirectToRoute('message_forum_index');
        }

        return $this->render('message_forum/new.html.twig', [
            'message_forum' => $messageForum,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="message_forum_show", methods={"GET"})
     */
    public function show(MessageForum $messageForum): Response
    {
        return $this->render('message_forum/show.html.twig', [
            'message_forum' => $messageForum,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="message_forum_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, MessageForum $messageForum): Response
    {
        $form = $this->createForm(MessageForumType::class, $messageForum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('message_forum_index');
        }

        return $this->render('message_forum/edit.html.twig', [
            'message_forum' => $messageForum,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="message_forum_delete", methods={"DELETE"})
     */
    public function delete(Request $request, MessageForum $messageForum): Response
    {
        if ($this->isCsrfTokenValid('delete'.$messageForum->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($messageForum);
            $entityManager->flush();
        }

        return $this->redirectToRoute('message_forum_index');
    }
        /**
     * @Route("/supprimer/{id}", name="supprimer_message_forum")
     */
    public function supprimer(  MessageForum $messageForum){

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove( $messageForum);
        $entityManager->flush();
        
        $this->addFlash(
            'how we are',
            'supprimé avec succes!');
        return $this->redirectToRoute('message_forum_index');
    }
    
         /**
         * @Route("/activer/{id}", name="activer_message_forum")
         */
        public function activer(  MessageForum $messageForum){
    
             $messageForum->setActive(( $messageForum->getActive())? false : true);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist( $messageForum);
            $entityManager->flush();
            return new Response ('true');
           
        }
}

<?php

namespace App\Controller;
use App\Entity\ContactMessage;
use App\Form\ContactMessageType;
use App\Repository\ContactMessageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("contact/message")
 */
class ContactMessageController extends AbstractController
{
    /**
     * @Route("/", name="contact_message_index", methods={"GET"})
     */
    public function index(ContactMessageRepository $contactMessageRepository): Response
    {
        return $this->render('contact_message/index.html.twig', [
            'contact_messages' => $contactMessageRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="contact_message_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $contactMessage = new ContactMessage();
        $contactMessage ->setDateContactMessage(new \DateTime());
        $form = $this->createForm(ContactMessageType::class, $contactMessage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contactMessage);
            $entityManager->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render('contact_message/new.html.twig', [
            'contact_message' => $contactMessage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="contact_message_show", methods={"GET"})
     */
    public function show(ContactMessage $contactMessage): Response
    {
        return $this->render('contact_message/show.html.twig', [
            'contact_message' => $contactMessage,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="contact_message_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, ContactMessage $contactMessage): Response
    {
        $form = $this->createForm(ContactMessageType::class, $contactMessage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin');
        }

        return $this->render('contact_message/edit.html.twig', [
            'contact_message' => $contactMessage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="contact_message_delete", methods={"DELETE"})
     */
    public function delete(Request $request, ContactMessage $contactMessage): Response
    {
        if ($this->isCsrfTokenValid('delete'.$contactMessage->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($contactMessage);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin');
    }
    /**
     * @Route("/supprimer/{id}", name="supprimer_contact_message")
     */
    public function supprimer( ContactMessage $contactMessage){

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove( $contactMessage);
        $entityManager->flush();
        
        $this->addFlash(
            'how we are',
            'supprimé avec succes!');
        return $this->redirectToRoute('contact_message_index');
    }
}

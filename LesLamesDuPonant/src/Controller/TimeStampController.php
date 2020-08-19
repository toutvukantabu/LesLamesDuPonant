<?php

namespace App\Controller;

use App\Entity\TimeStamp;
use App\Form\TimeStampType;
use App\Repository\TimeStampRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/time/stamp")
 */
class TimeStampController extends AbstractController
{
    /**
     * @Route("/", name="time_stamp_index", methods={"GET"})
     */
    public function index(TimeStampRepository $timeStampRepository): Response
    {
        return $this->render('time_stamp/index.html.twig', [
            'time_stamps' => $timeStampRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="time_stamp_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $timeStamp = new TimeStamp();
        $form = $this->createForm(TimeStampType::class, $timeStamp);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($timeStamp);
            $entityManager->flush();

            return $this->redirectToRoute('time_stamp_index');
        }

        return $this->render('time_stamp/new.html.twig', [
            'time_stamp' => $timeStamp,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="time_stamp_show", methods={"GET"})
     */
    public function show(TimeStamp $timeStamp): Response
    {
        return $this->render('time_stamp/show.html.twig', [
            'time_stamp' => $timeStamp,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="time_stamp_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TimeStamp $timeStamp): Response
    {
        $form = $this->createForm(TimeStampType::class, $timeStamp);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('time_stamp_index');
        }

        return $this->render('time_stamp/edit.html.twig', [
            'time_stamp' => $timeStamp,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="time_stamp_delete", methods={"DELETE"})
     */
    public function delete(Request $request, TimeStamp $timeStamp): Response
    {
        if ($this->isCsrfTokenValid('delete'.$timeStamp->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($timeStamp);
            $entityManager->flush();
        }

        return $this->redirectToRoute('time_stamp_index');
    }
}

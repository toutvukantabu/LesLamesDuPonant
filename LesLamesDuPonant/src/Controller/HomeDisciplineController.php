<?php

namespace App\Controller;

use App\Entity\HomeDiscipline;
use App\Form\HomeDisciplineType;
use App\Repository\HomeDisciplineRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/home/discipline")
 */
class HomeDisciplineController extends AbstractController
{
    /**
     * @Route("/", name="home_discipline_index", methods={"GET"})
     */
    public function index(HomeDisciplineRepository $homeDisciplineRepository): Response
    {
        return $this->render('home_discipline/index.html.twig', [
            'home_disciplines' => $homeDisciplineRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="home_discipline_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $homeDiscipline = new HomeDiscipline();
        $form = $this->createForm(HomeDisciplineType::class, $homeDiscipline);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($homeDiscipline);
            $entityManager->flush();

            return $this->redirectToRoute('home_discipline_index');
        }

        return $this->render('home_discipline/new.html.twig', [
            'home_discipline' => $homeDiscipline,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="home_discipline_show", methods={"GET"})
     */
    public function show(HomeDiscipline $homeDiscipline): Response
    {
        return $this->render('home_discipline/show.html.twig', [
            'home_discipline' => $homeDiscipline,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="home_discipline_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, HomeDiscipline $homeDiscipline): Response
    {
        $form = $this->createForm(HomeDisciplineType::class, $homeDiscipline);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('home_discipline_index');
        }

        return $this->render('home_discipline/edit.html.twig', [
            'home_discipline' => $homeDiscipline,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="home_discipline_delete", methods={"DELETE"})
     */
    public function delete(Request $request, HomeDiscipline $homeDiscipline): Response
    {
        if ($this->isCsrfTokenValid('delete'.$homeDiscipline->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($homeDiscipline);
            $entityManager->flush();
        }

        return $this->redirectToRoute('home_discipline_index');
    }
}

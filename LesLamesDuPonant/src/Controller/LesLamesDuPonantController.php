<?php

namespace App\Controller;

use App\Entity\LesLamesDuPonant;
use App\Form\LesLamesDuPonantType;
use App\Repository\LesLamesDuPonantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/les/lames/du/ponant")
 */
class LesLamesDuPonantController extends AbstractController
{
    /**
     * @Route("/", name="les_lames_du_ponant_index", methods={"GET"})
     */
    public function index(LesLamesDuPonantRepository $lesLamesDuPonantRepository): Response
    {
        return $this->render('les_lames_du_ponant/index.html.twig', [
            'les_lames_du_ponants' => $lesLamesDuPonantRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="les_lames_du_ponant_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $lesLamesDuPonant = new LesLamesDuPonant();
        $form = $this->createForm(LesLamesDuPonantType::class, $lesLamesDuPonant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($lesLamesDuPonant);
            $entityManager->flush();

            return $this->redirectToRoute('les_lames_du_ponant_index');
        }

        return $this->render('les_lames_du_ponant/new.html.twig', [
            'les_lames_du_ponant' => $lesLamesDuPonant,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="les_lames_du_ponant_show", methods={"GET"})
     */
    public function show(LesLamesDuPonant $lesLamesDuPonant): Response
    {
        return $this->render('les_lames_du_ponant/show.html.twig', [
            'les_lames_du_ponant' => $lesLamesDuPonant,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="les_lames_du_ponant_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, LesLamesDuPonant $lesLamesDuPonant): Response
    {
        $form = $this->createForm(LesLamesDuPonantType::class, $lesLamesDuPonant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('les_lames_du_ponant_index');
        }

        return $this->render('les_lames_du_ponant/edit.html.twig', [
            'les_lames_du_ponant' => $lesLamesDuPonant,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="les_lames_du_ponant_delete", methods={"DELETE"})
     */
    public function delete(Request $request, LesLamesDuPonant $lesLamesDuPonant): Response
    {
        if ($this->isCsrfTokenValid('delete'.$lesLamesDuPonant->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($lesLamesDuPonant);
            $entityManager->flush();
        }

        return $this->redirectToRoute('les_lames_du_ponant_index');
    }
}

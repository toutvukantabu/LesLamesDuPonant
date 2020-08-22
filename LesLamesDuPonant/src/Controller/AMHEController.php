<?php

namespace App\Controller;

use App\Entity\AMHE;
use App\Form\AMHEType;
use App\Repository\AMHERepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/amhe")
 */
class AMHEController extends AbstractController
{
    /**
     * @Route("/", name="amhe_index", methods={"GET"})
     */
    public function index(AMHERepository $aMHERepository): Response
    {
        return $this->render('amhe/index.html.twig', [
            'amhes' => $aMHERepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="amhe_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $aMHE = new AMHE();
        $form = $this->createForm(AMHEType::class, $aMHE);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($aMHE);
            $entityManager->flush();

            return $this->redirectToRoute('amhe_index');
        }

        return $this->render('amhe/new.html.twig', [
            'amhe' => $aMHE,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="amhe_show", methods={"GET"})
     */
    public function show(AMHE $aMHE): Response
    {
        return $this->render('amhe/show.html.twig', [
            'amhe' => $aMHE,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="amhe_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, AMHE $aMHE): Response
    {
        $form = $this->createForm(AMHEType::class, $aMHE);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('amhe_index');
        }

        return $this->render('amhe/edit.html.twig', [
            'amhe' => $aMHE,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="amhe_delete", methods={"DELETE"})
     */
    public function delete(Request $request, AMHE $aMHE): Response
    {
        if ($this->isCsrfTokenValid('delete'.$aMHE->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($aMHE);
            $entityManager->flush();
        }

        return $this->redirectToRoute('amhe_index');
    }
}

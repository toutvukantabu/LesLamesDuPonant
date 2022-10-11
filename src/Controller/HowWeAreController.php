<?php

namespace App\Controller;

use App\Entity\HowWeAre;
use App\Form\HowWeAreType;
use App\Repository\HowWeAreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 */
class HowWeAreController extends AbstractController
{
    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/", name="how_we_are_index", methods={"GET"})
     */
    public function index(HowWeAreRepository $howWeAreRepository): Response
    {
        return $this->render('how_we_are/index.html.twig', [
            'how_we_are' => $howWeAreRepository->findAll(),
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/new", name="how_we_are_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $howWeAre = new HowWeAre();
        $form = $this->createForm(HowWeAreType::class, $howWeAre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($howWeAre);
            $entityManager->flush();

            return $this->redirectToRoute('how_we_are_index');
        }

        return $this->render('how_we_are/new.html.twig', [
            'how_we_are' => $howWeAre,
            'form' => $form->createView(),
        ]);
    }

    // /**
    //  * 
    //  * @Route("/{id}", name="how_we_are_show", methods={"GET"})
    //  */
    // public function show(HowWeAre $howWeAre): Response
    // {
    //     return $this->render('how_we_are/show.html.twig', [
    //         'how_we_are' => $howWeAre,
    //     ]);
    // }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/{id}/edit", name="how_we_are_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, HowWeAre $howWeAre): Response
    {
        $form = $this->createForm(HowWeAreType::class, $howWeAre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('how_we_are_index');
        }

        return $this->render('how_we_are/edit.html.twig', [
            'how_we_are' => $howWeAre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/{id}", name="how_we_are_delete", methods={"DELETE"})
     */
    public function delete(Request $request, HowWeAre $howWeAre): Response
    {
        if ($this->isCsrfTokenValid('delete' . $howWeAre->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($howWeAre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('how_we_are_index');
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/supprimer/{id}", name="supprimer_how_we_are")
     */
    public function supprimerHowWeAre(HowWeAre $howWeAre)
    {

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($howWeAre);
        $entityManager->flush();

        $this->addFlash(
            'how we are',
            'supprimé avec succes!'
        );
        return $this->redirectToRoute('how_we_are_index');
    }

    /**    
     * @IsGranted("ROLE_ADMIN")
     * @Route("/activer/{id}", name="activer_how_we_are")
     */
    public function activerHowWeAre(HowWeAre $howWeAre)
    {

        $howWeAre->setActive(($howWeAre->getActive()) ? false : true);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($howWeAre);
        $entityManager->flush();
        return new Response('true');
    }
}

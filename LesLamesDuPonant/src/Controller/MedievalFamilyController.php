<?php

namespace App\Controller;

use App\Entity\MedievalFamily;
use App\Form\MedievalFamilyType;
use App\Repository\MedievalFamilyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("admin/famille-medievale")
 */
class MedievalFamilyController extends AbstractController
{
    /**
     * @Route("/", name="medieval_family_index", methods={"GET"})
     */
    public function index(MedievalFamilyRepository $medievalFamilyRepository): Response
    {
        return $this->render('medieval_family/index.html.twig', [
            'medieval_families' => $medievalFamilyRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="medieval_family_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $medievalFamily = new MedievalFamily();
        $form = $this->createForm(MedievalFamilyType::class, $medievalFamily);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($medievalFamily);
            $entityManager->flush();

            return $this->redirectToRoute('medieval_family_index');
        }

        return $this->render('medieval_family/new.html.twig', [
            'medieval_family' => $medievalFamily,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="medieval_family_show", methods={"GET"})
     */
    public function show(MedievalFamily $medievalFamily): Response
    {
        return $this->render('medieval_family/show.html.twig', [
            'medieval_family' => $medievalFamily,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="medieval_family_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, MedievalFamily $medievalFamily): Response
    {
        $form = $this->createForm(MedievalFamilyType::class, $medievalFamily);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('medieval_family_index');
        }

        return $this->render('medieval_family/edit.html.twig', [
            'medieval_family' => $medievalFamily,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="medieval_family_delete", methods={"DELETE"})
     */
    public function delete(Request $request, MedievalFamily $medievalFamily): Response
    {
        if ($this->isCsrfTokenValid('delete'.$medievalFamily->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($medievalFamily);
            $entityManager->flush();
        }

        return $this->redirectToRoute('medieval_family_index');
    }
        /**
     * @Route("/supprimer/{id}", name="supprimer_medieval_family")
     */
    public function supprimer( MedievalFamily $medievalFamily){

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove( $medievalFamily);
        $entityManager->flush();
        
        $this->addFlash(
            'how we are',
            'supprimé avec succes!');
        return $this->redirectToRoute('medieval_family_index');
    }
    
         /**
         * @Route("/activer/{id}", name="activer_medieval_family")
         */
        public function activer(  MedievalFamily $medievalFamily){
    
             $medievalFamily->setActive(( $medievalFamily->getActive())? false : true);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist( $medievalFamily);
            $entityManager->flush();
            return new Response ('true');
           
        }
}

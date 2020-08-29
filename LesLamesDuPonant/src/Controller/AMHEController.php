<?php

namespace App\Controller;

use App\Entity\AMHE;
use App\Form\AMHEType;
use App\Repository\AMHERepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

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
    public function new(Request $request, SluggerInterface $slugger): Response
    {
        $aMHE = new AMHE();
        $form = $this->createForm(AMHEType::class, $aMHE);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $photoOneAMHE = $form->get('photoOneAMHE')->getData();

            if ($photoOneAMHE) {
                $originalFilename = pathinfo($photoOneAMHE->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photoOneAMHE->guessExtension();

                try {
                    $photoOneAMHE->move(
                        $this->getParameter('amhe_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {}

                $aMHE->setphotoOneAMHE($newFilename);
            }
            /** Fin du code à ajouter **/

            /** Début du code à ajouter **/
            $photoTwoAMHE = $form->get('photoTwoAMHE')->getData();

            if ($photoTwoAMHE) {
                $originalFilename = pathinfo($photoTwoAMHE->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photoTwoAMHE->guessExtension();

                try {
                    $photoTwoAMHE->move(
                        $this->getParameter('amhe_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {}

                $aMHE->setphotoTwoAMHE($newFilename);
            }
            /** Fin du code à ajouter **/

            /** Début du code à ajouter **/
            $photoThreeAMHE = $form->get('photoThreeAMHE')->getData();

            if ($photoThreeAMHE) {
                $originalFilename = pathinfo($photoThreeAMHE->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photoThreeAMHE->guessExtension();

                try {
                    $photoThreeAMHE->move(
                        $this->getParameter('amhe_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {}

                $aMHE->setphotoThreeAMHE($newFilename);
            }
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
    public function edit(Request $request, AMHE $aMHE, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(AMHEType::class, $aMHE);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $photoOneAMHE = $form->get('photoOneAMHE')->getData();

            if ($photoOneAMHE) {
                $originalFilename = pathinfo($photoOneAMHE->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photoOneAMHE->guessExtension();

                try {
                    $photoOneAMHE->move(
                        $this->getParameter('amhe_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {}

                $aMHE->setphotoOneAMHE($newFilename);
            }
            /** Fin du code à ajouter **/

            /** Début du code à ajouter **/
            $photoTwoAMHE = $form->get('photoTwoAMHE')->getData();

            if ($photoTwoAMHE) {
                $originalFilename = pathinfo($photoTwoAMHE->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photoTwoAMHE->guessExtension();

                try {
                    $photoTwoAMHE->move(
                        $this->getParameter('amhe_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {}

                $aMHE->setphotoTwoAMHE($newFilename);
            }
            /** Fin du code à ajouter **/

            /** Début du code à ajouter **/
            $photoThreeAMHE = $form->get('photoThreeAMHE')->getData();

            if ($photoThreeAMHE) {
                $originalFilename = pathinfo($photoThreeAMHE->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photoThreeAMHE->guessExtension();

                try {
                    $photoThreeAMHE->move(
                        $this->getParameter('amhe_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {}

                $aMHE->setphotoThreeAMHE($newFilename);
            }
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
  /**
     * @Route("/supprimer/{id}", name="supprimer_amhe")
     */
    public function supprimer( AMHE  $aMHE){

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($aMHE);
        $entityManager->flush();
        
        $this->addFlash(
            'how we are',
            'supprimé avec succes!');
        return $this->redirectToRoute('how_we_are_index');
    }
    
    /**
         * @Route("/activer/{id}", name="activer_amhe")
         */
        public function activerAMHE ( AMHE  $aMHE){
    
            $aMHE->setActive(($aMHE->getActive())? false : true);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($aMHE);
            $entityManager->flush();
            return new Response ('true');
           

        }

}

<?php

namespace App\Controller;

use App\Entity\LesLamesDuPonant;
use App\Form\LesLamesDuPonantType;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\LesLamesDuPonantRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

/**
 * @Route("admin/LLDP")
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
    public function new(Request $request, SluggerInterface $slugger): Response
    {
        $lesLamesDuPonant = new LesLamesDuPonant();
        $form = $this->createForm(LesLamesDuPonantType::class, $lesLamesDuPonant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pictureLesLamesDuPonant = $form->get('pictureLesLamesDuPonant')->getData();

            if ($pictureLesLamesDuPonant) {
                $originalFilename = pathinfo($pictureLesLamesDuPonant->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $pictureLesLamesDuPonant->guessExtension();

                try {
                    $pictureLesLamesDuPonant->move(
                        $this->getParameter('leslamesduponant_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {}

                $lesLamesDuPonant->setpictureLesLamesDuPonant($newFilename);
            }
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
    public function edit(Request $request, LesLamesDuPonant $lesLamesDuPonant, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(LesLamesDuPonantType::class, $lesLamesDuPonant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pictureLesLamesDuPonant = $form->get('pictureLesLamesDuPonant')->getData();

            if ($pictureLesLamesDuPonant) {
                $originalFilename = pathinfo($pictureLesLamesDuPonant->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $pictureLesLamesDuPonant->guessExtension();

                try {
                    $pictureLesLamesDuPonant->move(
                        $this->getParameter('leslamesduponant_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {}

                $lesLamesDuPonant->setpictureLesLamesDuPonant($newFilename);
            }
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
    /**
     * @Route("/supprimer/{id}", name="supprimer_les_lames_du_ponant")
     */
    public function supprimer(  LesLamesDuPonant $lesLamesDuPonant){

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove( $lesLamesDuPonant);
        $entityManager->flush();
        
        $this->addFlash(
            'how we are',
            'supprimé avec succes!');
        return $this->redirectToRoute('home_pictures_index');
    }
    
         /**
         * @Route("/activer/{id}", name="activer_les_lames_du_ponant")
         */
        public function activer(  LesLamesDuPonant $lesLamesDuPonant){
    
             $lesLamesDuPonant->setActive(( $lesLamesDuPonant->getActive())? false : true);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist( $lesLamesDuPonant);
            $entityManager->flush();
            return new Response ('true');
           
        }
}

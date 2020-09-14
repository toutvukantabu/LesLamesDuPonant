<?php

namespace App\Controller;

use App\Entity\HomeDiscipline;
use App\Form\HomeDisciplineType;
use App\Repository\HomeDisciplineRepository;
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
 * @Route("admin/home/discipline")
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
    public function new(Request $request, SluggerInterface $slugger): Response
    {
        $homeDiscipline = new HomeDiscipline();
        $form = $this->createForm(HomeDisciplineType::class, $homeDiscipline);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageHomeDiscipline = $form->get('imageHomeDiscipline')->getData();

            if ($imageHomeDiscipline) {
                $originalFilename = pathinfo($imageHomeDiscipline->getClientOriginalName(), PATHINFO_FILENAME);
                // ceci est nécessaire pour inclure en toute sécurité le nom de fichier dans l'URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageHomeDiscipline->guessExtension();

                // Déplacez le fichier dans le répertoire où les brochures sont stockées
                try {
                    $imageHomeDiscipline->move(
                        $this->getParameter('discipline_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... gérer l'exception si quelque chose se produit pendant le téléchargement du fichier
                }

                // met à jour la propriété 'imageHomeDiscipline' pour stocker le nom du fichier PDF
                // au lieu de son contenu
                $homeDiscipline->setimageHomeDiscipline($newFilename);
            }
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
    public function edit(Request $request, HomeDiscipline $homeDiscipline, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(HomeDisciplineType::class, $homeDiscipline);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageHomeDiscipline = $form->get('imageHomeDiscipline')->getData();

            if ($imageHomeDiscipline) {
                $originalFilename = pathinfo($imageHomeDiscipline->getClientOriginalName(), PATHINFO_FILENAME);
                // ceci est nécessaire pour inclure en toute sécurité le nom de fichier dans l'URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageHomeDiscipline->guessExtension();

                // Déplacez le fichier dans le répertoire où les brochures sont stockées
                try {
                    $imageHomeDiscipline->move(
                        $this->getParameter('discipline_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... gérer l'exception si quelque chose se produit pendant le téléchargement du fichier
                }

                // met à jour la propriété 'imageHomeDiscipline' pour stocker le nom du fichier PDF
                // au lieu de son contenu
                $homeDiscipline->setimageHomeDiscipline($newFilename);
            }
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('home_discipline_index',array('id' => $homeDiscipline ->getId()));
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

        return $this->redirectToRoute('admin');
    }
       /**
     * @Route("/supprimer/{id}", name="supprimer_home_discipline")
     */
public function supprimer( HomeDiscipline $homeDiscipline){

    $entityManager = $this->getDoctrine()->getManager();
    $entityManager->remove($homeDiscipline);
    $entityManager->flush();
    
    $this->addFlash(
        'how we are',
        'supprimé avec succes!');
    return $this->redirectToRoute('home_discipline_index');
}

/**
     * @Route("/activer/{id}", name="activer_home_discipline")
     */
    public function activerhomeDiscipline( HomeDiscipline $homeDiscipline){

        $homeDiscipline->setActive(($homeDiscipline->getActive())? false : true);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($homeDiscipline);
        $entityManager->flush();
        return new Response ('true');
       
    }

}

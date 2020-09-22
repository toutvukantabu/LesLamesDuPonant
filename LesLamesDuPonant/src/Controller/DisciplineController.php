<?php

namespace App\Controller;

use App\Entity\Discipline;
use App\Form\DisciplineType;
use App\Repository\DisciplineRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("admin/discipline")
 */
class DisciplineController extends AbstractController
{
    /**@IsGranted("ROLE_USER")
     * @Route("/", name="discipline_index", methods={"GET"})
     */
    public function index(DisciplineRepository $disciplineRepository): Response
    {
        return $this->render('discipline/index.html.twig', [
            'disciplines' => $disciplineRepository->findAll(),
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/new", name="discipline_new", methods={"GET","POST"})
     */
    public function new(Request $request, SluggerInterface $slugger): Response
    {
        $discipline = new Discipline();
        $form = $this->createForm(DisciplineType::class, $discipline);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $photoInstructor = $form->get('photoInstructor')->getData();

            if ($photoInstructor) {
                $originalFilename = pathinfo($photoInstructor->getClientOriginalName(), PATHINFO_FILENAME);
                // ceci est nécessaire pour inclure en toute sécurité le nom de fichier dans l'URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photoInstructor->guessExtension();

                // Déplacez le fichier dans le répertoire où les brochures sont stockées
                try {
                    $photoInstructor->move(
                        $this->getParameter('discipline_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... gérer l'exception si quelque chose se produit pendant le téléchargement du fichier
                }

                // met à jour la propriété 'photoInstructor' pour stocker le nom du fichier PDF
                // au lieu de son contenu
                $discipline->setPhotoInstructor($newFilename);
            }
            $imageTwoDiscipline = $form->get('imageTwoDiscipline')->getData();

            if ($imageTwoDiscipline) {
                $originalFilename = pathinfo($imageTwoDiscipline->getClientOriginalName(), PATHINFO_FILENAME);
                // ceci est nécessaire pour inclure en toute sécurité le nom de fichier dans l'URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageTwoDiscipline->guessExtension();

                // Déplacez le fichier dans le répertoire où les brochures sont stockées
                try {
                    $imageTwoDiscipline->move(
                        $this->getParameter('discipline_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                }

                $discipline->setImageTwoDiscipline($newFilename);
            }

            $imageOneDiscipline = $form->get('imageOneDiscipline')->getData();

            if ($imageOneDiscipline) {
                $originalFilename = pathinfo($imageOneDiscipline->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageOneDiscipline->guessExtension();

                try {
                    $imageOneDiscipline->move(
                        $this->getParameter('discipline_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                }

                $discipline->setImageOneDiscipline($newFilename);
            }

            $imageThreeDiscipline = $form->get('imageThreeDiscipline')->getData();

            if ($imageThreeDiscipline) {
                $originalFilename = pathinfo($imageThreeDiscipline->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageThreeDiscipline->guessExtension();

                try {
                    $imageThreeDiscipline->move(
                        $this->getParameter('discipline_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                }

                $discipline->setImageThreeDiscipline($newFilename);
            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($discipline);
            $entityManager->flush();

            return $this->redirectToRoute('discipline_index');
        }

        return $this->render('discipline/new.html.twig', [
            'discipline' => $discipline,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/{id}", name="discipline_show", methods={"GET"})
     */
    public function show(Discipline $discipline): Response
    {
        return $this->render('discipline/show.html.twig', [
            'discipline' => $discipline,
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/{id}/edit", name="discipline_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Discipline $discipline, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(DisciplineType::class, $discipline);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $photoInstructor = $form->get('photoInstructor')->getData();

            if ($photoInstructor) {
                $originalFilename = pathinfo($photoInstructor->getClientOriginalName(), PATHINFO_FILENAME);
                // ceci est nécessaire pour inclure en toute sécurité le nom de fichier dans l'URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photoInstructor->guessExtension();

                // Déplacez le fichier dans le répertoire où les brochures sont stockées
                try {
                    $photoInstructor->move(
                        $this->getParameter('discipline_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... gérer l'exception si quelque chose se produit pendant le téléchargement du fichier
                }

                // met à jour la propriété 'photoInstructor' pour stocker le nom du fichier PDF
                // au lieu de son contenu
                $discipline->setPhotoInstructor($newFilename);
            }

            $imageTwoDiscipline = $form->get('imageTwoDiscipline')->getData();

            if ($imageTwoDiscipline) {
                $originalFilename = pathinfo($imageTwoDiscipline->getClientOriginalName(), PATHINFO_FILENAME);
                // ceci est nécessaire pour inclure en toute sécurité le nom de fichier dans l'URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageTwoDiscipline->guessExtension();

                // Déplacez le fichier dans le répertoire où les brochures sont stockées
                try {
                    $imageTwoDiscipline->move(
                        $this->getParameter('discipline_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... gérer l'exception si quelque chose se produit pendant le téléchargement du fichier
                }

                // met à jour la propriété 'imageTwoDiscipline' pour stocker le nom du fichier PDF
                // au lieu de son contenu
                $discipline->setImageTwoDiscipline($newFilename);
            }
            /** Fin du code à ajouter **/
            $imageOneDiscipline = $form->get('imageOneDiscipline')->getData();

            if ($imageOneDiscipline) {
                $originalFilename = pathinfo($imageOneDiscipline->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageOneDiscipline->guessExtension();

                try {
                    $imageOneDiscipline->move(
                        $this->getParameter('discipline_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                }

                $discipline->setImageOneDiscipline($newFilename);
            }

            $imageThreeDiscipline = $form->get('imageThreeDiscipline')->getData();

            if ($imageThreeDiscipline) {
                $originalFilename = pathinfo($imageThreeDiscipline->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageThreeDiscipline->guessExtension();

                try {
                    $imageThreeDiscipline->move(
                        $this->getParameter('discipline_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                }

                $discipline->setImageThreeDiscipline($newFilename);
            }
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('discipline_index');
        }

        return $this->render('discipline/edit.html.twig', [
            'discipline' => $discipline,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/{id}", name="discipline_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Discipline $discipline): Response
    {
        if ($this->isCsrfTokenValid('delete' . $discipline->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($discipline);
            $entityManager->flush();
        }

        return $this->redirectToRoute('discipline_index');
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/supprimer/{id}", name="supprimer_discipline")
     */
    public function supprimer(Discipline $discipline)
    {

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($discipline);
        $entityManager->flush();

        $this->addFlash(
            'how we are',
            'supprimé avec succes!'
        );
        return $this->redirectToRoute('discipline_index');
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/activer/{id}", name="activer_discipline")
     */
    public function activerdiscipline(Discipline $discipline)
    {

        $discipline->setActive(($discipline->getActive()) ? false : true);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($discipline);
        $entityManager->flush();
        return new Response('true');
    }
}

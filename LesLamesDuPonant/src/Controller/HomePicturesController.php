<?php

namespace App\Controller;

use App\Entity\HomePictures;
use App\Form\HomePicturesType;
use App\Repository\HomePicturesRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("admin/photo-accueil")
 */
class HomePicturesController extends AbstractController
{
    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/", name="home_pictures_index", methods={"GET"})
     */
    public function index(HomePicturesRepository $homePicturesRepository): Response
    {
        return $this->render('home_pictures/index.html.twig', [
            'home_pictures' => $homePicturesRepository->findAll(),
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/new", name="home_pictures_new", methods={"GET","POST"})
     */
    public function new(Request $request, SluggerInterface $slugger): Response
    {
        $homePicture = new HomePictures();
        $form = $this->createForm(HomePicturesType::class, $homePicture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $homeLogoPicture = $form->get('homeLogoPicture')->getData();

            if ($homeLogoPicture) {
                $originalFilename = pathinfo($homeLogoPicture->getClientOriginalName(), PATHINFO_FILENAME);
                // ceci est nécessaire pour inclure en toute sécurité le nom de fichier dans l'URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $homeLogoPicture->guessExtension();

                // Déplacez le fichier dans le répertoire où les brochures sont stockées
                try {
                    $homeLogoPicture->move(
                        $this->getParameter('homepicture_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... gérer l'exception si quelque chose se produit pendant le téléchargement du fichier
                }

                // met à jour la propriété 'homeLogoPicture' pour stocker le nom du fichier PDF
                // au lieu de son contenu
                $homePicture->sethomeLogoPicture($newFilename);
            }
            $homeTitlePicture = $form->get('homeTitlePicture')->getData();

            if ($homeTitlePicture) {
                $originalFilename = pathinfo($homeTitlePicture->getClientOriginalName(), PATHINFO_FILENAME);
                // ceci est nécessaire pour inclure en toute sécurité le nom de fichier dans l'URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $homeTitlePicture->guessExtension();

                // Déplacez le fichier dans le répertoire où les brochures sont stockées
                try {
                    $homeTitlePicture->move(
                        $this->getParameter('homepicture_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... gérer l'exception si quelque chose se produit pendant le téléchargement du fichier
                }

                // met à jour la propriété 'homeTitlePicture' pour stocker le nom du fichier PDF
                // au lieu de son contenu
                $homePicture->sethomeTitlePicture($newFilename);
            }
            /** Fin du code à ajouter **/
            $homeParallax1 = $form->get('homeParallax1')->getData();

            if ($homeParallax1) {
                $originalFilename = pathinfo($homeParallax1->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $homeParallax1->guessExtension();

                try {
                    $homeParallax1->move(
                        $this->getParameter('homepicture_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                }

                $homePicture->sethomeParallax1($newFilename);
            }

            $homeParallax2 = $form->get('homeParallax2')->getData();

            if ($homeParallax2) {
                $originalFilename = pathinfo($homeParallax2->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $homeParallax2->guessExtension();

                try {
                    $homeParallax2->move(
                        $this->getParameter('homepicture_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                }

                $homePicture->sethomeParallax2($newFilename);
            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($homePicture);
            $entityManager->flush();

            return $this->redirectToRoute('home_pictures_index');
        }

        return $this->render('home_pictures/new.html.twig', [
            'home_pictures' => $homePicture,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/{id}", name="home_pictures_show", methods={"GET"})
     */
    public function show(HomePictures $homePicture): Response
    {
        return $this->render('home_pictures/show.html.twig', [
            'home_pictures' => $homePicture,
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/{id}/edit", name="home_pictures_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, HomePictures $homePicture, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(HomePicturesType::class, $homePicture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $homeLogoPicture = $form->get('homeLogoPicture')->getData();

            if ($homeLogoPicture) {
                $originalFilename = pathinfo($homeLogoPicture->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $homeLogoPicture->guessExtension();

                try {
                    $homeLogoPicture->move(
                        $this->getParameter('homepicture_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                }
                $homePicture->sethomeLogoPicture($newFilename);
            }
            $homeTitlePicture = $form->get('homeTitlePicture')->getData();

            if ($homeTitlePicture) {
                $originalFilename = pathinfo($homeTitlePicture->getClientOriginalName(), PATHINFO_FILENAME);
                // ceci est nécessaire pour inclure en toute sécurité le nom de fichier dans l'URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $homeTitlePicture->guessExtension();

                // Déplacez le fichier dans le répertoire où les brochures sont stockées
                try {
                    $homeTitlePicture->move(
                        $this->getParameter('homepicture_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... gérer l'exception si quelque chose se produit pendant le téléchargement du fichier
                }

                // met à jour la propriété 'homeTitlePicture' pour stocker le nom du fichier PDF
                // au lieu de son contenu
                $homePicture->sethomeTitlePicture($newFilename);
            }
            /** Fin du code à ajouter **/
            $homeParallax1 = $form->get('homeParallax1')->getData();

            if ($homeParallax1) {
                $originalFilename = pathinfo($homeParallax1->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $homeParallax1->guessExtension();

                try {
                    $homeParallax1->move(
                        $this->getParameter('homepicture_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                }

                $homePicture->sethomeParallax1($newFilename);
            }

            $homeParallax2 = $form->get('homeParallax2')->getData();

            if ($homeParallax2) {
                $originalFilename = pathinfo($homeParallax2->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $homeParallax2->guessExtension();

                try {
                    $homeParallax2->move(
                        $this->getParameter('homepicture_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                }

                $homePicture->sethomeParallax2($newFilename);
            }
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('home_pictures_index');
        }

        return $this->render('home_pictures/edit.html.twig', [
            'home_pictures' => $homePicture,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/supprimer/{id}", name="supprimer_home_pictures")
     */
    public function supprimer(HomePictures $homePicture)
    {

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($homePicture);
        $entityManager->flush();

        $this->addFlash(
            'how we are',
            'supprimé avec succes!'
        );
        return $this->redirectToRoute('home_pictures_index');
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/activer/{id}", name="activer_home_pictures")
     */
    public function activerHomePictures(HomePictures $homePicture)
    {

        $homePicture->setActive(($homePicture->getActive()) ? false : true);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($homePicture);
        $entityManager->flush();
        return new Response('true');
    }

    public function displayLogo(HomePicturesRepository $homePicturesRepository): Response
    {
        return $this->render('home_pictures/logo.html.twig', [
            'logo' => $homePicturesRepository->findAll(),
        ]);
    }
}

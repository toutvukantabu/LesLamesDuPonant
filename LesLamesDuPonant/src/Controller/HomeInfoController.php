<?php

namespace App\Controller;

use App\Entity\HomeInfo;
use App\Form\HomeInfoType;
use App\Repository\HomeInfoRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

/**
 * @Route("/home/info")
 */
class HomeInfoController extends AbstractController
{
    /**
     * @Route("/", name="home_info_index", methods={"GET"})
     */
    public function index(HomeInfoRepository $homeInfoRepository): Response
    {
        return $this->render('home_info/index.html.twig', [
            'home_infos' => $homeInfoRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="home_info_new", methods={"GET","POST"})
     */
    public function new(Request $request, SluggerInterface $slugger): Response
    {
        $homeInfo = new HomeInfo();
        $form = $this->createForm(HomeInfoType::class, $homeInfo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
          $imageOneInfo = $form->get('imageOneInfo')->getData();

            if ($imageOneInfo) {
                $originalFilename = pathinfo($imageOneInfo->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageOneInfo->guessExtension();

                try {
                  $imageOneInfo->move(
                        $this->getParameter('info_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {}

                $homeInfo->setImageOneInfo($newFilename);
            }
            /** Fin du code à ajouter **/

            /** Début du code à ajouter **/
           $imageTwoInfo = $form->get('imageTwoInfo')->getData();

            if ($imageTwoInfo) {
                $originalFilename = pathinfo($imageTwoInfo->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' .$imageTwoInfo->guessExtension();

                try {
                   $imageTwoInfo->move(
                        $this->getParameter('info_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {}

                $homeInfo->setImageTwoInfo($newFilename);
            }
            /** Fin du code à ajouter **/

            /** Début du code à ajouter **/
            $imageThreeInfo = $form->get('imageThreeInfo')->getData();

            if ($imageThreeInfo) {
                $originalFilename = pathinfo($imageThreeInfo->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageThreeInfo->guessExtension();

                try {
                    $imageThreeInfo->move(
                        $this->getParameter('info_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {}

                $homeInfo->setImageThreeInfo($newFilename);
            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($homeInfo);
            $entityManager->flush();

            return $this->redirectToRoute('home_info_index');
        }

        return $this->render('home_info/new.html.twig', [
            'home_info' => $homeInfo,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="home_info_show", methods={"GET"})
     */
    public function show(HomeInfo $homeInfo): Response
    {
        return $this->render('home_info/show.html.twig', [
            'home_info' => $homeInfo,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="home_info_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, HomeInfo $homeInfo, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(HomeInfoType::class, $homeInfo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
          $imageOneInfo = $form->get('imageOneInfo')->getData();

            if ($imageOneInfo) {
                $originalFilename = pathinfo($imageOneInfo->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageOneInfo->guessExtension();

                try {
                  $imageOneInfo->move(
                        $this->getParameter('info_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {}

                $homeInfo->setImageOneInfo($newFilename);
            }
            /** Fin du code à ajouter **/

            /** Début du code à ajouter **/
           $imageTwoInfo = $form->get('imageTwoInfo')->getData();

            if ($imageTwoInfo) {
                $originalFilename = pathinfo($imageTwoInfo->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' .$imageTwoInfo->guessExtension();

                try {
                   $imageTwoInfo->move(
                        $this->getParameter('info_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {}

                $homeInfo->setImageTwoInfo($newFilename);
            }
            /** Fin du code à ajouter **/

            /** Début du code à ajouter **/
            $imageThreeInfo = $form->get('imageThreeInfo')->getData();

            if ($imageThreeInfo) {
                $originalFilename = pathinfo($imageThreeInfo->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageThreeInfo->guessExtension();

                try {
                    $imageThreeInfo->move(
                        $this->getParameter('info_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {}

                $homeInfo->setImageThreeInfo($newFilename);
            }
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('home_info_index');
        }

        return $this->render('home_info/edit.html.twig', [
            'home_info' => $homeInfo,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="home_info_delete", methods={"DELETE"})
     */
    public function delete(Request $request, HomeInfo $homeInfo): Response
    {
        if ($this->isCsrfTokenValid('delete'.$homeInfo->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($homeInfo);
            $entityManager->flush();
        }

        return $this->redirectToRoute('home_info_index');
    }
     /**
     * @Route("/supprimer/{id}", name="supprimer_home_info")
     */
    public function supprimer(  HomeInfo $homeInfo){

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($homeInfo);
        $entityManager->flush();
        
        $this->addFlash(
            'how we are',
            'supprimé avec succes!');
        return $this->redirectToRoute('how_we_are_index');
    }
    
         /**
         * @Route("/activer/{id}", name="activer_home_info")
         */
        public function activerdiscipline(  HomeInfo $homeInfo){
    
            $homeInfo->setActive(($homeInfo->getActive())? false : true);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($homeInfo);
            $entityManager->flush();
            return new Response ('true');
           
        }


}

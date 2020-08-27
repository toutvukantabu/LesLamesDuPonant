<?php

namespace App\Controller;

use App\Entity\HomeInfo;
use App\Form\HomeInfoType;
use App\Repository\HomeInfoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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
    public function new(Request $request): Response
    {
        $homeInfo = new HomeInfo();
        $form = $this->createForm(HomeInfoType::class, $homeInfo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
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
    public function edit(Request $request, HomeInfo $homeInfo): Response
    {
        $form = $this->createForm(HomeInfoType::class, $homeInfo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
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
}

<?php

namespace App\Controller;

use App\Entity\HomeSectionForum;
use App\Form\HomeSectionForumType;
use App\Repository\HomeSectionForumRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/home/section/forum")
 */
class HomeSectionForumController extends AbstractController
{
    /**
     * @Route("/", name="home_section_forum_index", methods={"GET"})
     */
    public function index(HomeSectionForumRepository $homeSectionForumRepository): Response
    {
        return $this->render('home_section_forum/index.html.twig', [
            'home_section_forums' => $homeSectionForumRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="home_section_forum_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $homeSectionForum = new HomeSectionForum();
        $form = $this->createForm(HomeSectionForumType::class, $homeSectionForum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($homeSectionForum);
            $entityManager->flush();

            return $this->redirectToRoute('home_section_forum_index');
        }

        return $this->render('home_section_forum/new.html.twig', [
            'home_section_forum' => $homeSectionForum,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="home_section_forum_show", methods={"GET"})
     */
    public function show(HomeSectionForum $homeSectionForum): Response
    {
        return $this->render('home_section_forum/show.html.twig', [
            'home_section_forum' => $homeSectionForum,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="home_section_forum_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, HomeSectionForum $homeSectionForum): Response
    {
        $form = $this->createForm(HomeSectionForumType::class, $homeSectionForum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('home_section_forum_index');
        }

        return $this->render('home_section_forum/edit.html.twig', [
            'home_section_forum' => $homeSectionForum,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="home_section_forum_delete", methods={"DELETE"})
     */
    public function delete(Request $request, HomeSectionForum $homeSectionForum): Response
    {
        if ($this->isCsrfTokenValid('delete'.$homeSectionForum->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($homeSectionForum);
            $entityManager->flush();
        }

        return $this->redirectToRoute('home_section_forum_index');
    }
}

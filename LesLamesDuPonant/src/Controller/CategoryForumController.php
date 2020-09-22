<?php

namespace App\Controller;

use App\Entity\CategoryForum;
use App\Form\CategoryForumType;
use App\Repository\CategoryForumRepository;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("admin/category/forum")
 */
class CategoryForumController extends AbstractController
{
    /**
     * @IsGranted("ROLE_USER")
     * @Route("/", name="category_forum_index", methods={"GET"})
     */
    public function index(CategoryForumRepository $categoryForumRepository ): Response
    {
        return $this->render('category_forum/index.html.twig', [
            'category_forums' => $categoryForumRepository->findAll(),
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/new", name="category_forum_new", methods={"GET","POST"})
     */
    public function new(Request $request, SluggerInterface $slugger): Response
    {
        $categoryForum = new CategoryForum();
        $categoryForum->setUser($this->getUser());
        $form = $this->createForm(CategoryForumType::class, $categoryForum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($categoryForum);
            $entityManager->flush();

            return $this->redirectToRoute('category_forum_index');
        }

        return $this->render('category_forum/new.html.twig', [
            'category_forum' => $categoryForum,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/{id}", name="category_forum_show", methods={"GET"})
     */
    public function show(CategoryForum $categoryForum): Response
    {
        return $this->render('category_forum/show.html.twig', [
            'category_forum' => $categoryForum,
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/{id}/edit", name="category_forum_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, CategoryForum $categoryForum): Response
    {
        $form = $this->createForm(CategoryForumType::class, $categoryForum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('category_forum_index');
        }

        return $this->render('category_forum/edit.html.twig', [
            'category_forum' => $categoryForum,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/{id}", name="category_forum_delete", methods={"DELETE"})
     */
    public function delete(Request $request, CategoryForum $categoryForum): Response
    {
        if ($this->isCsrfTokenValid('delete'.$categoryForum->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($categoryForum);
            $entityManager->flush();
        }

        return $this->redirectToRoute('category_forum_index');
    }
     /**
      * @IsGranted("ROLE_ADMIN")
     * @Route("/supprimer/{id}", name="supprimer_category_forum")
     */
         public function supprimer( CategoryForum $categoryForum){

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove( $categoryForum);
        $entityManager->flush();
        
        $this->addFlash(
            'how we are',
            'supprimé avec succes!');
        return $this->redirectToRoute('category_forum_index');
    }
    
        /**
         * @IsGranted("ROLE_ADMIN")
         * @Route("/activer/{id}", name="activer_category_forum")
         */
        public function activerAMHE ( CategoryForum $categoryForum){
    
             $categoryForum->setActive(( $categoryForum->getActive())? false : true);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist( $categoryForum);
            $entityManager->flush();
            return new Response ('true');
           

        }

   
}

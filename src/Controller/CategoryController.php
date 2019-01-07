<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\UserGroup;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use App\Repository\UserGroupRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\DBAL\Exception\ForeignKeyConstraintViolationException;

/**
 * @Route("/category")
 */
class CategoryController extends AbstractController
{
    /**
     * @Route("/", name="category_index", methods={"GET"})
     */
    public function index(CategoryRepository $categoryRepository): Response
    {
        return $this->render('category/index.html.twig', [
            'categories' => $categoryRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="category_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($category);
            $entityManager->flush();

            return $this->redirectToRoute('category_index');
        }

        return $this->render('category/new.html.twig', [
            'category' => $category,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="category_show", methods={"GET"})
     */
    public function show(Category $category): Response
    {
        // $user_groups = $category->getUserGroups();
        // print_r($user_groups);
        $user_groups = $category->getUserGroups()->toArray();

        return $this->render('category/show.html.twig', [
            'category' => $category,
            'groups' => $user_groups,

        ]);
    }

    /**
     * @Route("/{id}/edit", name="category_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Category $category): Response
    {
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('category_index', [
                'id' => $category->getId(),
            ]);
        }

        return $this->render('category/edit.html.twig', [
            'category' => $category,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="category_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Category $category): Response
    {
        $em = $this->getDoctrine()->getManager();
        // $group = $em->find('UserGroup', $CategoryId);
        // $user_groups = $userGroupRepository->findAll();
        // $group_ids = $category->userGroups();

        // foreach ($user_groups as $category->userGroups()) {
        //     foreach($group as $user_groups->category){
        //         array_push($group_ids,$group.id);
        //     }
        // }
        print_r($group_ids);
        // if(in_array($category->getId(), $group_ids)){

        // }
        // $user_group = $em->getRepository(UserGroup::class)->findOneByIdJoinedToCategory($category->getId());
        
        // if(empty($user_group))
        // {
            if ($this->isCsrfTokenValid('delete'.$category->getId(), $request->request->get('_token'))) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->remove($category);
                $entityManager->flush();
            }

            return $this->redirectToRoute('category_index');
        // }else
        // {
        //     return $this->redirectToRoute('category_index');
        // }
        
        // return $this->var_dump($group.id);
        // var_dump($category);
        // exit;
        // if ($this->isCsrfTokenValid('delete'.$category->getId(), $request->request->get('_token'))) {
        //     $entityManager = $this->getDoctrine()->getManager();
        //     $entityManager->remove($category);
        //     $entityManager->flush();
        // }

        // return $this->redirectToRoute('category_index');
    }
}

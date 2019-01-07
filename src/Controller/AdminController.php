<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Repository\CustomerRepository;
use App\Repository\CategoryRepository;
use App\Repository\CustomerGroupRepository;
use App\Entity\CustomerGroup;
use App\Entity\Customer;
use App\Entity\Category;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class AdminController extends AbstractController
{
    /**
     * @Route("/", name="admin_index", methods={"GET"})
     */
    public function index(AuthenticationUtils $authenticationUtils): Response
    {
    	$error = $authenticationUtils->getLastAuthenticationError();
    	$lastUsername = $authenticationUtils->getLastUsername();
    	if ($lastUsername == ""){
            return $this->redirectToRoute('app_login'); 
        }else{
            $em=$this->getDoctrine()->getManager();
            $users = $em->getRepository('App:Customer')->findAll();

	        return $this->render('admin/index.html.twig', [
	            	'users' => $users,
	            	'last_username' => $lastUsername,
	        ]);
	    }
    }

    /**
     * @Route("/add_users_to_group", name="admin_add_user_to_group", methods={"GET"})
     */
    public function addUserToGroup(CategoryRepository $categoryRepository,CustomerRepository $customerRepository,AuthenticationUtils $authenticationUtils)
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        if ($lastUsername == ""){
            return $this->redirectToRoute('app_login'); 
        }else{
            return $this->render('admin/add_users_to_group.html.twig', [
                    'customers' => $customerRepository->findAll(),
                    'groups' => $categoryRepository->findAll(),
                    'last_username' => $lastUsername,
            ]);
        }
    }
    /**
     * @Route("/add_to_group", name="admin_add_to_group", methods={"POST"})
     */

    public function addToGroup(Request $request,CategoryRepository $categoryRepository,CustomerRepository $customerRepository) //
    {
        $customerId =$request->request->get('customer_id');
        // $customerId = (int)$customer_id;
        $categoryId =$request->request->get('category_id');
        if ($customerId != "" && $customerId != "") {

            $em = $this->getDoctrine()->getManager();
            
            $user = $em->getRepository(Customer::class)->findOneBy(['id' => $customerId]);
            $category = $em->getRepository(Category::class)->findOneBy(['id' => $categoryId]);
            
            $user_group = new CustomerGroup();
            $user_group->addCustomerId($user);
            $user_group->addCategoryId($category);

            $em->persist($user_group);
            $em->flush();
     
            return new JsonResponse(array('message' => 'Success!'), 200);
        }
    }

    /**
     * @Route("/remove_from_group", name="admin_remove_from_group", methods={"POST"})
     */
    public function removeFromGroup(Request $request)
    {
        $groupId =$request->request->get('group_id');
        // $customerId =$request->request->get('customer_id');
        // $categoryId =$request->request->get('category_id');

        $em = $this->getDoctrine()->getManager();
        $user_group = $em->getRepository(CustomerGroup::class)->findOneBy(['id' => $groupId]);
        // $user = $em->getRepository(Customer::class)->findOneBy(['id' => $customerId]);
        // $category = $em->getRepository(Category::class)->findOneBy(['id' => $categoryId]);

        $em->remove($user_group);
        $em->flush();


        return new JsonResponse(array('message' => 'Success!'), 200);
    }
}









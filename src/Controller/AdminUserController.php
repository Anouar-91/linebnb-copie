<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\AdminUserType;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminUserController extends AbstractController
{
    /**
     * Permet d'afficher les utilisateurs
     * @Route("/admin/user/{page}", name="admin_user_index", requirements={"page": "\d+"})
     */
    public function index(UserRepository $repo, $page = 1): Response
    {
            // Permet de faire la pagination
            $limit = 10;
            $start = $page * $limit - $limit;
            $total = count($repo->findAll());
            $pages = ceil($total / $limit);

        return $this->render('admin/user/index.html.twig', [
            'users' => $repo->findBy([], [],$limit, $start),
            'pages' => $pages,
            'page' => $page
        ]);
    }

    /**
     * 
     * Permet d'éditer un utilisateur
     * @Route("/admin/user/{id}/edit", name="admin_user_edit")
     * 
     * @return Response
     */
    public function edit(User $user, Request $request){
        $form = $this->createForm(AdminUserType::class, $user);
        $manager = $this->getDoctrine()->getManager();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){


            $manager->persist($user);
            $manager->flush();

            $this->addFlash('success',
            "L'utilisateur n°{$user->getId()} a bien été modifiée");

            return $this->redirectToRoute("admin_user_index");
        }
        
        return $this->render('admin/user/edit.html.twig', [
            'form' => $form->createView(),
            'user' => $user,
        ]);
    }

    /**
     * Permet de supprimer une réservation
     * @Route("/admin/bookings/{id}/delete", name="admin_booking_delete")
     * 
     * @param Booking $booking
     * @param ObjectManager $manager
     * @return Response
     */

    public function delete(User $user){
        $manager = $this->getDoctrine()->getManager();
            $manager->remove($user);
            $manager->flush(); 
    
            $this->addFlash('success',
            "L'utilisateur a bien été supprimée !");

        


        return $this->redirectToRoute('admin_booking_index');
    }
}

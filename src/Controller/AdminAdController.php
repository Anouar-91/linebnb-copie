<?php

namespace App\Controller;

use App\Entity\Ad;
use App\Form\AdType;
use App\Form\AdminAdType;
use App\Repository\AdRepository;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminAdController extends AbstractController
{
    /**
     * @Route("/admin/ads/{page}", name="admin_ads_index", requirements={"page": "\d+"})
     */
    public function index(AdRepository $repo, $page = 1): Response
    {
    // Permet de faire la pagination
        $limit = 10;
        $start = $page * $limit - $limit;
        $total = count($repo->findAll());
        $pages = ceil($total / $limit);
        return $this->render('admin/ad/index.html.twig', [
            'ads' => $repo->findBy([], [],$limit, $start),
            'pages' => $pages,
            'page' => $page
        ]);
    }

    /**
     * Permet d'afficher le formulaire d'édition 
     * @Route("/admin/ads/{id}/edit", name="admin_ads_edit")
     * @param Ad $ad
     * @return void
     */

    public function edit(Ad $ad, Request $request){
        
        $form = $this->createForm(AdType::class, $ad);

        $form->handleRequest($request);
        $manager = $this->getDoctrine()->getManager();

        if($form->isSubmitted() && $form->isValid()){
            $manager->persist($ad);
            $manager->flush();
    
            $this->addFlash(
                'success', "l'annonce <strong>{$ad->getTitle()}</strong> a bien été enregistrée !"
            );
            
        }

        return $this->render('admin/ad/edit.html.twig', [
            'ad' => $ad,
            'form' => $form->createView()
        ]
        );

    }

    /**
     * Permet de supprimer une annonce
     * @Route("/admin/ads/{id}/delete", name="admin_ads_delete")
     * 
     * @param Ad $ad
     * @param ObjectManager $manager
     * @return Response
     */

    public function delete(Ad $ad){
        $manager = $this->getDoctrine()->getManager();
        if(count($ad->getBookings())> 0){
            $this->addFlash("warning",
            "Vous ne pouvez pas supprimer l'annonce <strong>{$ad->getTitle()}</strong>, car elle possède déjà des réservations !");
        }
        else{

            $manager->remove($ad);
            $manager->flush(); 
    
            $this->addFlash('success',
            "L'annonce <strong>{$ad->getTitle()} a bien été supprimée !");

        }


        return $this->redirectToRoute('admin_ads_index');
    }
}

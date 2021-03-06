<?php

namespace App\Controller;

use App\Entity\Ad;
use App\Form\AdType;
use App\Entity\Image;

use App\Repository\AdRepository;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdController extends AbstractController
{
    /**
     * @Route("/ads/{page}", name="ads_index", requirements={"page": "\d+"})
     */
    public function index(AdRepository $repo, $page = 1): Response
    {
            // Permet de faire la pagination
            $limit = 9;
            $start = $page * $limit - $limit;
            $total = count($repo->findAll());
            $pages = ceil($total / $limit);
       /*  $repo = $this->getDoctrine()->getRepository(Ad::class); */ // cette ligne me permet de récupérer le repository qui gère les annonces.

        return $this->render('ad/index.html.twig', [
            
                'ads' => $repo->findBy([], [],$limit, $start),
                'pages' => $pages,
                'page' => $page
        ]);
    }

    /**
     * Permet de créer une annonce 
     * @Route("/ads/new", name="ads_create")
     * @IsGranted("ROLE_USER")
     * @return Response
     */

    public function create(Request $request){
        $ad = new Ad();

       /*  $request->request->get('title'); // permet de récupérer le titre dans le formulaire  */
        $form = $this->createForm(AdType::class, $ad);   

        $form->handleRequest($request); //cette fonction permet de récupérer la requête et d'extraire les informations du form. On lui passe la requête http

        if($form->isSubmitted() && $form->isValid()){


            $manager = $this->getDoctrine()->getManager();

            foreach($ad->getImages() as $image){
                $image->setAd($ad); 
                $manager->persist($image);
            }

            $ad->setAuthor($this->getUser());
           
            $manager->persist($ad); // manager fait persister mon annonce dans le temps
            $manager->flush(); // envoi ma requête sql en base de données

            $this->addFlash(
                'success',
                "L'annonce <strong>{$ad->getTitle()}</strong> a bien été enregistrée !"
            );
  
            return $this->redirectToRoute('ads_show', [
                'slug' => $ad->getSlug()
            ]);
        }
        
        return $this->render('ad/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * Permet d'afficher le formulaire d'édition 
     * 
     * @Route("/ads/{slug}/edit", name="ads_edit")
     * @Security("is_granted('ROLE_USER') and user === ad.getAuthor()", message="Cette annonce ne vous appartient pas, vous ne pouvez pas la modifier !")
     * 
     * @return Response
     */

    public function edit(Ad $ad, Request $request){
    
        $form = $this->createForm(AdType::class, $ad);   

        $form->handleRequest($request); 

        if($form->isSubmitted() && $form->isValid()){


            $manager = $this->getDoctrine()->getManager();

            foreach($ad->getImages() as $image){
                $image->setAd($ad); 
                $manager->persist($image);
            }
           
            $manager->persist($ad); // manager fait persister mon annonce dans le temps
            $manager->flush(); // envoi ma requête sql en base de données

            $this->addFlash(
                'success',
                "L'annonce <strong>{$ad->getTitle()}</strong> a bien été modifiées !"
            );
  
            return $this->redirectToRoute('ads_show', [
                'slug' => $ad->getSlug()
            ]);
        }

        
        return $this->render("ad/edit.html.twig", [
            'form' => $form->createView(),
            'ad' => $ad 
        ]

    );
    }


    /**
     * Permet d'afficher une seule annonce
     * 
     * @Route("/ads/{slug}", name="ads_show")
     * @return Response
     * 
     */

    public function show(Ad $ad){

        return $this->render('ad/show.html.twig', 
        [
            'ad'=> $ad 
        ]);
    }

    /**
     * Permet de supprimer une annonce
     * 
     * @Route("/ads/{slug}/delete", name="ads_delete")
     * @Security("is_granted('ROLE_USER') and user === ad.getAuthor()", message ="Vous n'avez pas le droit d'accéder à cette ressource")
     * @return Response
     * 
     */

    public function delete(Ad $ad){
        $manager = $this->getDoctrine()->getManager();
        
        $manager->remove($ad);
        $manager->flush();

        $this->addFlash(
            'success', 
            "L'annone <strong>{$ad->getTitle()}</strong> a bien été supprimée");
        

        return $this->redirectToRoute("ads_index");


    }



}

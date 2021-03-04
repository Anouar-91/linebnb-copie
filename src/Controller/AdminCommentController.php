<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Form\AdminCommentType;
use App\Repository\CommentRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminCommentController extends AbstractController
{
    /**
     * Permet d'afficher tous les commentaires
     * @Route("/admin/comment/{page}", name="admin_comment_index", requirements={"page": "\d+"})
     */
    public function index(CommentRepository $repo, $page = 1): Response
    {
            // Permet de faire la pagination
            $limit = 10;
            $start = $page * $limit - $limit;
            $total = count($repo->findAll());
            $pages = ceil($total / $limit);
        return $this->render('admin/comment/index.html.twig', [
            'comments' => $repo->findBy([], [],$limit, $start),
            'pages' => $pages,
            'page' => $page
        ]);
    }


    /**
     * Formulaire d'édition d'un commentaire
     * @Route("/admin/comment/{id}/edit", name="admin_comment_edit")
     * 
     */
    public function edit(Comment $comment, Request $request){
        
        $form = $this->createForm(AdminCommentType::class, $comment);

        $form->handleRequest($request);
        $manager = $this->getDoctrine()->getManager();

        if($form->isSubmitted() && $form->isValid()){
            $manager->persist($comment);
            $manager->flush();
    
            $this->addFlash(
                'success', "Le commentaire n°<strong>{$comment->getId()}</strong> a bien été modifiée!"
            );
            
        }

        return $this->render('admin/comment/edit.html.twig', [
            'comment' => $comment,
            'form' => $form->createView()
        ]
        );

    }


    /**
     * Permet de supprimer un commentaire
     * @Route("/admin/comment/{id}/delete", name="admin_comment_delete")
     * 
     * @param Comment $comment
     * @param ObjectManager $manager
     * @return Response
     */

    public function delete(Comment $comment){
        $manager = $this->getDoctrine()->getManager();

            $manager->remove($comment);
            $manager->flush(); 
    
            $this->addFlash('success',
            "Le commentaire de <strong>{$comment->getAuthor()->getFullName()}</strong> a bien été supprimée !");

        


        return $this->redirectToRoute('admin_comment_index');
    }
}

<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\AccountType;
use Cocur\Slugify\Slugify;
use App\Entity\PasswordUpdate;
use App\Form\RegistrationType;
use App\Form\PasswordUpdateType;
use Symfony\Component\Form\FormError;
use Symfony\Bridge\Twig\Node\RenderBlockNode;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
    /**
     * Permet de se connecter
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
  /*        if ($this->getUser()) {
            return $this->redirectToRoute('homepage');
         }
 */
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * Permet de se deconnecter
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    /**
     * Permet d'afficher le formulaire d'inscription
     * 
     * @Route("/register", name="register")
     * 
     * @return Response
     * 
     */

     public function register(Request $request, UserPasswordEncoderInterface $encoder){
         $user = new User();
        $slugify = new Slugify();

         $manager = $this->getDoctrine()->getManager();

         $form = $this->createForm(RegistrationType::class, $user);

         $form->handleRequest($request); // gère le formulaire

         if($form->isSubmitted() && $form->isValid()){
            $hash = $encoder->encodePassword($user, $user->getHash());
            $user->setHash($hash);

            $slug = $slugify->slugify($user->getFirstName() . " " . $user->getLastName());
            $user->setSlug($slug);


            //on récupere les images transmises
            $image = $form->get('picture')->getData();
            //on génére un nouveau nom de fichier
            $fichier = "uploads/" . md5(uniqid()) . '.' . $image->guessExtension(); 
            //on copier le fichier dans le dossier uploads
            $image->move(
                $this->getParameter('images_directory'),
                $fichier
            );

            $user->setPicture($fichier);



             $manager->persist($user);
             $manager->flush();

             $this->addFlash('success', "Votre compte a bien été crée ! Vous pouvez maintenant vous connecter !");

             return $this->redirectToRoute("app_login");
         }

         return $this->render('account/registration.html.twig', [
             'form' => $form->createView()
         ]);


     }

     /**
      * Permet d'afficher et de traiter le formulaire de modification du profil
      *
      *@Route("/account/profile", name="account_profile")
      *IsGranted("ROLE_USER")
      *@return Response
      *
      */

     public function profile(Request $request){
         $user = $this->getUser(); // permet de récupérer l'utilisateur connecté
         $form = $this->createForm(AccountType::class, $user);

         $form->handleRequest($request); //on demande au formulaire de gérer la request

         $manager = $this->getDoctrine()->getManager();

         if($form->isSubmitted() && $form->isValid()){
             $manager->flush();

             $this->addFlash('success', 'Les données du profil ont été enregistré avec succès !');

         }


        return $this->render('account/profile.html.twig', [
            'form' => $form->createView()
        ]);

     }

     /**
      * Permet de modifier le mot de passe
      *@Route("/account/password-update", name="account_password")
      *@IsGranted("ROLE_USER")
      *@return Response
      */

     public function updatepassword(Request $request, UserPasswordEncoderInterface $encoder){

        $passwordUpdate = new PasswordUpdate();

        $user = $this->getUser();

        $form = $this->createForm(PasswordUpdateType::class, $passwordUpdate); // on crée le formulaire
        $manager = $this->getDoctrine()->getManager();  

        $form->handleRequest($request); 

        if( $form->isSubmitted() && $form->isValid()  ){

            // vérifier que le oldPassword = password de la personne

           if(!password_verify($passwordUpdate->getOldPassword(), $user->getHash())){
               //Gérer l'erreur 
                //$form->get('oldPassword') permet de récupérer un champs du formulaire
               $form->get('oldPassword')->addError(new FormError("Le mot de passe que vous avez tapé n'est pas votre mot de passe actuel !"));

           }
           else {
                $newPassword = $passwordUpdate->getNewPassword();
                $hash = $encoder->encodePassword($user, $newPassword);

                $user->setHash($hash);

                $manager->persist($user);
                $manager->flush();

                $this->addFlash('success', 'Votre mot de passe a bien été modifié !');

                return $this->redirectToRoute('homepage');
           }
        }


         return $this->render('account/password.html.twig', [
             'form' => $form->createView()
         ]);

     }

    /**
     * Permet d'afficher le profil de l'utilisateur connecté
     * @Route("/account", name="account_index")
     * @IsGranted("ROLE_USER")
     * 
     * @return Response
     */

    public function myAccount(){

        return $this->render('user/index.html.twig', [
            'user' => $this->getUser()

        ]);
    }

    /**
     * Permet d'afficher la liste des réservations faites par l'utilisateur
     * 
     * @Route("/account/bookings", name="account_bookings")
     * 
     * @return Response
     * 
     */

    public function bookings(){
        return $this->render('account/bookings.html.twig');
    }

}

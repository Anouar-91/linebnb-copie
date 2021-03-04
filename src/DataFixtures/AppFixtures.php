<?php

namespace App\DataFixtures;

use App\Entity\Ad;
use Faker\Factory;
use App\Entity\Role;

use App\Entity\User;
use App\Entity\Image;
use App\Entity\Booking;
use App\Entity\Comment;
use Cocur\Slugify\Slugify;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture

{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder) // pour encoder password
    {
        $this->encoder = $encoder;
        
    }
    public function load(ObjectManager $manager)
    {
        
        $faker = Factory::create('FR-fr');

        // je crée le rôle admin 
        $adminRole = new Role();
        $adminRole->setTitle('ROLE_ADMIN');
        $manager->persist($adminRole);

        // je crée un utilisateur avec le role admin
        $adminUser = new User();
        $adminUser->setFirstName('Anouar')
                ->setLastName('Berrouane')
                ->setEmail('a.berrouane@gmail.com')
                ->setHash($this->encoder->encodePassword($adminUser, 'password'))
                ->setPicture('https://i.pinimg.com/originals/26/7b/ab/267bab7253fa134f506119d01a4cf120.png')
                ->setIntroduction($faker->sentence())
                ->setDescription('<p>' . join('</p><p>', $faker->paragraphs(3)) . '</p>')
                ->addUserRole($adminRole);

        $manager->persist($adminUser);

        $slugify = new Slugify();

        //Nous gérons les utilisateurs 

        $users = [];
        $genres = ['male', 'female'];
        for($i = 1; $i <= 10; $i++){
            $user = new User();

            $genre = $faker->randomElement($genres); // renvoie un élément au hasard du tableau

            $picture = "https://randomuser.me/api/portraits/";
            $pictureId = $faker->numberBetween(1,99) . '.jpg';

            $picture .= ($genre == 'male' ? 'men/' : 'women/') . $pictureId;

            $hash = $this->encoder->encodePassword($user, 'password'); // pour encoder password, elle prend deux paramètre l'entité et le password que je veux encoder. 

            $user->setFirstName($faker->firstName($genre))
                ->setLastName($faker->lastName)
                ->setEmail($faker->email)
                ->setPicture($picture)
                ->setIntroduction($faker->sentence())
                ->setDescription('<p>' . join('</p><p>', $faker->paragraphs(3)) . '</p>')
                ->setHash($hash)
                ->setSlug($slugify->slugify($user->getFirstName() . " " . $user->getLastName()));

            $manager->persist($user);

            $users[] = $user;
        }
        
        for($i= 1; $i <=30; $i ++){ //une boucle pour créer une trentaine d'annonce
            $ad = new Ad;
            
            $title = $faker->sentence();
          
            $coverImage = "/img/chambres/ch-". rand(1, 20) .".jpg"; 
            $introduction = $faker->paragraph(2);
            $content = '<p>' . join('<p><p/>' , $faker->paragraphs(5)) . '</p>';

            $user = $users[mt_rand(0,9)];

            $ad->setTitle($title)
                ->setCoverImage($coverImage)
                ->setIntroduction($introduction)
                ->setContent($content)
                ->setPrice(mt_rand(40,200))
                ->setRooms(mt_rand(1,6))
                ->setAuthor($user);

                for($j = 1; $j <= mt_rand(2,5);$j++){
                    $image = new Image();
                    
                    $image->setUrl("/img/chambres/ch-". rand(1, 20) .".jpg")
                        ->setCaption($faker->sentence())
                        ->setAd($ad);

                    $manager->persist($image);
                }
                //gestion des réservations

                for($j; $j <= mt_rand(0,10); $j++){
                    $booking = new Booking();

                    $createdAt = $faker->dateTimeBetween('-6 months'); // on demande à Faker de donner un dateTime au minimum il y'a 6 mois (date de réservation)
                    $startDate = $faker->dateTimeBetween('-3 months'); 
                    //gestion de la date de fin
                    $duration = mt_rand(3, 10);

                    $endDate = (clone $startDate)->modify("+$duration days"); // on clone la date de début du séjour, on l'a modifie et on lui ajoute la durée du séjour afin d'obtenir la date de fin
                    $amount = $ad->getPrice() * $duration; // le prix
                    
                    $booker = $users[mt_rand(0, count($users) - 1)];

                    $comment = $faker->paragraph();

                    $booking->setBooker($booker)
                            ->setAd($ad)
                            ->setStartDate($startDate)
                            ->setEndDate($endDate)
                            ->setCreatedAt($createdAt)
                            ->setAmount($amount)
                            ->setComment($comment);
                    $manager->persist($booking);

                    //gestion des commentaires

                    if(mt_rand(0,1)){
                        $comment = new Comment();

                        $comment->setContent($faker->paragraph())
                                ->setRating(mt_rand(1,5))
                                ->setAuthor($booker)
                                ->setAd($ad);
                        $manager->persist($comment);


                    }

                }
    
                $manager->persist($ad); // on demande au manager on demande de faire persister dans le temps notre annonce.


        }


            // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}

<?php

namespace App\Controller;

use App\Repository\AdRepository;
use App\Repository\BookingRepository;
use App\Repository\CommentRepository;
use App\Repository\UserRepository;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminDashboardController extends AbstractController
{
    /**
     * @Route("/admin", name="admin_dashboard")
     */
    public function index(UserRepository $user, BookingRepository $booking, CommentRepository $comment, AdRepository $ad ): Response
    {
     
       $userCount =  $user->countUser();
       $bookingCount =  $booking->countBooking();
       $adCount =  $ad->countAd();
       $commentCount =  $comment->countComment();

       $bestAds = $ad->bestAd();
       $worstAds = $ad->worstAd();

  

        return $this->render('admin/dashboard/index.html.twig', [
            'user' => $userCount,
            'comment' => $commentCount,
            'booking' => $bookingCount,
            'ad' => $adCount,
            'bestAds'=> $bestAds,
            'worstAds'=> $worstAds,
        ]);
    }
}

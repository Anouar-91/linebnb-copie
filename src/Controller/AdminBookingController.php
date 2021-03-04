<?php

namespace App\Controller;

use App\Entity\Booking;
use App\Form\AdminBookingType;
use App\Repository\BookingRepository;
use App\Service\PaginationService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminBookingController extends AbstractController
{
    /**
     * Permet d'afficher les réservations
     * 
     * @Route("/admin/bookings/{page}", name="admin_booking_index", requirements={"page": "\d+"})
     */
    public function index(BookingRepository $repo, $page): Response
    {
        // Permet de faire la pagination
        $limit = 10;
        $start = $page * $limit - $limit;
        $total = count($repo->findAll());
        $pages = ceil($total / $limit);

        return $this->render('admin/booking/index.html.twig', [
            'bookings' => $repo->findBy([], [],$limit, $start),
            'pages' => $pages,
            'page' => $page

        ]);
    }

    /**
     * 
     * Permet d'éditer une réservation
     * @Route("/admin/bookings/{id}/edit", name="admin_booking_edit")
     * 
     * @return Response
     */
    public function edit(Booking $booking, Request $request){
        $form = $this->createForm(AdminBookingType::class, $booking);
        $manager = $this->getDoctrine()->getManager();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            // afin  que le montant de la réservation soit calculé automatiquement lors de la modification des dates de réservation, je dis que mon montant est à 0 afin que la fonction prePersist qui est dans booking.php soit appelé. 
            //
            $booking->setAmount(0); 
            $manager->persist($booking);
            $manager->flush();

            $this->addFlash('success',
            "La réservation n°{$booking->getId()} a bien été modifiée");

            return $this->redirectToRoute("admin_booking_index");
        }
        
        return $this->render('admin/booking/edit.html.twig', [
            'form' => $form->createView(),
            'booking' => $booking,
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

    public function delete(Booking $booking){
        $manager = $this->getDoctrine()->getManager();
            $manager->remove($booking);
            $manager->flush(); 
    
            $this->addFlash('success',
            "La réservation de <strong>{$booking->getBooker()->getFullName()}</strong> a bien été supprimée !");

        


        return $this->redirectToRoute('admin_booking_index');
    }
}

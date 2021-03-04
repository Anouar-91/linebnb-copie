<?php

namespace App\Entity;

use App\Repository\BookingRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert; 


/**
 * @ORM\Entity(repositoryClass=BookingRepository::class)
 * Cette annotation ci-dessous dit à Doctrine cette entité doit gérer son cycle de vie, on y a relier des fonctions
 * @ORM\HasLifecycleCallbacks()
 */
class Booking
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="bookings")
     * @ORM\JoinColumn(nullable=false)
     */
    private $booker;

    /**
     * @ORM\ManyToOne(targetEntity=Ad::class, inversedBy="bookings")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ad;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\Date(message="Attention la date d'arrivée doit être au bon format")
     * @Assert\GreaterThan("today", message="La dates d'arrivée doit être supérieur à la date d'aujourd'hui !", groups={"front"} )
     */
    private $startDate;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\Date(message="Attention la date d'arrivée doit être au bon format")
     *@Assert\GreaterThan(propertyPath="startDate", message="La date de départ doit être supérieur à la date d'arrivée !")
     */
    private $endDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="float")
     */
    private $amount;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $comment;

    /**
     * Callback appelé à chaque fois qu'on crée une réservation
     * 
     * @ORM\PrePersist
     * @ORM\PreUpdate
     *
     * @return void
     */
    public function prePersist(){
        if(empty($this->createdAt)){
            $this->createdAt =  new \DateTime(); // si createdAt est vide, j'ai envie qu'il devienne un nouveau dateTime donc date de l'instant présent.
        }

        if(empty($this->amount)){
            //prix de l'annonce * nombre de jour
            $this->amount = $this->ad->getPrice() * $this->getDuration();
        }
    }

    public function isBookableDates(){
        // il faut connaitre les dates qui sont impossibles pour l'annonce, contient les dates impossibles
        $notAvailableDays = $this->ad->getNotAvailableDays();
        // comparer les datesc choisis et les dates impossibles, $bookingDays contient les dates de ma réservation
        $bookingDays = $this->getDays();

        // a l'aide de la fonction array_map, on transforme notre tableau d'objet $bookingDays en tableau de chaine de caractère pour faciliter la comparaison
        $days = array_map(function($day){
            return $day->format('Y-m-d');
        }, $bookingDays);

        $notAvailable = array_map(function($day){
            return $day->format('Y-m-d');
        }, $notAvailableDays);

        foreach($days as $day){
            //array_search cherche au sein d'un tableau une information.
            // si dans le tableau $notAvailable on a une journée du  tableau days on retourne false
            if(array_search($day, $notAvailable ) !== false) return false;

        }
        return true;

    }

    /**
     * Cette fonction permet de récupérer un tableau des journées qui correspondent à ma réservation
     *
     * @return array Un tableau d'objets DateTime réprésentant les jours de la réservation
     */
    public function getDays(){
        $resultat = range(
            $this->startDate->getTimestamp(),
            $this->endDate->getTimestamp(),
            24 * 60 * 60 
        );

        $days = array_map(function($dayTimestamp){
            return new \DateTime(date('Y-m-d', $dayTimestamp));
        }, $resultat);

        return $days;
    }

    

    public function getDuration(){
        $diff = $this->endDate->diff($this->startDate); //methode diff des objets dateTime : fait la différence entre 2 dates et renvoie un objet DateInterval
        return $diff->days; // return en nombre de jour
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBooker(): ?User
    {
        return $this->booker;
    }

    public function setBooker(?User $booker): self
    {
        $this->booker = $booker;

        return $this;
    }

    public function getAd(): ?Ad
    {
        return $this->ad;
    }

    public function setAd(?Ad $ad): self
    {
        $this->ad = $ad;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(\DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }
}

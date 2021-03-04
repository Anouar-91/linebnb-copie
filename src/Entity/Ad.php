<?php

namespace App\Entity;

use Cocur\Slugify\Slugify;
use App\Repository\AdRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert; // va nous permettre de sécuriser notre formulaire


/**   
 * @ORM\Entity(repositoryClass=AdRepository::class)
 * @ORM\HasLifecycleCallbacks
 * @UniqueEntity(
 *  fields={"title"}, 
 *  message="Une autre annonce possède déjà ce titre, merci de le modifier."
 * )
 */
class Ad
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=10, max=255, minMessage="Le titre doit faire plus de 10 caractères !", maxMessage="Le titre ne peut pas dépasser 255 caractères !")
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\Column(type="text")
     * @Assert\Length(min=20, max=255, minMessage="Le titre doit faire plus de {{ limit }} caractères !", maxMessage="Le titre ne peut pas dépasser {{ limit }} caractères !")
     */
    private $introduction;

    /**
     * @ORM\Column(type="text")
     * @Assert\Length(min=100, minMessage="Le titre doit faire plus de {{ limit }} caractères !")
     */
    private $content;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Url(
     *      message = "Vous devez entrer une URL valide !")
     */
    private $coverImage;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Positive
     */
    private $rooms;

    /**
     * @ORM\OneToMany(targetEntity=Image::class, mappedBy="ad", orphanRemoval=true)
     * Permet de faire valider le sous-formulaire
     * @Assert\Valid()
     */
    private $images;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="ads")
     * @ORM\JoinColumn(nullable=false)
     */
    private $author;

    /**
     * @ORM\OneToMany(targetEntity=Booking::class, mappedBy="ad")
     */
    private $bookings;

    /**
     * @ORM\OneToMany(targetEntity=Comment::class, mappedBy="ad", orphanRemoval=true)
     */
    private $comments;



    public function __construct()
    {
        $this->images = new ArrayCollection();
        $this->bookings = new ArrayCollection();
        $this->comments = new ArrayCollection();
 
    }



    /**
     * permet d'initialiser le slug avant la persistance et avant la modification donc avant 
     * @ORM\PrePersist 
     * @ORM\PreUpdate
     * 
     * @return void
     *
     */

    public function initializeSlug(){
        if(empty($this->slug)){
            $slugify = new Slugify(); // on créer une instance de la classe slugify
            $this->slug = $slugify->slugify($this->title);
        }
    }
    /**
     * Permet de récupérer le commentaire d'un auteur par rapport à une annonce
     * @param User $author
     * @return comment | null
     */


    public function getCommentFromAuthor(User $author){
        foreach($this->comments as $comment){
            if($comment->getAuthor() === $author) return $comment;
        }
        return null;
         
    }

    /**
     * Permet d'obtenir la note global d'une annonce 
     */

    public function getAvgRatings(){
        //calculer la somme des notations
        // array_reduce est une fonction qui réduit un tableau à une seule valeur
        //comments->toArray() permet de transformer notre arrayCollection comments en un array classique
        // array_reduce va boucler sur la tableau comments et va appliquer la fonction ! 
        $sum = array_reduce($this->comments->toArray(), function($total, $comment){
            return $total + $comment->getRating();
        }, 0);
        //faire la division pour avoir la moyenne
        if(count($this->comments) > 0) return $moyenne = $sum / count($this->comments);

        return 0;
    }



    /**
     * Permet d'obtenir un tableau des jours qui ne sont pas disponibles pour cette annonce
     * 
     * @return array Un tableau d'objet dateTime répresentant les jours occupées
     * 
     */

    public function getNotAvailableDays(){
        $notAvailableDays = [];

        foreach($this->bookings as $booking){
            //calculer les jours qui se trouvent entre la date d'arrivée et de départ
            // la fonction range permet d'obtenir le nombre d'élément entre 2 élément.
            // getTimestamp est une méthode qui fonctionne sur les objets de type DateTime
            //24 * 60 * 60  correspond au nombre de seconde dans une journée

            // le tableau résultat stock les dates indisponibles sous la forme de gros nombre

            $resultat = range($booking->getStartDate()->getTimestamp(), 
            $booking->getEndDate()->getTimestamp(), 24 * 60 * 60 );
        

        // dans le tableau days, on a convertir notre tableau résultat avec de réel date d'indisponibilité
           $days = array_map(function($dayTimestamp){
                return new \DateTime(date('Y-m-d', $dayTimestamp));
           }, $resultat);

           // on fusionne deux tableaux, dont plus la boucle avance, plus le tableau notAvailableDays s'enrichit
           $notAvailableDays = array_merge($notAvailableDays, $days);
    }
           return $notAvailableDays;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getIntroduction(): ?string
    {
        return $this->introduction;
    }

    public function setIntroduction(string $introduction): self
    {
        $this->introduction = $introduction;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getCoverImage(): ?string
    {
        return $this->coverImage;
    }

    public function setCoverImage(string $coverImage): self
    {
        $this->coverImage = $coverImage;

        return $this;
    }

    public function getRooms(): ?int
    {
        return $this->rooms;
    }

    public function setRooms(int $rooms): self
    {
        $this->rooms = $rooms;

        return $this;
    }

    /**
     * @return Collection|Image[]
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(Image $image): self
    {
        if (!$this->images->contains($image)) {
            $this->images[] = $image;
            $image->setAd($this);
        }

        return $this;
    }

    public function removeImage(Image $image): self
    {
        if ($this->images->removeElement($image)) {
            // set the owning side to null (unless already changed)
            if ($image->getAd() === $this) {
                $image->setAd(null);
            }
        }

        return $this;
    }

    public function getAuthor(): ?User
    {
        return $this->author;
    }

    public function setAuthor(?User $author): self
    {
        $this->author = $author;

        return $this;
    }

    /**
     * @return Collection|Booking[]
     */
    public function getBookings(): Collection
    {
        return $this->bookings;
    }

    public function addBooking(Booking $booking): self
    {
        if (!$this->bookings->contains($booking)) {
            $this->bookings[] = $booking;
            $booking->setAd($this);
        }

        return $this;
    }

    public function removeBooking(Booking $booking): self
    {
        if ($this->bookings->removeElement($booking)) {
            // set the owning side to null (unless already changed)
            if ($booking->getAd() === $this) {
                $booking->setAd(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Comment[]
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comment $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->setAd($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): self
    {
        if ($this->comments->removeElement($comment)) {
            // set the owning side to null (unless already changed)
            if ($comment->getAd() === $this) {
                $comment->setAd(null);
            }
        }

        return $this;
    }


}
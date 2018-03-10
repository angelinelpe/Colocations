<?php

namespace AppBundle\Entity;
use AppBundle\Entity\User;
use AppBundle\Entity\Reservation;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Annonce
 *
 * @ORM\Table(name="annonce")
 * @ORM\Entity(repositoryClass="Covoiturage\CovoiturageBundle\Repository\AnnonceRepository")
 */
class Annonce
{
    /**
     * @ORM\ManyToOne(targetEntity="Covoiturage\CovoiturageBundle\Entity\User", inversedBy="annonce", cascade={"persist"})
     */

    private $user;
    /**
     * @ORM\OneToMany(targetEntity="Covoiturage\CovoiturageBundle\Entity\Reservation", mappedBy="annonce",  cascade={"persist", "remove"})
     *
     */

    private $reservation;
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePublication", type="datetime")
     */
    private $datePublication;

    /**
     * @var \Date
     *
     * @ORM\Column(name="dateDebut", type="date")
     */
    private $dateDebut;

    /**
     * @var \Date
     *
     * @ORM\Column(name="dateFin", type="date")
     */
    private $dateFin;

    /**
     * @var \Time
     *
     * @ORM\Column(name="duree", type="time")
     */
    private $duree;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=50)
     */
    private $ville;


    /**
     * @var float
     *
     * @ORM\Column(name="prixPersonne", type="float")
     */
    private $prixPersonne;

    /**
     * @var int
     *
     * @ORM\Column(name="nbPlaceDispo", type="integer")
     */
    private $nbPlaceDispo;

    /**
     * @var int
     *
     * @ORM\Column(name="nbPlaceReservee", type="integer")
     */
    private $nbPlaceReservee;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;


    public function __construct(){
        $this->setDatePublication(new \DateTime());
        $this->reservation = new \Doctrine\Common\Collections\ArrayCollection();
        $this->nbPlaceReservee = 0;


    }

    /**
     * augmenter nbPlaces
     *
     * @return Annonce
     */
    public function augmenterNbPlaces($nbPlaceDispo = null){
        if($nbPlaceDispo){
            $this->nbPlaceReservee-=$nbPlaceDispo;
        }else{
            $this->nbPlaceReservee--;
        }
        return $this;
    }

    /**
     * reduire nbPlaces
     *
     * @return Annonce
     */
    public function reduireNbPlaces($nbPlaceDispo = null){
        if($nbPlaceDispo){
            $this->nbPlaceReservee+=$nbPlaceDispo;
        }else{
            $this->nbPlaceReservee++;
        }
        return $this;
    }
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set datePublication
     *
     * @param \DateTime $datePublication
     * @return Annonce
     */
    public function setDatePublication($datePublication)
    {
        $this->datePublication = $datePublication;

        return $this;
    }

    /**
     * Get datePublication
     *
     * @return \DateTime
     */
    public function getDatePublication()
    {
        return $this->datePublication;
    }

    /**
     * Set dateDebut
     *
     * @param \Date $dateDebut
     * @return Annonce
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateFin = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \Date
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \Date $dateFin
     * @return Annonce
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \Date
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set duree
     *
     * @param Time $duree
     * @return Annonce
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return Time
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Annonce
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set prixPersonne
     *
     * @param float $prixPersonne
     * @return Annonce
     */
    public function setPrixPersonne($prixPersonne)
    {
        $this->prixPersonne = $prixPersonne;

        return $this;
    }

    /**
     * Get prixPersonne
     *
     * @return float
     */
    public function getPrixPersonne()
    {
        return $this->prixPersonne;
    }

    /**
     * Set nbPlaceDispo
     *
     * @param integer $nbPlaceDispo
     * @return Annonce
     */
    public function setNbPlaceDispo($nbPlaceDispo)
    {
        $this->nbPlaceDispo = $nbPlaceDispo;

        return $this;
    }


    /**
     * Get nbPlaceDispo
     *
     * @return integer
     */
    public function getNbPlaceDispo()
    {
        return $this->nbPlaceDispo;
    }

    /**
     * Set nbPlaceReservee
     *
     * @param integer $nbPlaceReservee
     * @return Annonce
     */
    public function setNbPlaceReservee($nbPlaceReservee)
    {
        $this->nbPlaceReservee = $nbPlaceReservee;

        return $this;
    }

    /**
     * Get nbPlaceReservee
     *
     * @return integer
     */
    public function getNbPlaceReservee()
    {
        return $this->nbPlaceReservee;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Annonce
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }





    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Annonce
     */
    public function setUser(User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add reservation
     *
     * @param \AppBundle\Entity\Reservation $reservation
     *
     * @return Annonce
     */
    public function addReservation(Reservation $reservation)
    {
        $this->reservation[] = $reservation;

        return $this;
    }

    /**
     * Remove reservation
     *
     * @param \AppBundle\Entity\Reservation $reservation
     */
    public function removeReservation(Reservation $reservation)
    {
        $this->reservation->removeElement($reservation);
    }

    /**
     * Get reservation
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReservation()
    {
        return $this->reservation;
    }
}

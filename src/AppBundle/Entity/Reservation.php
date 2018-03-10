<?php

namespace AppBundle\Entity;
use AppBundle\Entity\Annonce as Annonce;
use AppBundle\Entity\User as User;
use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ReservationRepository")
 */
class Reservation
{

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="reservation", cascade={"persist"})
     *
     */

    private $user;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Annonce", inversedBy="reservation", cascade={"persist"})
     *
     */

    private $annonce;
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="nbAReservee", type="integer")
     */
    private $nbAReservee;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateReservation", type="datetime")
     */
    private $dateReservation;

    function __construct() {
        $this->dateReservation = new \DateTime();
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
     * Set nbAReservee
     *
     * @param integer $nbAReservee
     * @return Reservation
     */
    public function setNbAReservee($nbAReservee)
    {
        $this->nbAReservee = $nbAReservee;

        return $this;
    }

    /**
     * Get nbAReservee
     *
     * @return integer
     */
    public function getNbAReservee()
    {
        return $this->nbAReservee;
    }

    /**
     * Set dateReservation
     *
     * @param \DateTime $dateReservation
     * @return Reservation
     */
    public function setDateReservation($dateReservation)
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    /**
     * Get dateReservation
     *
     * @return \DateTime
     */
    public function getDateReservation()
    {
        return $this->dateReservation;
    }

    /**
     * Set user
     *
     * @param AppBundle\Entity\User
     *
     * @return Reservation
     */
    public function setUser(User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set annonce
     *
     * @param \AppBundle\Entity\Annonce $annonce
     *
     * @return Reservation
     */
    public function setAnnonce(Annonce $annonce)
    {

        $this->annonce = $annonce;
        $this->annonce->reduireNbPlaces($this->nbAReservee);
        return $this;
    }

    /**
     * Get annonce
     *
     * @return \AppBundle\Entity\Annonce
     */
    public function getAnnonce()
    {
        return $this->annonce;
    }

    public function supprimerReservation(){
        $this->annonce->augmenterNbPlaces($this->nbPlaceDispo);
    }

}

<?php


namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

use AppBundle\Entity\Logement;
use AppBundle\Entity\Annonce;
use AppBundle\Entity\Reservation;

/**
 * @ORM\Entity
 * @ORM\Table(name="User")
 */
class User extends BaseUser
{
    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Logement", cascade={"persist"})
     *
     */

    private $logement;
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Annonce", mappedBy="user", cascade={"persist"})
     *
     */

    private $annonce;
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Reservation", mappedBy="user",  cascade={"persist"})
     *
     */

    private $reservation;
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    private $nom;
    /**
     * @ORM\Column(type="string")
     */
    private $prenom;
    /**
     * @ORM\Column(type="string")
     */
    private $tel;
    /**
     * @ORM\Column(type="string")
     */
    private $mail;
    /**
     * @ORM\Column(type="date")
     */
    private $dateNaiss;

    public function __construct()
    {

        parent::__construct();
        $this->annonce = new ArrayCollection();
        $this->reservation = new ArrayCollection();
        //$this->logement = new ArrayCollection();
    }

    /**
     * Set logement
     *
     * @param \AppBundle\Entity\Logement $logement
     *
     * @return User
     */
    public function setLogement(\AppBundle\Entity\Logement $logement = null)
    {
        $this->logement = $logement;

        return $this;
    }

    /**
     * Get logement
     *
     * @return \AppBundle\Entity\Logement
     */
    public function getLogement()
    {
        return $this->logement;
    }

    /**
     * Add annonce
     *
     * @param \AppBundle\Entity\Annonce $annonce
     *
     * @return User
     */
    public function addAnnonce(\AppBundle\Entity\Annonce $annonce)
    {
        $this->annonce[] = $annonce;

        return $this;
    }

    /**
     * Remove annonce
     *
     * @param \AppBundle\Entity\Annonce $annonce
     */
    public function removeAnnonce(\AppBundle\Entity\Annonce $annonce)
    {
        $this->annonce->removeElement($annonce);
    }

    /**
     * Get annonce
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnnonce()
    {
        return $this->annonce;
    }

    /**
     * Add reservation
     *
     * @param \AppBundle\Entity\Reservation $reservation
     *
     * @return User
     */
    public function addReservation(\AppBundle\Entity\Reservation $reservation)
    {
        $this->reservation[] = $reservation;

        return $this;
    }

    /**
     * Remove reservation
     *
     * @param \AppBundle\Entity\Reservation $reservation
     */
    public function removeReservation(\AppBundle\Entity\Reservation $reservation)
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

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return User
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return User
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set dateNaiss
     *
     * @param \DateTime $dateNaiss
     *
     * @return User
     */
    public function setDateNaiss($dateNaiss)
    {
        $this->dateNaiss = $dateNaiss;

        return $this;
    }

    /**
     * Get dateNaiss
     *
     * @return \DateTime
     */
    public function getDateNaiss()
    {
        return $this->dateNaiss;
    }
}

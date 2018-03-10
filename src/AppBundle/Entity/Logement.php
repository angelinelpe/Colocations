<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Logement
 *
 * @ORM\Table(name="logement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LogementRepository")
 */
class Logement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=30)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="integer", length=5)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=30)
     */
    private $ville;


    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=30)
     */
    private $type;


    /**
     * @var string
     *
     * @ORM\Column(name="energie", type="string", length=30)
     */
    private $energie;


    /**
     * @var integer
     *
     * @ORM\Column(name="nbPieces", type="integer", length=2)
     */
    private $nbPieces;


    /**
     * @var integer
     *
     * @ORM\Column(name="surface", type="integer", length=4)
     */
    private $surface;

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
     * Set adresse
     *
     * @param string $adresse
     * @return Logement
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set cp
     *
     * @param integer $cp
     * @return Logement
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return integer
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Logement
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
     * Set type
     *
     * @param string $type
     * @return Logement
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * Set energie
     *
     * @param string $energie
     * @return Logement
     */
    public function setEnergie($energie)
    {
        $this->energie = $energie;

        return $this;
    }

    /**
     * Get energie
     *
     * @return string
     */
    public function getEnergie()
    {
        return $this->energie;
    }


    /**
     * Set nbPieces
     *
     * @param integer $nbPieces
     * @return Logement
     */
    public function setNbPieces($nbPieces)
    {
        $this->nbPieces = $nbPieces;

        return $this;
    }

    /**
     * Get nbPieces
     *
     * @return integer
     */
    public function getNbPieces()
    {
        return $this->nbPieces;
    }


    /**
     * Set surface
     *
     * @param integer $surface
     * @return Logement
     */
    public function setSurface($surface)
    {
        $this->surface = $surface;

        return $this;
    }

    /**
     * Get surface
     *
     * @return integer
     */
    public function getSurface()
    {
        return $this->surface;
    }
}

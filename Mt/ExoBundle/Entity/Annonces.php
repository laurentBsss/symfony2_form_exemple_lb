<?php

namespace Mt\ExoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Annonces
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Mt\ExoBundle\Entity\AnnoncesRepository")
 */
class Annonces
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     *@Assert\Length(min=3, minMessage="Le champ titre doit faire au moins {{ limit }} caractères.")
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255)
     *@Assert\Length(min=3, minMessage="Le champ auteur doit faire au moins {{ limit }} caractères.")
     */
    private $auteur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAnnonces", type="date")
     */
    private $dateAnnonces;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCre", type="date")
     */
    private $dateCre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateSup", type="date")
     */
    private $dateSup;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateMaj", type="date")
     */
    private $dateMaj;

    /**
     * @var string
     *
     * @ORM\Column(name="util", type="string", length=255)
     *@Assert\Length(min=3, minMessage="Le champ util doit faire au moins {{ limit }} caractères.")
     */
    private $util;

    /**
     * @var string
     *
     * @ORM\Column(name="contenuAnnonce", type="string", length=255)
     *@Assert\Length(min=3, minMessage="Le champ contenu annonce doit faire au moins {{ limit }} caractères.")
     */
    private $contenuAnnonce;

    /**
     * @var integer
     *
     * @ORM\Column(name="prixAnnonce", type="integer")
     */
    private $prixAnnonce;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbligne", type="integer")
     * @Assert\Range(
     *      min = 4,
     *      max = 100)
     */
    private $nbligne;


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
     * Set titre
     *
     * @param string $titre
     * @return Annonces
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     * @return Annonces
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set dateAnnonces
     *
     * @param \DateTime $dateAnnonces
     * @return Annonces
     */
    public function setDateAnnonces($dateAnnonces)
    {
        $this->dateAnnonces = $dateAnnonces;

        return $this;
    }

    /**
     * Get dateAnnonces
     *
     * @return \DateTime 
     */
    public function getDateAnnonces()
    {
        return $this->dateAnnonces;
    }

    /**
     * Set dateCre
     *
     * @param \DateTime $dateCre
     * @return Annonces
     */
    public function setDateCre($dateCre)
    {
        $this->dateCre = $dateCre;

        return $this;
    }

    /**
     * Get dateCre
     *
     * @return \DateTime 
     */
    public function getDateCre()
    {
        return $this->dateCre;
    }

    /**
     * Set dateSup
     *
     * @param \DateTime $dateSup
     * @return Annonces
     */
    public function setDateSup($dateSup)
    {
        $this->dateSup = $dateSup;

        return $this;
    }

    /**
     * Get dateSup
     *
     * @return \DateTime 
     */
    public function getDateSup()
    {
        return $this->dateSup;
    }

    /**
     * Set dateMaj
     *
     * @param \DateTime $dateMaj
     * @return Annonces
     */
    public function setDateMaj($dateMaj)
    {
        $this->dateMaj = $dateMaj;

        return $this;
    }

    /**
     * Get dateMaj
     *
     * @return \DateTime 
     */
    public function getDateMaj()
    {
        return $this->dateMaj;
    }

    /**
     * Set util
     *
     * @param string $util
     * @return Annonces
     */
    public function setUtil($util)
    {
        $this->util = $util;

        return $this;
    }

    /**
     * Get util
     *
     * @return string 
     */
    public function getUtil()
    {
        return $this->util;
    }

    /**
     * Set contenuAnnonce
     *
     * @param string $contenuAnnonce
     * @return Annonces
     */
    public function setContenuAnnonce($contenuAnnonce)
    {
        $this->contenuAnnonce = $contenuAnnonce;

        return $this;
    }

    /**
     * Get contenuAnnonce
     *
     * @return string 
     */
    public function getContenuAnnonce()
    {
        return $this->contenuAnnonce;
    }

    /**
     * Set prixAnnonce
     *
     * @param integer $prixAnnonce
     * @return Annonces
     */
    public function setPrixAnnonce($prixAnnonce)
    {
        $this->prixAnnonce = $prixAnnonce;

        return $this;
    }

    /**
     * Get prixAnnonce
     *
     * @return integer 
     */
    public function getPrixAnnonce()
    {
        return $this->prixAnnonce;
    }

    /**
     * Set nbligne
     *
     * @param integer $nbligne
     * @return Annonces
     */
    public function setNbligne($nbligne)
    {
        $this->nbligne = $nbligne;

        return $this;
    }

    /**
     * Get nbligne
     *
     * @return integer 
     */
    public function getNbligne()
    {
        return $this->nbligne;
    }
}

<?php

namespace Dbg\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Domaine
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dbg\BlogBundle\Entity\DomaineRepository")
 */
class Domaine
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="filiere", type="string", length=255)
     */
    private $filiere;


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
     * Set nom
     *
     * @param string $nom
     * @return Domaine
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
     * Set filiere
     *
     * @param string $filiere
     * @return Domaine
     */
    public function setFiliere($filiere)
    {
        $this->filiere = $filiere;

        return $this;
    }

    /**
     * Get filiere
     *
     * @return string 
     */
    public function getFiliere()
    {
        return $this->filiere;
    }
}

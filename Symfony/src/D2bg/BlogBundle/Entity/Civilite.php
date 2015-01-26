<?php

namespace D2bg\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Civilite
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="D2bg\BlogBundle\Entity\CiviliteRepository")
 */
class Civilite
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
     * @ORM\Column(name="nom", type="string", length=15)
     */
    private $nom;


   

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
     * @return Civilite
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
}

<?php

namespace Dbg\ProspectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * filiere
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dbg\ProspectBundle\Entity\filiereRepository")
 */
class filiere
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
     * @ORM\Column(name="domaine", type="string", length=255)
     */
    private $domaine;

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
     * Set domaine
     *
     * @param string $domaine
     * @return filiere
     */
    public function setDomaine($domaine)
    {
        $this->domaine = $domaine;

        return $this;
    }

    /**
     * Get domaine
     *
     * @return string 
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * Set filiere
     *
     * @param string $filiere
     * @return filiere
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

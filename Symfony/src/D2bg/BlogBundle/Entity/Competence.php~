<?php

namespace D2bg\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competence
 *
 * @ORM\Table("zcompetence")
 * @ORM\Entity(repositoryClass="D2bg\BlogBundle\Entity\CompetenceRepository")
 */
class Competence
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
     * @ORM\Column(name="contenu", type="string", length=255)
     */
    private $contenu;

    /**
     * @var string
     *
     * @ORM\Column(name="arbo", type="integer")
     */
    private $arbo;
    

   
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
     * Set contenu
     *
     * @param string $contenu
     * @return Competence
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }


    /**
     * Set arbo
     *
     * @param integer $arbo
     * @return Competence
     */
    public function setArbo($arbo)
    {
        $this->arbo = $arbo;

        return $this;
    }

    /**
     * Get arbo
     *
     * @return integer 
     */
    public function getArbo()
    {
        return $this->arbo;
    }
}

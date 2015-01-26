<?php

namespace D2bg\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adresse
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="D2bg\BlogBundle\Entity\AdresseRepository")
 */
class Adresse
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
     * @ORM\ManyToOne(targetEntity="D2bg\BlogBundle\Entity\Identite",inversedBy="adresses")
     * @ORM\JoinColumn(nullable=false)
     */
     private $identite;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer")
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="voie", type="string", length=10)
     */
    private $voie;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=33)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="complement", type="string", length=33)
     */
    private $complement;

    /**
     * @var string
     *
     * @ORM\Column(name="codepostal", type="string", length=5)
     */
    private $codepostal;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=20)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=20)
     */
    private $pays;


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
     * Set numero
     *
     * @param integer $numero
     * @return Adresse
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set voie
     *
     * @param string $voie
     * @return Adresse
     */
    public function setVoie($voie)
    {
        $this->voie = $voie;

        return $this;
    }

    /**
     * Get voie
     *
     * @return string 
     */
    public function getVoie()
    {
        return $this->voie;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Adresse
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
     * Set complement
     *
     * @param string $complement
     * @return Adresse
     */
    public function setComplement($complement)
    {
        $this->complement = $complement;

        return $this;
    }

    /**
     * Get complement
     *
     * @return string 
     */
    public function getComplement()
    {
        return $this->complement;
    }

    /**
     * Set codepostal
     *
     * @param string $codepostal
     * @return Adresse
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    /**
     * Get codepostal
     *
     * @return string 
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Adresse
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
     * Set pays
     *
     * @param string $pays
     * @return Adresse
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string 
     */
    public function getPays()
    {
        return $this->pays;
    }

   
 

    /**
     * Set identite
     *
     * @param \D2bg\BlogBundle\Entity\Identite $identite
     * @return Adresse
     */
    public function setIdentite(\D2bg\BlogBundle\Entity\Identite $identite)
    {
        $this->identite = $identite;

        return $this;
    }

    /**
     * Get identite
     *
     * @return \D2bg\BlogBundle\Entity\Identite 
     */
    public function getIdentite()
    {
        return $this->identite;
    }
}

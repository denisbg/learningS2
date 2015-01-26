<?php

namespace D2bg\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Identite
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="D2bg\BlogBundle\Entity\IdentiteRepository")
 */
class Identite {
	
	/**
	 * @ORM\OneToMany(targetEntity="D2bg\BlogBundle\Entity\Adresse",mappedBy="identite")
	 */
	private $adresses;
	
	/**
	 * @ORM\ManyToOne(targetEntity="D2bg\BlogBundle\Entity\Civilite")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $civilite;
	
	/**
	 *
	 * @var integer @ORM\Column(name="id", type="integer")
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="nom", type="string", length=33)
	 */
	private $nom;
	
	
	/**
	 * @ORM\OneToOne(targetEntity="D2bg\BlogBundle\Entity\Image", cascade={"persist"})
	 */
	private $image;
	
	/**
	 *
	 * @var string @ORM\Column(name="prenom", type="string", length=15)
	 */
	private $prenom;
	
	/**
	 *
	 * @var \DateTime @ORM\Column(name="datenaissance", type="datetime")
	 */
	private $datenaissance;
	
	/**
	 *
	 * @var integer @ORM\Column(name="age", type="integer")
	 */
	private $age;
	
	/**
	 *
	 * @var integer @ORM\Column(name="sexe", type="string", length=1)
	 */
	private $sexe;
	
	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Set nom
	 *
	 * @param string $nom        	
	 * @return Identite
	 */
	public function setNom($nom) {
		$this->nom = $nom;
		
		return $this;
	}
	
	/**
	 * Get nom
	 *
	 * @return string
	 */
	public function getNom() {
		return $this->nom;
	}
	
	/**
	 * Set prenom
	 *
	 * @param string $prenom        	
	 * @return Identite
	 */
	public function setPrenom($prenom) {
		$this->prenom = $prenom;
		
		return $this;
	}
	
	/**
	 * Get prenom
	 *
	 * @return string
	 */
	public function getPrenom() {
		return $this->prenom;
	}
	
	/**
	 * Set datenaissance
	 *
	 * @param \DateTime $datenaissance        	
	 * @return Identite
	 */
	public function setDatenaissance($datenaissance) {
		$this->datenaissance = $datenaissance;
		
		return $this;
	}
	
	/**
	 * Get datenaissance
	 *
	 * @return \DateTime
	 */
	public function getDatenaissance() {
		return $this->datenaissance;
	}
	
	/**
	 * Set age
	 *
	 * @param integer $age        	
	 * @return Identite
	 */
	public function setAge($age) {
		$this->age = $age;
		
		return $this;
	}
	
	/**
	 * Get age
	 *
	 * @return integer
	 */
	public function getAge() {
		return $this->age;
	}
	
	/**
	 * Set sexe
	 *
	 * @param string $sexe        	
	 * @return Identite
	 */
	public function setSexe($sexe) {
		$this->sexe = $sexe;
		
		return $this;
	}
	
	/**
	 * Get sexe
	 *
	 * @return string
	 */
	public function getSexe() {
		return $this->sexe;
	}
	
	/**
	 * Set civilite
	 *
	 * @param \D2bg\BlogBundle\Entity\Civilite $civilite        	
	 * @return Identite
	 */
	public function setCivilite(\D2bg\BlogBundle\Entity\Civilite $civilite) {
		$this->civilite = $civilite;
		
		return $this;
	}
	
	/**
	 * Get civilite
	 *
	 * @return \D2bg\BlogBundle\Entity\Civilite
	 */
	public function getCivilite() {
		return $this->civilite;
	}
	/**
	 * Constructor
	 */
	public function __construct() {
		$this->adresses = new \Doctrine\Common\Collections\ArrayCollection ();
		}
	
	/**
	 * Add adresses
	 *
	 * @param \D2bg\BlogBundle\Entity\Adresse $adresses        	
	 * @return Identite
	 */
	public function addAdress(\D2bg\BlogBundle\Entity\Adresse $adresses) {
		$this->adresses [] = $adresses;
		
		return $this;
	}
	
	/**
	 * Remove adresses
	 *
	 * @param \D2bg\BlogBundle\Entity\Adresse $adresses        	
	 */
	public function removeAdress(\D2bg\BlogBundle\Entity\Adresse $adresses) {
		$this->adresses->removeElement ( $adresses );
	}
	
	/**
	 * Get adresses
	 *
	 * @return \Doctrine\Common\Collections\Collection
	 */
	public function getAdresses() {
		return $this->adresses;
	}
	
	/**
	 * set adresses
	 *
     */
	public function setAdresses( $adresses) {
		$this->adresses = $adresses;
	}
	

    /**
     * Set image
     *
     * @param \D2bg\BlogBundle\Entity\Image $image
     * @return Identite
     */
    public function setImage(\D2bg\BlogBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \D2bg\BlogBundle\Entity\Image 
     */
    public function getImage()
    {
        return $this->image;
    }
}

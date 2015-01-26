<?php

namespace Dbg\ProspectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dbg\ProspectBundle\Entity\ArticleRepository")
 */
class Article
{
/**
* @ORM\OneToOne(targetEntity="Dbg\ProspectBundle\Entity\Image", cascade={"persist"})
*/
    private $image;
	
/**
* @ORM\ManyToMany(targetEntity="Dbg\ProspectBundle\Entity\Categorie", cascade={"persist"});
*/

    private $categories;
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	 
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
	 
    private $datedebut;
	/**
     * @var \DateTime
     *
     * @ORM\Column(name="datedebut", type="datetime")
     */
	 
    private $datefin;
	
	/**
     * @var \DateTime
     *
     * @ORM\Column(name="datefin", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;
	
	 /**
     * @var string
     *
     * @ORM\Column(name="client", type="string", length=255)
     */
    private $client;
	
    /**
     * @var string
     *
     * @ORM\Column(name="donneurdordre", type="string", length=255)
     */
    private $donneurdordre;
	
	/**
     * @var boolean
     *
     * @ORM\Column(name="publication", type="boolean")
     */
    private $publication;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255)
     */
    private $auteur;
    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;
/**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=255)
     */
    private $tel;
	/**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;
    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;


    public function __construct() {
	   $this->date = new \Datetime();
	   $this->publication = true;
	  // Si vous aviez déjà un constructeur, ajoutez juste cette ligne :
       $this->categories = new \Doctrine\Common\Collections\ArrayCollection();

	}

 
 
  /**
    * Add categories
    *
    * @param Sdz\BlogBundle\Entity\Categorie $categories
    */
  public function addCategorie(\Dbg\ProspectBundle\Entity\Categorie $categorie) // addCategorie sans « s » !
  {
    // Ici, on utilise l'ArrayCollection vraiment comme un tableau, avec la syntaxe []
    $this->categories[] = $categorie;
  }
 
  /**
    * Remove categories
    *
    * @param Sdz\BlogBundle\Entity\Categorie $categories
    */
  public function removeCategorie(\Dbg\ProspectBundle\Entity\Categorie $categorie) // removeCategorie sans « s » !
  {
    // Ici on utilise une méthode de l'ArrayCollection, pour supprimer la catégorie en argument
    $this->categories->removeElement($categorie);
  }
 
  /**
    * Get categories
    *
    * @return Doctrine\Common\Collections\Collection
    */
  public function getCategories() // Notez le « s », on récupère une liste de catégories ici !
  {
    return $this->categories;
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
     * Set date
     *
     * @param \DateTime $date
     * @return Article
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Article
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
     * @return Article
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
     * Set contenu
     *
     * @param string $contenu
     * @return Article
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
     * Set adresse
     *
     * @param string $adresse
     * @return Article
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
     * Set tel
     *
     * @param string $tel
     * @return Article
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
     * @return Article
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
     * Set image
     *
     * @param \Dbg\ProspectBundle\Entity\Image $image
     * @return Article
     */
    public function setImage(\Dbg\ProspectBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Dbg\ProspectBundle\Entity\Image 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set publication
     *
     * @param boolean $publication
     * @return Article
     */
    public function setPublication($publication)
    {
        $this->publication = $publication;

        return $this;
    }

    /**
     * Get publication
     *
     * @return boolean 
     */
    public function getPublication()
    {
        return $this->publication;
    }

    /**
     * Add categories
     *
     * @param \Dbg\ProspectBundle\Entity\Categorie $categories
     * @return Article
     */
    public function addCategory(\Dbg\ProspectBundle\Entity\Categorie $categories)
    {
        $this->categories[] = $categories;

        return $this;
    }

    /**
     * Remove categories
     *
     * @param \Dbg\ProspectBundle\Entity\Categorie $categories
     */
    public function removeCategory(\Dbg\ProspectBundle\Entity\Categorie $categories)
    {
        $this->categories->removeElement($categories);
    }

    /**
     * Set datedebut
     *
     * @param \DateTime $datedebut
     * @return Article
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    /**
     * Get datedebut
     *
     * @return \DateTime 
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set datefin
     *
     * @param \DateTime $datefin
     * @return Article
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;

        return $this;
    }

    /**
     * Get datefin
     *
     * @return \DateTime 
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Set client
     *
     * @param string $client
     * @return Article
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return string 
     */
    public function getClient()
    {
        return $this->client;
    }

 
   

    /**
     * Set donneurdordre
     *
     * @param string $donneurdordre
     * @return Article
     */
    public function setDonneurdordre($donneurdordre)
    {
        $this->donneurdordre = $donneurdordre;

        return $this;
    }

    /**
     * Get donneurdordre
     *
     * @return string 
     */
    public function getDonneurdordre()
    {
        return $this->donneurdordre;
    }
}

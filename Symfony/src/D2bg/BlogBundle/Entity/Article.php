<?php

namespace D2bg\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table("zarticle")
 * @ORM\Entity(repositoryClass="D2bg\BlogBundle\Entity\ArticleRepository")
 */
class Article
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
     * @var boolean
     *
     * @ORM\Column(name="publication", type="boolean")
     */
    private $publication;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255, nullable = true)
     */
    private $auteur;
    
    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text", nullable = true)
     */
    private $contenu;


    /**
     * @ORM\OneToOne(targetEntity="D2bg\BlogBundle\Entity\Image", cascade={"persist"})
     */
    private $image;
    
    /**
     * ORM\ManyToMany(targetEntity="D2bg\BlogBundle\Entity\Categorie", cascade={"persist"});
     */
    
    private $categories;
    
    /**
     * ORM\OneToMany(targetEntity="D2bg\BlogBundle\Entity\Commentaire", mappedBy= "article");
     */
     private $commentaires;
    
    /**
     * ORM\ManyToMany(targetEntity="D2bg\BlogBundle\Entity\Competence");
     */
    private $competences;

    public function __construct() {
	   $this->date = new \Datetime();
	   $this->publication = true;
	  // Si vous aviez déjà un constructeur, ajoutez juste cette ligne :
       $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
       $this->competences = new \Doctrine\Common\Collections\ArrayCollection();
      $this->commentaires = new \Doctrine\Common\Collections\ArrayCollection();

	}


  /**
    * Add categories
    *
    * @param D2bg\BlogBundle\Entity\Categorie $categories
    */
  public function addCategorie(\D2bg\BlogBundle\Entity\Categorie $categorie) // addCategorie sans « s » !
  {
    // Ici, on utilise l'ArrayCollection vraiment comme un tableau, avec la syntaxe []
    $this->categories[] = $categorie;
  }
 
  /**
    * Remove categories
    *
    * @param D2bg\BlogBundle\Entity\Categorie $categories
    */
  public function removeCategorie(\D2bg\BlogBundle\Entity\Categorie $categorie) // removeCategorie sans « s » !
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
   * Get competences
   *
   * @return Doctrine\Common\Collections\Collection
   */
  public function getCompetences() // Notez le « s », on récupère une liste de catégories ici !
  {
  	return $this->competences;
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
     * Set image
     *
     * @param \D2bg\BlogBundle\Entity\Image $image
     * @return Article
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

    
}

<?php

namespace Dbg\ProspectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dbg\ProspectBundle\Entity\CommentaireRepository")
 */
class Commentaire
{
/**
* @ORM\ManyToOne(targetEntity="Dbg\ProspectBundle\Entity\Article");
* @ORM\JoinColumn(nullable=false)
*/
private $article;
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
     * @ORM\Column(name="Date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255)
     */
    private $auteur;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    public function __construct() {
	   $this->date = new \Datetime();
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
     * @return Commentaire
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
     * Set auteur
     *
     * @param string $auteur
     * @return Commentaire
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
     * @return Commentaire
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
     * Set article
     *
     * @param \Dbg\ProspectBundle\Entity\Article $article
     * @return Commentaire
     */
    public function setArticle(\Dbg\ProspectBundle\Entity\Article $article)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \Dbg\ProspectBundle\Entity\Article 
     */
    public function getArticle()
    {
        return $this->article;
    }
}

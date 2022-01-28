<?php

namespace App\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Message
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private int $id;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private string $titre;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private string $contenue;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private string $chapeau;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    private DateTime $dateCreation;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    private DateTime $datePublication;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    private DateTime $dateModification;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private string $image;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private string $auteur;

    /**
     * @var Collection<Commentaire>
     * @ORM\OneToMany(targetEntity="Commentaire", mappedBy="message")
     */
    private Collection $commentaires;

    public function __construct() {
        $this->commentaires = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Message
     */
    public function setId(int $id): Message
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     * @return Message
     */
    public function setTitre(string $titre): Message
    {
        $this->titre = $titre;
        return $this;
    }

    /**
     * @return string
     */
    public function getContenue(): string
    {
        return $this->contenue;
    }

    /**
     * @param string $contenue
     * @return Message
     */
    public function setContenue(string $contenue): Message
    {
        $this->contenue = $contenue;
        return $this;
    }

    /**
     * @return string
     */
    public function getChapeau(): string
    {
        return $this->chapeau;
    }

    /**
     * @param string $chapeau
     * @return Message
     */
    public function setChapeau(string $chapeau): Message
    {
        $this->chapeau = $chapeau;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDateCreation(): DateTime
    {
        return $this->dateCreation;
    }

    /**
     * @param DateTime $dateCreation
     * @return Message
     */
    public function setDateCreation(DateTime $dateCreation): Message
    {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDatePublication(): DateTime
    {
        return $this->datePublication;
    }

    /**
     * @param DateTime $datePublication
     * @return Message
     */
    public function setDatePublication(DateTime $datePublication): Message
    {
        $this->datePublication = $datePublication;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDateModification(): DateTime
    {
        return $this->dateModification;
    }

    /**
     * @param DateTime $dateModification
     * @return Message
     */
    public function setDateModification(DateTime $dateModification): Message
    {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     * @return Message
     */
    public function setImage(string $image): Message
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuteur(): string
    {
        return $this->auteur;
    }

    /**
     * @param string $auteur
     * @return Message
     */
    public function setAuteur(string $auteur): Message
    {
        $this->auteur = $auteur;
        return $this;
    }

    /**
     * @return Collection<Commentaire>
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }

    /**
     * @param Collection<Commentaire> $commentaires
     * @return Message
     */
    public function setCommentaires(Collection $commentaires): Message
    {
        $this->commentaires = $commentaires;
        return $this;
    }
}
<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Commentaire
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private int $id;

    /**
     * @ORM\Column(type="text", nullable=false)
     */
    private string $contenue;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private string $auteur;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    private DateTime $dateCreation;

    /**
     * Many features have one product. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Message", inversedBy="commentaires")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private Message $message;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Commentaire
     */
    public function setId(int $id): Commentaire
    {
        $this->id = $id;
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
     * @return Commentaire
     */
    public function setContenue(string $contenue): Commentaire
    {
        $this->contenue = $contenue;
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
     * @return Commentaire
     */
    public function setAuteur(string $auteur): Commentaire
    {
        $this->auteur = $auteur;
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
     * @return Commentaire
     */
    public function setDateCreation(DateTime $dateCreation): Commentaire
    {
        $this->dateCreation = $dateCreation;
        return $this;
    }
}
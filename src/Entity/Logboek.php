<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LogboekRepository")
 */
class Logboek
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\user")
     */
    private $userid;

    /**
     * @ORM\Column(type="integer")
     */
    private $brief_nr;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $datum;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\user")
     */
    private $chauffeurid;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\truck")
     */
    private $truckid;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $kubs;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $laadplaats;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $vertrektijd;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $bestemming;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $evenement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserid(): ?user
    {
        return $this->userid;
    }

    public function setUserid(?user $userid): self
    {
        $this->userid = $userid;

        return $this;
    }

    public function getBriefNr(): ?int
    {
        return $this->brief_nr;
    }

    public function setBriefNr(int $brief_nr): self
    {
        $this->brief_nr = $brief_nr;

        return $this;
    }

    public function getDatum(): ?\DateTimeInterface
    {
        return $this->datum;
    }

    public function setDatum(?\DateTimeInterface $datum): self
    {
        $this->datum = $datum;

        return $this;
    }

    public function getChauffeurid(): ?user
    {
        return $this->chauffeurid;
    }

    public function setChauffeurid(?user $chauffeurid): self
    {
        $this->chauffeurid = $chauffeurid;

        return $this;
    }

    public function getTruckid(): ?truck
    {
        return $this->truckid;
    }

    public function setTruckid(?truck $truckid): self
    {
        $this->truckid = $truckid;

        return $this;
    }

    public function getKubs(): ?string
    {
        return $this->kubs;
    }

    public function setKubs(?string $kubs): self
    {
        $this->kubs = $kubs;

        return $this;
    }

    public function getLaadplaats(): ?string
    {
        return $this->laadplaats;
    }

    public function setLaadplaats(string $laadplaats): self
    {
        $this->laadplaats = $laadplaats;

        return $this;
    }

    public function getVertrektijd(): ?\DateTimeInterface
    {
        return $this->vertrektijd;
    }

    public function setVertrektijd(?\DateTimeInterface $vertrektijd): self
    {
        $this->vertrektijd = $vertrektijd;

        return $this;
    }

    public function getBestemming(): ?string
    {
        return $this->bestemming;
    }

    public function setBestemming(?string $bestemming): self
    {
        $this->bestemming = $bestemming;

        return $this;
    }

    public function getEvenement(): ?string
    {
        return $this->evenement;
    }

    public function setEvenement(?string $evenement): self
    {
        $this->evenement = $evenement;

        return $this;
    }
}

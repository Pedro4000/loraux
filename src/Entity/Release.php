<?php

namespace App\Entity;

use App\Repository\ReleaseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReleaseRepository::class)
 * @ORM\Table(name="`release`")
 */
class Release
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $discogsId;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $videos = [];

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Label", inversedBy="releases")
     */
    private $labels;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Artist", inversedBy="releases")
     */
    private $artists;

    /**
     * @ORM\Column(type="datetime")
     */
    private $releaseDate;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Track", mappedBy="Release")
     */
    private $tracks;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDiscogsId(): ?int
    {
        return $this->discogsId;
    }

    public function setDiscogsId(int $discogsId): self
    {
        $this->discogsId = $discogsId;

        return $this;
    }

    public function getVideos(): ?array
    {
        return $this->videos;
    }

    public function setVideos(?array $videos): self
    {
        $this->videos = $videos;

        return $this;
    }

    public function getLabels(): ?array
    {
        return $this->labels;
    }

    public function setLabels(?array $labels): self
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getArtists()
    {
        return $this->artists;
    }

    /**
     * @param mixed $artists
     */
    public function setArtists($artists): void
    {
        $this->artists = $artists;
    }

    public function addArtist(Artist $artist): self
    {
        if (!$this->artists->contains($artist)) {
            $this->artists[] = $artist;
        }
        return $this;
    }
    public function removeArtist(Artist $artist): self
    {
        if ($this->artists->contains($artist)) {
            $this->artists->removeElement($artist);
        }
        return $this;
    }


    /**
     * @return mixed
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * @param mixed $releaseDate
     */
    public function setReleaseDate($releaseDate): void
    {
        $this->releaseDate = $releaseDate;
    }

    /**
     * @return mixed
     */
    public function getTracks()
    {
        return $this->tracks;
    }

    /**
     * @param mixed $tracks
     */
    public function setTracks($tracks): void
    {
        $this->tracks = $tracks;
    }

}

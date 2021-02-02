<?php

namespace App\Entity;

use App\Repository\ArtistRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArtistRepository::class)
 * @ORM\Table(name="`artist`")
 */
class Artist
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
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Release", inversedBy="artists")
     */
    private $releases;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDiscogsId()
    {
        return $this->discogsId;
    }

    /**
     * @param mixed $discogsId
     */
    public function setDiscogsId($discogsId): void
    {
        $this->discogsId = $discogsId;
    }

    /**
     * @return array
     */
    public function getName(): array
    {
        return $this->name;
    }

    /**
     * @param array $name
     */
    public function setName(array $name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getReleases()
    {
        return $this->releases;
    }

    /**
     * @param mixed $releases
     */
    public function setReleases($releases): void
    {
        $this->releases = $releases;
    }



}

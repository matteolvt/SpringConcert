<?php

namespace App\Entity;

use App\Repository\MusiquesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MusiquesRepository::class)]
class Musiques
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $playlist = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Artistes $id_Artistes = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPlaylist(): ?string
    {
        return $this->playlist;
    }

    public function setPlaylist(string $playlist): static
    {
        $this->playlist = $playlist;

        return $this;
    }

    public function getIdArtistes(): ?Artistes
    {
        return $this->id_Artistes;
    }

    public function setIdArtistes(?Artistes $id_Artistes): static
    {
        $this->id_Artistes = $id_Artistes;

        return $this;
    }
}

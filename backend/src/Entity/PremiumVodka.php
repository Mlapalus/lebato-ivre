<?php

namespace App\Entity;

use App\Repository\PremiumVodkaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PremiumVodkaRepository::class)
 */
class PremiumVodka
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\Column(type="integer")
     */
    private $lowPrice;

    /**
     * @ORM\Column(type="integer")
     */
    private $highPrice;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getLowPrice(): ?int
    {
        return $this->lowPrice;
    }

    public function setLowPrice(int $lowPrice): self
    {
        $this->lowPrice = $lowPrice;

        return $this;
    }

    public function getHighPrice(): ?int
    {
        return $this->highPrice;
    }

    public function setHighPrice(int $highPrice): self
    {
        $this->highPrice = $highPrice;

        return $this;
    }
}

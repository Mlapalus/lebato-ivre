<?php

namespace App\Entity;

use App\Repository\PremiumRhumRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PremiumRhumRepository::class)
 */
class PremiumRhum
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

    public function getLowPrice(): ?string
    {
        return $this->lowPrice;
    }

    public function setLowPrice(string $lowPrice): self
    {
        $this->lowPrice = $lowPrice;

        return $this;
    }

    public function getHighPrice(): ?string
    {
        return $this->highPrice;
    }

    public function setHighPrice(string $highPrice): self
    {
        $this->highPrice = $highPrice;

        return $this;
    }
}

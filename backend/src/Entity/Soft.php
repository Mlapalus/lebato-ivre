<?php

namespace App\Entity;

use App\Repository\SoftRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SoftRepository::class)
 */
class Soft
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
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descrtiption;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $quantity;

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity): self
    {
        $this->quantity = $quantity;
        return $this;
    }


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

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getDescrtiption(): ?string
    {
        return $this->descrtiption;
    }

    public function setDescrtiption(?string $descrtiption): self
    {
        $this->descrtiption = $descrtiption;

        return $this;
    }

    public function __toString()
    {
        return $this->getName();
    }
}
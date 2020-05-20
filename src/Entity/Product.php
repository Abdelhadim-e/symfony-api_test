<?php

namespace App\Entity;

use Symfony\Component\Serializer\Annotation\Groups;
use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups("product:read")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     * @Groups("product:read")
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=100)
     * @Groups("product:read")
     */
    private $description;

    /**
     * @ORM\Column(type="float")
     * @Groups("product:read")
     */
    private $priceHT;

    /**
     * @ORM\Column(type="boolean")
     * @Groups("product:read")
     */
    private $available;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="products")
     * @Groups("product:read")
     */
    private $category;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPriceHT(): ?float
    {
        return $this->priceHT;
    }

    public function setPriceHT(float $priceHT): self
    {
        $this->priceHT = $priceHT;

        return $this;
    }

    public function getAvailable(): ?bool
    {
        return $this->available;
    }

    public function setAvailable(bool $available): self
    {
        $this->available = $available;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }
}

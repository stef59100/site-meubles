<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductsRepository")
 */
class Products
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ProductName;

    /**
     * @ORM\Column(type="text")
     */
    private $ProductDescription;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ProductImage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ProductMaker;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="products")
     * @ORM\JoinColumn(nullable=false)
     */
    private $productCategory;

    /**
     * @ORM\Column(type="float")
     */
    private $ProductPrice;

    /**
     * @ORM\Column(type="float")
     */
    private $Tax;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductName(): ?string
    {
        return $this->ProductName;
    }

    public function setProductName(string $ProductName): self
    {
        $this->ProductName = $ProductName;

        return $this;
    }

    public function getProductDescription(): ?string
    {
        return $this->ProductDescription;
    }

    public function setProductDescription(string $ProductDescription): self
    {
        $this->ProductDescription = $ProductDescription;

        return $this;
    }

    public function getProductImage(): ?string
    {
        return $this->ProductImage;
    }

    public function setProductImage(string $ProductImage): self
    {
        $this->ProductImage = $ProductImage;

        return $this;
    }

    public function getProductMaker(): ?string
    {
        return $this->ProductMaker;
    }

    public function setProductMaker(string $ProductMaker): self
    {
        $this->ProductMaker = $ProductMaker;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getProductCategory(): ?Category
    {
        return $this->productCategory;
    }

    public function setProductCategory(?Category $productCategory): self
    {
        $this->productCategory = $productCategory;

        return $this;
    }

    public function getProductPrice(): ?float
    {
        return $this->ProductPrice;
    }

    public function setProductPrice(float $ProductPrice): self
    {
        $this->ProductPrice = $ProductPrice;

        return $this;
    }

    public function getTax(): ?float
    {
        return $this->Tax;
    }

    public function setTax(float $Tax): self
    {
        $this->Tax = $Tax;

        return $this;
    }
}

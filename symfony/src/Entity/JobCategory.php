<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\JobCategoryRepository")
 */
class JobCategory
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $category_name;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $category_image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategoryName(): ?string
    {
        return $this->category_name;
    }

    public function setCategoryName(string $category_name): self
    {
        $this->category_name = $category_name;

        return $this;
    }

    public function getCategoryImage(): ?string
    {
        return $this->category_image;
    }

    public function setCategoryImage(string $category_image): self
    {
        $this->category_image = $category_image;

        return $this;
    }
}
<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CustomerGroupRepository")
 */
class CustomerGroup
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Customer", inversedBy="customerGroups")
     */
    private $customer_id;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Category", inversedBy="customerGroups")
     */
    private $category_id;

    public function __construct()
    {
        $this->customer_id = new ArrayCollection();
        $this->category_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Customer[]
     */
    public function getCustomerId(): Collection
    {
        return $this->customer_id;
    }

    public function addCustomerId(Customer $customerId): self
    {
        if (!$this->customer_id->contains($customerId)) {
            $this->customer_id[] = $customerId;
        }

        return $this;
    }

    public function removeCustomerId(Customer $customerId): self
    {
        if ($this->customer_id->contains($customerId)) {
            $this->customer_id->removeElement($customerId);
        }

        return $this;
    }

    /**
     * @return Collection|Category[]
     */
    public function getCategoryId(): Collection
    {
        return $this->category_id;
    }

    public function addCategoryId(Category $categoryId): self
    {
        if (!$this->category_id->contains($categoryId)) {
            $this->category_id[] = $categoryId;
        }

        return $this;
    }

    public function removeCategoryId(Category $categoryId): self
    {
        if ($this->category_id->contains($categoryId)) {
            $this->category_id->removeElement($categoryId);
        }

        return $this;
    }
}

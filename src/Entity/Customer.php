<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CustomerRepository")
 */
class Customer
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
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\CustomerGroup", mappedBy="customer_id")
     */
    private $customerGroups;

    public function __construct()
    {
        $this->customerGroups = new ArrayCollection();
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

    /**
     * @return Collection|CustomerGroup[]
     */
    public function getCustomerGroups(): Collection
    {
        return $this->customerGroups;
    }

    public function addCustomerGroup(CustomerGroup $customerGroup): self
    {
        if (!$this->customerGroups->contains($customerGroup)) {
            $this->customerGroups[] = $customerGroup;
            $customerGroup->addCustomerId($this);
        }

        return $this;
    }

    public function removeCustomerGroup(CustomerGroup $customerGroup): self
    {
        if ($this->customerGroups->contains($customerGroup)) {
            $this->customerGroups->removeElement($customerGroup);
            $customerGroup->removeCustomerId($this);
        }

        return $this;
    }

 


   

}

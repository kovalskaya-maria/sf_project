<?php

namespace App\Entity;

use App\Repository\TypeRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass=TypeRepository::class)
 */
class Type
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     *
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

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

/*
    public function addItems(Item $items): self
    {
        if (!$this->items->contains($items)) {
            $this->items[] = $items;
            $items->setUnivId($this);
        }

        return $this;
    }

    public function removeItems(Item $items): self
    {
        if ($this->items->contains($items)) {
            $this->items->removeElement($items);
            // set the owning side to null (unless already changed)
            if ($items->getTypeID() === $this) {
                $items->setTypeId(null);
            }
        }

        return $this;
    }
*/
}

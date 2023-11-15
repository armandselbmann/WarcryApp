<?php

namespace App\Entity;

use App\Repository\QuantityRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QuantityRepository::class)]
class Quantity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Qty = null;

    #[ORM\Column]
    private ?int $TotalPoints = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQty(): ?int
    {
        return $this->Qty;
    }

    public function setQty(int $Qty): static
    {
        $this->Qty = $Qty;

        return $this;
    }

    public function getTotalPoints(): ?int
    {
        return $this->TotalPoints;
    }

    public function setTotalPoints(int $TotalPoints): static
    {
        $this->TotalPoints = $TotalPoints;

        return $this;
    }
}

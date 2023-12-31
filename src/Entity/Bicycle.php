<?php

namespace App\Entity;

class Bicycle
{
    private $brand;
    private $color;
    private $workingParts = [];

    public function __construct(string $brand, string $color)
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    public function getBrand()
    {
      return $this->brand;
    }

    public function getColor()
    {
      return $this->color;
    }

    public function addWorkingPart(string $part)
    {
        $this->workingParts[] = $part;
    }

    public function getWorkingParts(): array
    {
        return $this->workingParts;
    }
}

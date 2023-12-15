<?php

namespace App\Entity;

class Bicycle
{
    public $brand;
    public $color;
    public $workingParts = [];

    public function __construct(string $brand, string $color)
    {
        $this->brand = $brand;
        $this->color = $color;
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

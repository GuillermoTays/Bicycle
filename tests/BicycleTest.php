<?php

namespace App\Tests\Entity;

use App\Entity\Bicycle;
use PHPUnit\Framework\TestCase;

class BicycleTest extends TestCase
{
    public function testBicycleCreation()
    {
        $bicycle = new Bicycle('BrandX', 'Blue');

        $this->assertInstanceOf(Bicycle::class, $bicycle);
        $this->assertEquals('BrandX', $bicycle->getBrand());
        $this->assertEquals('Blue', $bicycle->getColor());
        $this->assertEmpty($bicycle->getWorkingParts());
    }

    public function testAddWorkingPart()
    {
        $bicycle = new Bicycle('BrandY', 'Red');
        $bicycle->addWorkingPart('Wheel');
        $bicycle->addWorkingPart('Pedals');

        $this->assertEquals(['Wheel', 'Pedals'], $bicycle->getWorkingParts());
    }
}

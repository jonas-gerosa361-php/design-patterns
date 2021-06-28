<?php

use PHPUnit\Framework\TestCase;

final class StrategyTest extends TestCase
{
    public function testSedexShouldReturnShippingOfFiveSixtyOne()
    {
        $company = new Strategy\Sedex();
        $packageType = 'PAC';
        $packageWeight = 5.10;
        $shipping = $company->calculateShipping($packageType, $packageWeight);
        $this->assertSame(5.61, $shipping);
    }

    public function testFedexShouldReturnShippingOfFiveForty()
    {
        $company = new Strategy\Fedex();
        $packageType = 'premium';
        $packageWeight = 4.50;
        $shipping = $company->calculateShipping($packageType, $packageWeight);
        $this->assertSame(5.40, $shipping);
    }
}

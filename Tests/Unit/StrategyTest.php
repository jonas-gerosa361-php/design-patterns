<?php

use PHPUnit\Framework\TestCase;

final class StrategyTest extends TestCase
{
    public function testSedexShouldReturnShippingOfTwoFifty()
    {
        $company = new Strategy\Sedex();
        $packageType = 'PAC';
        $packageWeight = 8.90;
        $shipping = $company->calculateShipping($packageType, $packageWeight);
        $this->assertSame(2.50, $shipping);
    }
}

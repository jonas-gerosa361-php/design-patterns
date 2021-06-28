<?php

namespace Strategy;

class Fedex implements ShippingInterface
{
    public function calculateShipping(string $packageType, float $packageWeight): float
    {
        switch ($packageType) {
            case 'premium':
                return round($packageWeight * 1.2, 2);
            case 'regular':
                return round($packageWeight * 0.5, 2);
            default:
                return round($packageWeight * 0.5, 2);
        }
    }
}

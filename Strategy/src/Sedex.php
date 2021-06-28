<?php

namespace Strategy;

class Sedex implements ShippingInterface
{
    public function calculateShipping(string $packageType, float $packageWeight): float
    {
        switch (strtolower($packageType)) {
            case 'sedex':
                return round($packageWeight * 1.5, 2);
            case 'pac':
                return round($packageWeight * 1.1, 2);
            default:
                return round($packageWeight * 1.1, 2);
        }
    }
}

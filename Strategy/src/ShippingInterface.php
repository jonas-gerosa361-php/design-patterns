<?php

namespace Strategy;

interface ShippingInterface
{
    public function calculateShipping(string $packageType, float $packageWeight): float;
}

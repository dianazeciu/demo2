<?php

namespace Ilbah\Shop;

class Chocolate extends Product
{
   private int $size;
    public function __construct(int $id, int $size, string $name, float $price, Category $category)
    {
        $this->size = $size;
        parent::__construct($id, $name, $price, $category); // proprietatile sunt comune, valorile sunt diferite
    }

    public function tax(): float
    {
        return $this->price * 1.19;
    }

}
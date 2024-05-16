<?php

namespace Ilbah\Shop;

class Category
{
   private string $name; // sa plecam de la cel mai restrictiv la cel mai putin restrictiv;
    public function __construct(string $name)
    {
        $this->name = $name;
    }


    public function getName(): string
    {
        return $this->name;
    }
}
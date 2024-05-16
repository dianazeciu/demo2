<?php

namespace Ilbah\Shop;

abstract class Product implements Taxable //o facem abstracta ca sa n o putem instantia
{
    protected int $id;

    protected string $name; // private nu se poate mosteni; protected se poate mosteni

    protected float $price;

    protected Category $category;


    public function __construct(int $id, string $name, float $price, Category $category)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getCategory()
    {
        return $this->category;
    }
    public function getId()
    {
        return $this->id;
    }
}
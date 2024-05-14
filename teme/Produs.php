<?php
// tema nr 1 - curs 10
class Produs
{
    public string $name; // DEFINIRE PROPRIETATI
    public int $price; // DEFINIRE PROPRIETATI

    public function __construct($name, $price) //INCAPSULARE
    {
        $this->name = $name;
        $this->price = $price;

    }
    public function toString() // CREARE FUNCTIE CU CE VREM SA FACA
    {
        return 'Product: ' . $this->name . ' with price: ' . $this->price;
    }
}
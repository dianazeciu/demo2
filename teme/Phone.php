<?php

require_once('Produs.php');
class Phone extends Produs
{
    public string $description;
    public string $availability;

    public function __construct($name, $description, $price, $availability)
    {
        parent::__construct($name, $price); // am setat numele si pretul din parinte
        $this->description = $description;
        $this->availability = $availability;
    }

    public function toString()
    {
        return 'Product: ' . $this->name . ' with following description: ' . $this->description . ' with price ' . $this->price . ', ' . ' is ' . $this->availability . '.';
    }
}

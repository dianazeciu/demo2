<?php

class Address {
    public string $country;
    public string $county;
    public string $street;
    public int $streetNumber;
    public string $postalCode;

    public function __construct (
        $country1,                    // proprietatile; 
        $county1, 
        $street1, 
        $streetNumber1,
        $postalCode1,
        ) {
            $this->country = $country1;
            $this ->county = $county1;
            $this ->street = $street1;
            $this ->streetNumber = $streetNumber1;
            $this ->postalCode = $postalCode1;


    }
}

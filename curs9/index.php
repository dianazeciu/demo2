<?php

class Car {
    protected $name;

    public function setName ($carName) {
        if (!is_string($carName)) {
            exit('Variabila trebuie sa fie string');
        }
        $this -> name = $carName;
    }
      function startEngine (){
        echo 'engine started' . ' ' . $this->name . '<br>';
    }
    function go () {
        $this ->startEngine();
        echo 'gone <br>';
    }
}

$car1 = new Car ();
$car2 = new Car ();

$car1 -> setName ('Mercedes');
$car2 -> setName ('Opel');

$car1->startEngine();
$car2->go();

var_dump ($car1, $car2);
// modificatorii de acces: public, protected, private; 

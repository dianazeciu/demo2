<?php

require_once ('Address.php');
require ('Person.php');


class Registry {
    public array $people;

    public function __construct ($person) {
        $this->addPerson($person);
    }

    public function addPerson ($person) {
        $this->people[] = $person;
    }
    public function __destruct (){
        echo 'distrus';
    }
    public function getPeople(){
        return $this->people;
    }
    public function getPeopleNames(){
        $lista ='';
        foreach($this->people as $person){
            $lista .= $person->getFirstName() . ' , ' ;
        }
        return $lista;
    }
}

$address1 = new Address ('Romania', 'Bucuresti', 'Radu Calomfirescu', 13, '041334');
$person1 = new Person('Marian', 'Trifu', $address1);
$registry = New Registry($person1);

$address2 = new Address ('Egipt', 'Cairo', 'barsha', 23, '12346');
$person2 = new Person ('Diana', 'Iuliana', $address2);
$registry ->addPerson($person2);

// unset($registry);
// var_dump($registry->getPeople());

echo $registry->getPeopleNames();

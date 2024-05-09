<?php

require_once ('Dog.php');
require_once ('Bird.php');
require_once ('StringHelper.php');
require_once ('Azor.php');

$dog = new Dog ( 'Pufi');
$dog->setLegs(legs: 4);
//$animal = new Animal(name:'Tedi');
$bird = new Bird(name: 'Loli');
//echo $animal->getLegs();
echo '<br>';
echo $dog->getLegs();
echo '<br>';
echo $dog->walk();
echo '<br>';
echo $dog->move();
echo '<br>';
echo $bird->move();
echo '<br>';

//var_dump($dog);
// protected este mostenit; private nu este mostenit - ascund metode sa nu poate fi apelate
// clasele abstarcte nu se pot instantia;

echo StringHelper::toCamelCase(string: 'LOLI');
echo '<br>';
new Azor();
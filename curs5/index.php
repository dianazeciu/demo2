<?php

$cars = ['vw', 'mercedes', 'renault', 'ford', 'dacia', 'mitsubishi'];
$cars [1] = 'yamaha';
echo $cars [1] .'<br>';
foreach ($cars as $key => $car) {
    echo $key . '->' . $car . '<br>';
}

$boats = [];
$boats [0] = 'honda';
$boats [2] = 'suzuki';
$boats [7] = 'yamaha';
foreach ($boats as $key => $boat) {
    echo $key . '->' . $boat . '<br>';
}

$person1 = [
    'firstName' => 'Cristi',
    'lastName' => 'Alexandru',
];
$person2 = [
    'firstName'=> 'Marius',
    'lastName'=> 'Alexandru',
];
$persons = [$person1, $person2];
foreach ($persons as $person){
    echo $person ['firstName'] . ' ' . $person ['lastName'] . '<br>';
}

// functii predefinite tablouri 
// https://www.php.net/manual/en/ref.array.php - gasim toate functiile; 

 sort ($cars);
 foreach ($cars as $key => $car) {
    echo $key . '->' . $car . '<br>';
}

rsort ($cars);
foreach ($cars as $key => $car) {
    echo $key . '->' . $car . '<br>';
}

$numbers = [6,9,7,3,11,70,2];
print_r($numbers);
echo '<br>';
sort ($numbers);
print_r($numbers);
echo '<br>';
foreach ($numbers as $key => $numbers) {
    echo $numbers . ', ';
}
echo '<br>';
$age = ['Iulian'=> 38, 'Alex' => 42, 'Marius ' => 40];
print_r ($age); echo '<br>';
arsort ($age);
print_r ($age); echo '<br>';
asort ($age);
print_r ($age); echo '<br>';
ksort ($age);
print_r ($age); echo '<br>';
krsort ($age);
print_r ($age); echo '<br>';

//tema nr 1 

$companiiRCA = array ('Asirom', 'Omniasig', 'Hellas', 'Allianz', 'Grawe', 'Axeria', 'Generali', 'Groupama');
$companiiNonRCA = array ('Asirom', 'Allianz', 'Generali', 'Groupama');
$a = array_intersect ($companiiRCA, $companiiNonRCA);
var_dump ($a) . '<br>';


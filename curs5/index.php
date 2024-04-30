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

// tema nr 5 
//vector asociativ = ['name' => 'VASILE']
// [0 => 'ION'] - EXPLICITE, cand pui cheia 
// ['vasile', 'marius'] = IMPLICITE, fara cheie
// [0 = 'vw', 7 => 'Renault']

echo '<br>';

$array = [
    'firstName' => 'Marian', // parametru 1
    'lastName' => 'Trifu',
];
function newArray($array1, $array2, $array3) {  // varianta mai complicata, daca aveam 3 vectori
foreach($array2 as $key => $value) {
    $array[$value] = $array3[$key];
    return $array1;
}
} 
$newArray = newArray ($array, ['adresa'],['Radu Calomfirescu 8'] );
print_r($newArray);

echo '<br>';
function newArray2($array1, $key, $value) { //varianta simplificata
    $array1[$key] = $value;

        return $array1;
}
$newArray = newArray ($array, ['adresa'],['Radu Calomfirescu 8'] );
print_r($newArray);

echo '<br>';

// tema nr 6 - 2 functii 
//creati o functie care initializeaza un vector indexat cu 10 elemente, la fiecae index se va
//stoca un vector asociativ cu urm chei:nume, oras, telefon. valoarea asociata null 

function initVector()
{
    $vector = array();
    //pentru fiecare index de la 0 la 9 
    for($i=0; $i<10; $i++){
        $vector[$i] = array('nume' => Null, 'oras' => Null, 'telefon' => Null);
    } return $vector; 
    // cum ar arata [0 => ['nume' => null, 'oras' => null, 'telefon' => null,], 1 => [....idem la 0], ]

    // facem functia cu 5 paramaetri 
}

function popVector($vector, $index, $nume, $oras, $telefon) //isset - vf daca este o cheie intr un vector si dac are o valoare
{    if(isset($vector[$index])) {
    $vector[$index] = array('nume'=> $nume, 'oras' => $oras, 'telefon' => $telefon); 
}
return $vector;
}

$persoane = initVector();
$persoaneCuValori = popVector($persoane, index: 2, nume: 'David', oras: 'Bucuresti', telefon: '0729722722');
var_dump($persoane, $persoaneCuValori);
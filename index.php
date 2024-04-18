<?php

echo'Hello Diana!';
echo '<br/>';
$a = 10;
var_dump ($a);
$b = 2.5;
var_dump ($b);
$nume = 'zeciu';
$prenume = "diana $a";
echo '<br/>';
echo $nume;
echo $prenume;
echo '<br/>';
$car = true;
$bici = false;
var_dump ($car);
var_dump ($bici);
echo '<br/>';
$array = [1, 'ok', 7.3];
var_dump ($array);
echo '<br/>';
$array2 = [0 =>1, 'car'=> 'VW'];
var_dump ($array2);
echo '<br/>';
$array3 = [$array, $array2];
var_dump ($array3);
echo '<br/>';
class Car {
    public string $color;
    function setColor ($newColor) {
        $this->color = $newColor;
    }
}
$car = new Car();
$car->setcolor('green');
echo $car->color;
var_dump($car);
echo '<br/>';

$integer = null;
if (isset($integer)) {
    print('variabila are valoare');
} else {
    print('variabila nu are valoare');
}
echo '<br/>';
$integer = 10;
if (isset($integer)) {
    print('variabila are valoare');
} else {
    print('variabila nu are valoare');
}
echo '<br/>';
$a = 5;
$b = 2;
$c = 'text';
echo $a + $b;
echo '<br/>';
echo $a - $b;
echo '<br/>';
echo $a * $b;
echo '<br/>';
echo $a / $b; 
echo '<br/>';
echo $a % $b;
echo '<br/>';
echo $a.$c;
echo '<br/>';
echo $a++;
echo '<br/>';
echo ++$a;
echo '<br/>';
echo --$a;
echo '<br/>';
$x = 2;
$y = 3;
echo $x**=$y;
echo '<br/>';
define ('world', 'Romania');
echo world;
echo '<br/>';
echo M_PI;
echo '<br/>';
define ("cars", [
    "Mitsubishi",
    "Dacia",
    "Bmw"
]);
echo cars[1]; 
echo '<br/>';

// Definirea variabilelor 
$a = 20;
$b = 5;
$operatie = ["+", "-", "*", "/"];

// Efectuarea operatiilor
echo $a+$b;
echo '<br/>';
echo $a-$b;
echo '<br/>';
echo $a*$b;
echo '<br/>';
echo $a/$b;
echo '<br/>';

// Definirea variabilelor
$a = 20;
$b = 0;
$operatie = "+"; 
$rezultat = 0;

// Efectuarea operatiei

switch ($operatie) {
    case "+":
        $rezultat = $a + $b;
        break;
    case "-":
        $rezultat = $a - $b;
        break;
    case "*":
        $rezultat = $a * $b;
        break;
    case "/":
        if ($b != 0) {
            $rezultat = $a / $b;
        } else {
            echo "$rezultat = $a";
        }
        break;
    
}

// Afisarea rezultatului
echo "Rezultatul: $a $operatie $b = $rezultat";
echo '<br/>';

function adunare ($a, $b) {
    return $a + $b;
}
$a = 53;
$b = 67;



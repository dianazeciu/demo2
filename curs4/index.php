<?php
// 18.04.2024 - curs 4 - Structuri de control; 
echo '<br/>';
echo $a = false || true; 
echo '<br/>';
echo $a = false or true; 
echo '<br/>';
// $car=blue; 
// if ($car=='blue'){
    $car = 'green';
// }
// echo $car;
//if($a = adunare (0,0)){
// }

$a = true;
if ($a){
    echo 'adevarat';
}
function test($val){
    return false;
}
if ($b=test(5)){
    echo 'nu se apeleaza';
}
if (5 > 7){
    echo 'nice';
}
echo '<br/>';
if (5<7){
    echo 'super';
    echo '<br/>';
}
if (5 >7){
    echo 'nice';
} else {
    echo 'better';
}
echo '<br/>';
if (5>7 && 3>2){
    echo 'nice';
} elseif (4<5) {
    echo 'better';
} else {
    echo 'nice to have';
}
echo '<br/>';

$card = 'visa';
if ($card == 'mastercard'){
    echo 'mastercard';
} elseif ($card == 'visa'){
    echo 'visa';
} else {
    echo'maybe amex';
}
// faci folder nou cu denumire curs; 
// apoi din vs code dai new file, o denumesti index.php si o salvezi in folder curs 4
// ca sa deschizi apoi in web http://localhost/curs4/index.php;
$number = 5;
while ($number <=10){
    echo $number . '<br/>'; //lipire de stringuri - punctul inseamna concatenare; 
    $number++;
}
echo '<br/>';
$i = 5;
do {
    echo $i . '<br/>';
    $i++;
} while ($i <=10);
// for (initializare, conditie, incrementare)
// structura for 
for ($x = 10; $x > 0; $x--){ // numara invers
    echo $x . '<br/>';
}
// structura schitch case exemplu 
#carColor = 'blue';
switch ($carColor) {
    case 'red';
    echo 'red';
    break;
    case 'green';
    echo 'green';
    break;
    default:
    echo 'no color';
    break;
}
// camel case $carColor - asta este de actualitate;
// snake case $car_color - asta este verianta veche; 
// INCLUDEREA altor scripturi
// functiile include si require; include da warning; require e mai strict, da direct fatal eroar; 
// 4. spatierea 
// 5. operatorul coalescing
echo '<br/>';

$person = null;
$marian = ($person) ?? 'Marian';
echo $marian;
echo '<br/>';

var_export ($marian);
echo '<br/>';

var_dump ($marian);
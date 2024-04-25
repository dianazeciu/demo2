<?php
// ' '  - valoare
// " " - evalueaza  // daca nu ai nimic de evaluat, de scris cu ghilimele simple 

$a = 5;
echo '$a';
echo '<br>';
echo "$a";

$name = 'Marian';
$empty = '';

echo '<br>';
echo 'Alex\'s';
echo '<br>';
echo "Ana's \"Marian\"";
echo '<br>';
echo 'alex \\ marius';
echo '<br>';

$variabila = 10;
echo "\$variabila = $variabila";
echo '<br>';

$variabila = 10;
echo "nota = $variabila";
echo '<br>';

echo strlen($name) . '<br>'; // afiseaza cate caractere are parametrul nostru; 

$lastName = 'Alexandru';
echo strpos ($lastName, 'and') . '<br>'; // afiseaza al catelea caracter este cel cautat, cheia lui

$lastName = 'Diana Iuliana';
echo strpos ($lastName, 'a') . '<br>';
if (strpos($lastName, 'ia')){
    echo 'found <br>';
} else {
    echo 'not found';
}

// phpinfo ();

echo strstr ($lastName, 'An') . '<br>'; // case sensitive

echo stristr ($lastName, 'An') . '<br>'; // case insensitive

echo substr ($lastName, 7) . '<br>'; // afiseaza de la caracterul cu nr pana la sfarsit

echo substr ($lastName, 6, -2) . '<br>'; // afiseaza de la caracterul setat pana la unde setezi tu cu minus; 

echo strtoupper($lastName) . '<br>'; // afiseaza totul cu mjuscule

echo strtolower($lastName) . '<br>'; // afiseaza totul cu litere mici

echo ucfirst ($lastName) . '<br>'; // face prima litera mare

echo ucwords ($lastName) . '<br>'; // face 

echo 'altceva' . trim (' text  asdasda ') . '<br>';

echo nl2br ("this is a \n new text") . '<br>';

echo str_replace (' ', '---', $lastName) . '<br>';

echo str_replace ('Diana', 'Zeciu', $lastName) . '<br>';

$string = 'Asteptam sa vina vara!';
$chars = explode (' ', $string);
var_dump ($chars);
echo '<br>';

$chars = preg_split ('/ /', $string);
var_dump($chars);

// regexr.com - site pt expresii regulate; 

echo '<br>';
$cars = ['Mercedes', 'Porsche', 'Ford', 'Bmw'];
echo 'I have the following cars in my garage: ' . implode (', ', $cars) . '.'; // ca sa pui punct la prop faci concatenare.

echo '<br>';
echo str_repeat ($string, 3);

echo '<br>';
$string = 'Asteptam sa vina vara!';
$a = str_split($string);
var_dump ($a);

echo '<br>';
var_dump (str_split($string)); // dau acelasi rez dar sunt scrieri diferite; 
echo '<br>';
foreach (str_split($string) as $key => $str) {
    echo $str . ' ';
}
echo '<br>';

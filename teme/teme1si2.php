<?php 
// curs 1 - Introducere
echo "Hello Diana!" . "<br>";

// curs 2 - Tipuri de date
$integer = 3;
$float = 2.2;
$string = "acesta este un string";
$boolean = true;
print (var_dump ($float)) . "<br>";
print (var_dump ($integer)) . "<br>";
print (var_dump ($string)) . "<br>";
print (var_dump ($boolean)). "<br>";
// structura unei functii:
// function ordonare () {
//     // linii de cod continute de functie;
// }
// ordonare (); // apelarea functiei 
function afiseazaNume ($a) {
    echo "Numele meu este " . $a . '!' . "<br>";
}
afiseazaNume ("Diana");
afiseazaNume ("Iuliana");
afiseazaNume ("Marius");
// teme curs 2; 

// 1. Realizati o functie ce primeste un parametru si afiseaza un mesaj de forma: "Ati introdus valoarea:" urmat de valoarea parametrului;
function tema1c2 ($a) {
    echo "Ati introdus valoarea: " . $a . '.'. "<br>";
}
tema1c2 (10);
tema1c2 (20);

// 2. Realizati o functie ce primeste 2 parametri. Aceasta va afisa rezultatul adunarii celor doi parametrii. Experimentati cu diferite valori.
function tema2c2 ($a, $b) {
    echo $a + $b . "<br>";
}
tema2c2 (2,3); 
tema2c2 (5, 15);

// 3. Realizati o functie ce primeste 3 parametri, dintre care 2 au valori predefinite. Aceasta va afisa rezultatul operatiei de adunare a celor 3 parametri. Experimentati cu diferite tipuri de date si valori pentru cei 2 parametri predefiniti.
function tema3c2 ($a, $b=5, $c = 7) {
 echo $a + $b + $c . "<br>";
}
tema3c2 (2,5,7);
tema3c2 (7);

// 4. Realizati o functie ce primeste 2 parametri si returneaza valoarea rezultata prin concatenarea celor 2 parametri. Aceasta valoare va fi asignata unei variabile $rezultat. Se va afisa extern functiei care este tipul variabilei $rezultat.
function tema4c2 ($c, $d) {
  return $c . ' '. $d . "<br>";
}
$rezultat = tema4c2 ("Diana", "Iuliana");
print (var_dump ($rezultat));

<?php
$a = 5;
$b = 7;
$c = 2; 
$x = ($b-$a)*$c;
$y = $x%$c;
echo $x;
echo '<br/>';
echo $y;
echo '<br/>';
echo $x = $a+$b/$c;
echo '<br/>';
echo $x +=10; 
echo '<br/>';
// += $a +=1 inseamna $a=$a+1;
// alt exemplu $a +=7;-> $a=$a+7; 
// -= $a -=3; ->$b = $b-3;
echo $a +=1;
echo '<br/>';
echo $b -=3;
echo '<br/>';
$t = 'text1';
$z = 'z';
echo $z.=$t;
echo '<br/>';
$x = (1 > 2);
var_dump ($x);
echo '<br/>';
$x = (3 ==3);
var_dump ($x);
echo '<br/>';
$x = ('3'==3);
var_dump ($x);
echo '<br/>';
$x = ('3'===3); //intre ghilimele tip string; fara ghilimele tip int; 
var_dump ($x);
echo '<br/>';
$x = ('3'!==3);
var_dump ($x);
echo '<br/>';
$x = (1!=2);
var_dump ($x);
echo '<br/>';
$x = (3>=4);
var_dump ($x); // diferenta intre comenzile echo (doar iti afiseaza valoarea) si var dump (pe langa valoare iti da si tip); 
echo '<br/>';
// operatori incrementare 
$j = 5;
var_dump ($j++);
echo '<br/>';
$i = 7;
var_dump (--$i);
echo '<br/>';
echo $j;
echo '<br/>';
// operatori logici - se folosesc in if uri
// && -> si 
// || -> sau 
// and -> si 
// or -> sau  
// xor -> true sau false
// !(a&&b)
var_dump (true && false);
echo '<br/>';
var_dump (true && true);
echo '<br/>';
Var_dump (true || false);
echo '<br/>';
var_dump (false || true);
echo '<br/>';
$a = false && (false || true);
var_dump ($a);
echo '<br/>';
$a = false && false || true;
var_dump ($a);
echo '<br/>';
// alte exemple 
var_dump (''&& 0);// 0 = false tot timpul; string gol este true tot timpul, adica gilimele goale, paranteze goale, etc;
echo '<br/>';
function scrie ($ceva)
// cum definim o functie; tot timpul incepem cu function dupa care ai nume functie (){}
// functie cu parametrii function nume functie2($param) {}
// ca sa apelam o functie, pur si simplu scriem numele ei; nume functie (); sau numefunctie ($param2) sau ($string);
// functiile pot fi de tip void sau return; 
{
    echo $ceva;
    echo '\n';
    return false;
}
$a = true || scrie ('ceva cu ||');
echo '<br/>';
$a = false || scrie ('altceva cu ||');
echo '<br/>';
$a = true or scrie ('ceva cu or');
echo '<br/>';
$a = true && scrie ('ceva cu &&');
echo '<br/>';
// operatorul ternar 
$a = (2<3)?'text1' : 'text2';
echo $a;
echo "\n";
// $x = (conditie)? 'true' : 'false';
echo '<br/>';
$x = 7; 
$y = ($x%2)? 'impar' : 'par';
var_dump ($y);
echo '<br/>';

// daca locul 1 are 1000 pct, daca locul 2 are 800 pct; daca locul 3 si 4 are 600 pct 
$a = 53;
$b = 67;
function adunare($a, $b){
    return $a + $b;
}
echo adunare ($a, $b);
// http://localhost/curs3/index.php
echo '<br/>';
function scadere($a, $b){
    return ($a - $b);
}
echo scadere ($a, $b);
echo '<br/>';
function inmultire($a, $b){
    return ($a * $b);
}
echo inmultire ($a, $b); 
echo '<br/>';
function impartire($a, $b){
    // case ($b = 0)? "1" : "$b"; - varianta mea dar gresita
    $b = $b == 0 ? 1 : $b;
    return ($a/$b);
}
echo impartire ($a, $b);
// tema 4 
// creati o functie 3 parametri ; daca par 2 si 3 sunt 0 sau < 0, at vor primi in interiorul functiei valoarea 1 , respectiv 2. 
echo '<br/>';

function operatiiConditii ($param1, $param2, $param3){
    $param2 = $param2 <= 0 ? 1 : $param2;
    $param3 = $param3 <= 0 ? 2 : $param3;
    if (($param1 - $param2) >5 && ($param3 % 2) == 0){
        echo "Rezaultatul este: " . (($param1 / $param2) ** $param2);
    } else {
        echo "rip.";
    }
}
echo operatiiConditii (5, 8, 12);
// cum salvam pe git 
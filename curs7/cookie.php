<?php

// setcookie ('name', 'Marian', time () + 3600, '/', '', 0);

var_dump ($_COOKIE);

// var_dump ($_SERVER);

//phpinfo();

setcookie ('name', 'Marian', time () - 3600, '/', '', 0);
echo '<br>';
var_dump ($_COOKIE);

//sesiunea - nu este in browser, este pe server
// aici putem pune mai multe lucruri, chiar si senzitive
echo '<br>';

session_start();

if (isset($_SESSION['counter'])) {
    $_SESSION['counter']++;
} else {
    $_SESSION['counter'] = 1;
}
echo 'You visited this page' . ' ' . $_SESSION['counter'] . ' ' . 'times.';

//unset ($_SESSION['counter']); - cu asta scot doar o intrare
session_destroy(); // aici se scot toate 
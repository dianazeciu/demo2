<?php

require_once ('Produs.php');
require_once ('Phone.php');

//$produs1 = new Produs(name: 'Telefon', price: 1500);
//echo $produs1->toString();



$produs2 = new Phone('Phone', 'blue', 1500, 'available');
echo $produs2->toString();

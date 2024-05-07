<?php
// deschidere, citire, inchidere fisiere

$cars = fopen ('cars.txt', 'r+'); // pentru citire 'r'; pt citire si scriere 'r+'

if ($cars == false) {
    echo 'error in opening file';
}
$filesize = filesize('cars.txt');
$carsTxt = fread ($cars, $filesize);

var_dump($carsTxt, $filesize);
if(is_writable('cars.txt')){
    fwrite($cars, "\n\n other cars here");

}
fclose($cars);

//change file permissions to rwx-rw-r (owner-groups-others)
if (chmod('cars.txt', 764)){
    echo 'changed';
} else {
    echo 'not changed'; 
}

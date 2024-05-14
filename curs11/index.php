<?php
declare(strict_types=1);
// php standard recommendations

// piesa 1 si piesa 4;
// PSR-1: Basic Coding Standard

require_once('vendor/autoload.php');
echo '<br>';

//use Ilbah\Curs11\Book;
//use Ilbah\Curs11\Author;
use Ilbah\Curs11\{Book, Author}; // este o vrianta de import mai multe ;
use Ilbah\Curs11\Library\Book as BookLibrary;
use Ilbah\Curs11\Library\PublishingHouse;

// cu use incarcam o clasa dintr un namespace;
echo '<br>';
$book = new Book('Confesiunea unei masti');
echo '<br>';
$author = new Author();
echo '<br>';
$book2 = new BookLibrary();
$publishingHouse = new PublishingHouse();
echo '<br>';
dump($book);
echo '<br>';
dump($author);
echo '<br>';
dump($publishingHouse);
echo '<br>';
dump($book2);
// cand nu stim ceva, cautam info pe php.net
// cand punem dd in loc de dump, nu mai ruleaza codul; folosim cand verificam pas cu pas ca sa vedem unde am gresit;
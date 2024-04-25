<?php
$a = 'M300';
$b = 'M500';
$c = 'I800'; 
$d = 'Av1000';
$e = 'Av1200'; 
$turneu = "Av1000";
if ($turneu == 'M300'){
    echo 'Nu se incadreaza';
} else if ($turneu == 'M500'){
       echo 'esti prea bun pentru acest turneu';
} else if ($turneu == 'I800'){
        echo 'te poti inscrie la acest turneu';
} else if ($turneu == 'Av1000'){
            echo 'te poti inscrie la acest turneu';
} else if ($turneu == 'Av1200'){
                echo 'nivel prea mare';
} else 'no level';
echo '<br/>';
    

$level== array ('M300', 'M500', 'I800', 'Av1000', 'Av1200');
$turneu = 'I800';
if ($level == 'M300'){
    echo 'Turneul este de nivel prea mare pentru tine';
} else if ($level == 'M500'){
    echo 'Te poti inscrie la acest turneu';
} else if ($level == 'I800'){
    echo 'Turneul acesta este ideal pentru tine';
} else if ($level == 'Av1000'){
    echo 'Nivelul este prea mare';
} else if ($level == 'Av1200'){
    echo 'nu este pentru tine';
} else 'no level';
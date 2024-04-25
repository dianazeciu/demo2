<?php

var_dump($_REQUEST);
if(isset($_GET['first_name']) && isset($_GET['last_name'])) {
echo 'Hello,' .  ' ' . $_GET ['first_name'] . ' ' . $_GET ['last_name'] . '!';
}
echo '<br>';

// if (!empty ($_GET)){
//     echo 'Hello,' .  ' ' . $_GET ['first_name'] . ' ' . $_GET ['last_name'] . '!';
// }


if (!empty ($_POST)){
    echo 'Hello,' .  ' ' . $_POST ['first_name'] . ' ' . $_POST ['last_name'] . '!';
}

// var_dump($_POST);
// metodele http 
// GET 
// POST 
// PUT
// PATCH
// DELETE // HTTP VERBS 
// 200 success
// 201 created
// daca vrem sa trimitem niste parametrii catre server, avem get sau post 
// GET
// http://localhost/index.php ?
// nume = Marian&prenume = Alex 

?>

<!-- functia GET CREARE, nu la login -->
<!-- <form action = 'index.php ' method = 'GET'>
   First Name: <input type ='text' name = 'first_name' > <br/>
   Last Name: <input type = 'text' name = 'last_name'> <br/>
   <input type = 'submit' value='send'>
</form> -->

<!-- functia POST pt modificare -->
<form action = 'index.php ' method = 'POST'>
   First Name: <input type ='text' name = 'first_name' > <br/>
   Last Name: <input type = 'text' name = 'last_name'> <br/>
   <input type = 'submit' value='send'>
</form>

<!-- VARIABILA REQUEST -->
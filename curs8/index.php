
<!-- // curs 8 - Gestionarea fisierelor 
// https://www.php.net/manual/en/book.filesystem.php - functii pt fisiere -->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body>
    <?php include("menu.php"); ?>
    <table border="1">
        <tr>
            <?php foreach($menu as $m): ?>
                <td> <?php echo $m; ?> </td>
                <?php endforeach; ?>
        </tr>
     </table>    
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$table = array("Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre");
// echo $table[7];
// $table[7] = "Août";
// echo $table[7];

$august = array(7=>"août");
$new_array = array_replace($table, $august);

var_dump($new_array);

?>
</body>
</html>
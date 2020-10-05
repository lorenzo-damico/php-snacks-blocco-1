<!--
Passare come parametri GET name, mail e age e verificare (cercando i metodi
che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
-->

<?php

$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

if (strlen($name) > 3 && strpos($mail, ".") != false && strpos($mail, "@") != false && is_numeric($age)) {
  $message = "Accesso Riuscito";
} else {
  $message = "Accesso negato";
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Snack 2</title>
  </head>
  <body>
    <h1>Inserisci i dati: name, mail, age</h1>
    <p><?php echo $message ?></p>
  </body>
</html>

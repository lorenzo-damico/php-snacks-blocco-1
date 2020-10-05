<!--
Creiamo un array 'matches' contenente altri array i quali rappresentano delle
partite di basket di un’ipotetica tappa del calendario. Ogni array della partita
avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di
casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60
-->

<?php

$matches = [
  [
    "Squadra di casa" => "Cantù",
    "Squadra ospite" => "Pesaro",
    "Punti casa" => 81,
    "Punti ospite" => 72
  ],
  [
    "Squadra di casa" => "Brindisi",
    "Squadra ospite" => "Roma",
    "Punti casa" => 92,
    "Punti ospite" => 67
  ],
  [
    "Squadra di casa" => "Fortitudo Bologna",
    "Squadra ospite" => "Varese",
    "Punti casa" => 83,
    "Punti ospite" => 88
  ],
  [
    "Squadra di casa" => "Sassari",
    "Squadra ospite" => "Trieste",
    "Punti casa" => 72,
    "Punti ospite" => 74
  ],
  [
    "Squadra di casa" => "Brescia",
    "Squadra ospite" => "Virtus Bologna",
    "Punti casa" => 80,
    "Punti ospite" => 81
  ],
  [
    "Squadra di casa" => "Olimpia Milano",
    "Squadra ospite" => "Treviso",
    "Punti casa" => 104,
    "Punti ospite" => 64
  ],
  [
    "Squadra di casa" => "Cremona",
    "Squadra ospite" => "Venezia",
    "Punti casa" => 66,
    "Punti ospite" => 83
  ],
  [
    "Squadra di casa" => "Trento",
    "Squadra ospite" => "Reggiana",
    "Punti casa" => 81,
    "Punti ospite" => 87
  ]
];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Snack 1</title>
  </head>
  <body>
    <h1>Risultati seconda giornata</h1>
    <ul>
      <?php
        for ($i=0; $i < count($matches) ; $i++) {
          $squadra_casa = ($matches[$i]["Squadra di casa"]);
          $squadra_ospite = ($matches[$i]["Squadra ospite"]);
          $punti_casa = ($matches[$i]["Punti casa"]);
          $punti_ospite = ($matches[$i]["Punti ospite"]);

          echo "<li>".$squadra_casa." - ".$squadra_ospite." | ".$punti_casa."-".$punti_ospite;
        }
      ?>
    </ul>

  </body>
</html>

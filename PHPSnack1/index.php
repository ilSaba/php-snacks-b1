<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del
calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti
dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:

Olimpia Milano - Cantù | 55-60 -->

<?php
$match = [
    "Tappa1" => [
        "Squadre" => "Olimpia Milano - Cantù",
        "Punti" => "55-60",
    ],
    "Tappa2" => [
        "Squadre" => "Milano - Bergamo",
        "Punti" => "40-75",
    ],
];

var_dump($match);
for ($i = 1; $i <= count($match); $i++) { ?>
    <div>
        <?= $match["Tappa".$i]["Squadre"] ?>
        <?= $match["Tappa".$i]["Punti"] ?>
    </div>
<?php
    }
?>

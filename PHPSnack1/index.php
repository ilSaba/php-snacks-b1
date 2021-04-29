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

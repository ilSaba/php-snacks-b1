<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno
avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<!-- Codice PHP -->
<?php
$studients = [
    [
        'name' => 'Andrea',
        'surname' => 'Sabatini',
        'votes' => [6, 8, 10, 2, 4]
    ],
    [
        'name' => 'Lorenzo',
        'surname' => 'Bernini',
        'votes' => [6, 2, 8, 2, 1]
    ],
    [
        'name' => 'Andrea',
        'surname' => 'Gori',
        'votes' => [10, 9, 11, 9, 9]
    ],
];

for($i=0; $i  < count($studients); $i++) {
?>

<!-- Scrivo su HTML -->

<div>  
    <?= $studients[$i]['name'] ?> 
    <?= $studients[$i] ['surname']?> 
    <?= array_sum($studients[$i]['votes']) / count($studients[$i]['votes'])?>  
</div>

<?php
}
?>
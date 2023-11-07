<?php 

$notas = [
    10,
    3,
    5,
    8,
    1
];

$notasOrdenadas = $notas;
sort($notasOrdenadas);

echo 'Desordenadas';
echo "<pre>";
echo var_dump($notas);
echo "</pre>";

echo 'Ordenadas';
echo "<pre>";
echo var_dump($notasOrdenadas);
echo "</pre>";
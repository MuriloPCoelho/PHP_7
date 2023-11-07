<?php 

$listaDeListas = [
    "nome" => 'Jorge',
    "idade" => 14,
    "cpf" => 12345678900
];

list(
    'nome' => $nome,
    'idade' => $idade,
    'cpf' => $cpf
    ) = $listaDeListas;

echo "<pre>";
echo var_dump($listaDeListas);
echo "</pre>";

echo "$nome / $idade / $cpf" ;
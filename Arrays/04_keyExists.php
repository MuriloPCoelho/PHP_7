<?php  

//ARRAY_KEY_EXISITS ISSET
//ambos verificam se a chave existe no array, entretanto, no caso do isset(), se o valor de determinada chave for null a função retornará false

$listaAlunos = [
  "Jairo" => 5.3,
  "Fernanda" => 2.1,
  "Alberto" => null,
  "Julia" => 9.2,
  
];

echo var_dump(isset($listaAlunos['Jairo']));
echo var_dump(isset($listaAlunos['Alberto']));
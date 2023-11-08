<?php 

$dados = [
  'nome' => 'Arthur',
  'nota' => 8,
  'idade' => 23

];

extract($dados); // transforma em variável cada uma das chaves e atribui o valor da chave como valor da variável

$cpf = '04882984302';
$tipoSanguineo = "A+";
$email = "fulanoDTal@yahoo.com.uk";

$dadosExtras = compact('cpf', 'tipoSanguineo', 'email'); // cria um array com os nomes das váriaveis como chaves e os valores das mesmas como valor das chaves

echo "<pre>";
var_dump(array_merge($dados, $dadosExtras));
echo "</pre>";

echo "Aluno: $nome <br>
      Nota: $nota <br>
      Idade: $idade <br>
      CPF: $cpf <br> 
      Tipo sanguíneo: $tipoSanguineo <br>
      Email: $email ";
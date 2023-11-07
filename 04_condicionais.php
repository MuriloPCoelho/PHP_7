<?php

/* Operadores Lógicos
  E -> '&&', 'and'
  OU -> '||', 'or'
  NÃO -> '!'
*/

/* Operadores Relacionais
  == : 'igual'
  === : 'identifico' (necessita que tipo e o valor sejam iguais)
  !== : 'não identico'
  != : 'diferente'
  <> : 'diferente'
  < : 'menor que'
  > : 'maior que'
  <= : 'menor ou igual a'
  >= : 'maior ou igual a'
*/

$idade = 15;
$estaAcompanhado = true; 

echo "Você só pode entrar se tiver mais do que 18 anos ou se estiver acompanhado de um resoponsável maior de idade. <br>";
echo "Sua idade: $idade <br>";

// if ($idade >= 18) { 
//   echo "Você tem idade suficiente para entrar.";
// } else {
//   echo "Você não possui idade suficiente para entrar.";
// }

// //Operador Ternário
// echo ($idade >= 18) ? 
//   "Você possui idade suficiente para entrar." 
//   : "Você não possui idade suficiente para entrar.";

if ($idade >= 18) {
  echo "Você possui idade suficiente para passar!";
    
} else if ($estaAcompanhado) {
  echo "Sua idade não é suficiente, mas como você está acompanhado(a), pode passar!";

} else {
  echo "Você não pode passar!";

}
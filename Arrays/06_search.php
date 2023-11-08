<?php 

//array_search( int ou string valor_a_ser_procurado, array array , bool is_strict )
//retorna a chave de valor correspondente, e caso não ache, retorna false
// strict determina se a comparação feita será == (false) ou === (true)

$listaAlunos = [
	"Jairo" => '5.3',
	"Fernanda" => 2.1,
	"Alberto" => null,
	"Julia" => 9.2,
    
];

$notaProcurada = 5.3;
$alunoQueTirouANota = array_search($notaProcurada, $listaAlunos, true) != false ?: 'Zé ninguém';

echo "Quem tirou a nota $notaProcurada? <br>";
echo "Foi o(a) $alunoQueTirouANota";
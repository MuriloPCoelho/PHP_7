<?php 

//in_array( int ou string valor_a_ser_procurado, array array , bool is_strict )
// retorna true ou false
// strict determina se a comparação feita será == (false) ou === (true)

$listaAlunos = [
	"Jairo" => '5.3',
	"Fernanda" => 2.1,
	"Alberto" => null,
	"Julia" => 9.2,
    
];

echo var_dump(in_array(5.3, $listaAlunos, true));
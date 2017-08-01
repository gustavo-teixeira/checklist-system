<?php



$usuario = "root";
$senha = "root";
$servidor = "localhost";
$banco = "posvenda_checklist";

$conexao = mysqli_connect($servidor,$usuario,$senha,$banco);

if (!$conexao) {
	die("Falha na conexão".mysqli_connect_error());
}

?>
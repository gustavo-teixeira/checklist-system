<?php

if(isset($_GET["id"])){
$id = $_GET["id"];

include "conexao.php";

$select = "SELECT * FROM checklist WHERE id=$id"; 

$res = mysqli_query($conexao,$select);
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Checklist Pós Venda</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
<center>
<div style="width: 900px;">
<table width="900" border="0" class="table table-striped">

<?php
	while ($escrever = mysqli_fetch_array($res)) {

		echo '<tr><td><b>'.$escrever['cliente'].'<b></td><td><a href="#" class="btn btn-primary btn-sm disabled" role="button">Editar</a></td></tr>';
		
		echo '<tr><td>Conferiu writeboards (briefing e atendimento)?</td>';
		if ($escrever['p1'] == 1) {
			echo '<td>Sim</td></tr>';
		}else{
			echo '<td>Não</td></tr>';
		}
		
		echo '<tr><td>Código de Conversão está instalado?</td>';
		if ($escrever['p2'] == 1) {
			echo '<td>Sim</td></tr>';
		}else{
			echo '<td>Não</td></tr>';
		}

		echo '<tr><td>Código de Remarketing está instalado?</td>';
		if ($escrever['p3'] == 1) {
			echo '<td>Sim</td></tr>';
		}else{
			echo '<td>Não</td></tr>';
		}

		echo '<tr><td>Como está os resultado entre os meses</td>';
		if ($escrever['p4'] == 0) {
			echo '<td>Melhor</td></tr>';
		}if($escrever['p4'] == 1) {
			echo '<td>Igual</td></tr>';
		}if($escrever['p4'] == 2) {
			echo '<td>Pior</td></tr>';
		}

		echo '<tr><td>Como está a quantidade de Cliques? (confira com o mês anterior)</td>';
		if ($escrever['p5'] == 0) {
			echo '<td>Melhor</td></tr>';
		}if($escrever['p5'] == 1) {
			echo '<td>Igual</td></tr>';
		}if($escrever['p5'] == 2) {
			echo '<td>Pior</td></tr>';
		}

		echo '<tr><td>Como está a quantidade de CTR? (confira com o mês anterior)</td>';
		if ($escrever['p6'] == 0) {
			echo '<td>Melhor</td></tr>';
		}if($escrever['p6'] == 1) {
			echo '<td>Igual</td></tr>';
		}if($escrever['p6'] == 2) {
			echo '<td>Pior</td></tr>';
		}

		echo '<tr><td>Como está a quantidade de Posição Média? (confira com o mês anterior)</td>';
		if ($escrever['p7'] == 0) {
			echo '<td>Melhor</td></tr>';
		}if($escrever['p7'] == 1) {
			echo '<td>Igual</td></tr>';
		}if($escrever['p7'] == 2) {
			echo '<td>Pior</td></tr>';
		}

		echo '<tr><td>Como está a quantidade de Conversões? (confira com o mês anterior)</td>';
		if ($escrever['p8'] == 0) {
			echo '<td>Melhor</td></tr>';
		}if($escrever['p8'] == 1) {
			echo '<td>Igual</td></tr>';
		}if($escrever['p8'] == 2) {
			echo '<td>Pior</td></tr>';
		}if($escrever['p8'] == 3) {
			echo '<td>Sem Código</td></tr>';
		}

		echo '<tr><td>Como está a quantidade de Custo de Conversão? (confira com o mês anterior)</td>';
		if ($escrever['p9'] == 0) {
			echo '<td>Melhor</td></tr>';
		}if($escrever['p9'] == 1) {
			echo '<td>Igual</td></tr>';
		}if($escrever['p9'] == 2) {
			echo '<td>Pior</td></tr>';
		}if($escrever['p9'] == 3) {
			echo '<td>Sem Código</td></tr>';
		}

		echo '<tr><td>Conferiu writeboards (briefing e atendimento)?</td>';
		if ($escrever['p10'] == 1) {
			echo '<td>Sim</td></tr>';
		}else{
			echo '<td>Não</td></tr>';
		}

		echo '<tr><td>Possui campanha de Pesquisa?</td>';
		if ($escrever['p11'] == 1) {
			echo '<td>Sim</td></tr>';
		}else{
			echo '<td>Não</td></tr>';
		}

		echo '<tr><td>Possui campanha de Display?</td>';
		if ($escrever['p12'] == 1) {
			echo '<td>Sim</td></tr>';
		}else{
			echo '<td>Não</td></tr>';
		}

		echo '<tr><td>Possui campanha de Remarketing?</td>';
		if ($escrever['p13'] == 1) {
			echo '<td>Sim</td></tr>';
		}else{
			echo '<td>Não</td></tr>';
		}

		echo '<tr><td>Possui campanha de Google Shopping?</td>';
		if ($escrever['p14'] == 1) {
			echo '<td>Sim</td></tr>';
		}else{
			echo '<td>Não</td></tr>';
		}

		echo '<tr><td>Possui campanha de Remarketing Dinâmico?</td>';
		if ($escrever['p15'] == 1) {
			echo '<td>Sim</td></tr>';
		}else{
			echo '<td>Não</td></tr>';
		}

		echo '<tr><td>Possui campanha de Dinâmica?</td>';
		if ($escrever['p16'] == 1) {
			echo '<td>Sim</td></tr>';
		}else{
			echo '<td>Não</td></tr>';
		}

		echo '<tr><td>Possui campanha de Youtube?</td>';
		if ($escrever['p17'] == 1) {
			echo '<td>Sim</td></tr>';
		}else{
			echo '<td>Não</td></tr>';
		}

		echo '<tr><td>Possui campanha de Gmail?</td>';
		if ($escrever['p18'] == 1) {
			echo '<td>Sim</td></tr>';
		}else{
			echo '<td>Não</td></tr>';
		}

	}

?>

</table>
</div>
</center>
</body>
</html>
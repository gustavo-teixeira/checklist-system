<?php

if(isset($_POST["cliente"])){
$cliente = $_POST["cliente"];
$p1 = $_POST["p1"];
$p2 = $_POST["p2"];
$p3 = $_POST["p3"];
$p4 = $_POST["p4"];
$p5 = $_POST["p5"];
$p6 = $_POST["p6"];
$p7 = $_POST["p7"];
$p8 = $_POST["p8"];
$p9 = $_POST["p9"];
$p10 = $_POST["p10"];
$p11 = $_POST["p11"];
$p12 = $_POST["p12"];
$p13 = $_POST["p13"];
$p14 = $_POST["p14"];
$p15 = $_POST["p15"];
$p16 = $_POST["p16"];
$p17 = $_POST["p17"];
$p18 = $_POST["p18"];

include "conexao.php";

$query = "INSERT INTO checklist (cliente,p1,p2,p3,p4,p5,p6,p7,p8,p9,p10,p11,p12,p13,p14,p15,p16,p17,p18) VALUES ('$cliente',$p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$p10,$p11,$p12,$p13,$p14,$p15,$p16,$p17,$p18)"; 

mysqli_query($conexao,$query); 

echo "Checklist registrado";

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
<h4>Para que o pós venda seja completo, temos algumas coisas que devemos fazer para que seja um pós venda de sucesso:</h4>

<form id="form" name="form" method="POST" action="index.php">
  <div class="form-group">
    <input type="text" class="form-control" id="cliente" name="cliente" placeholder="Cliente">
  </div>

  <table class="table table-striped">
  <tr>
  	<td>Conferiu writeboards (briefing e atendimento)?</td>
  	<td>
  		<div class="radio">
          	<label><input type="radio" name="p1" id="options1" value="1" checked>Sim</label>
       	</div>
    <td>
        <div class="radio">
          	<label><input type="radio" name="p1" id="options2" value="0" checked>Não</label>
       	</div>
    </td>
    <td>
    </td>
    <td>
    </td>
  </tr>
  <tr>
  	<td>Código de Conversão está instalado?</td>
  	<td>
  		<div class="radio">
          	<label><input type="radio" name="p2" id="options1" value="1" checked>Sim</label>
       	</div>
    <td>
        <div class="radio">
          	<label><input type="radio" name="p2" id="options2" value="0" checked>Não</label>
       	</div>
    </td>
    <td>
    </td>
    <td>
    </td>
  </tr>
  <tr>
  	<td>Código de Remarketing está instalado?</td>
  	<td>
  		<div class="radio">
          	<label><input type="radio" name="p3" id="options1" value="1" checked>Sim</label>
       	</div>
    <td>
        <div class="radio">
          	<label><input type="radio" name="p3" id="options2" value="0" checked>Não</label>
       	</div>
    </td>
    <td>
    </td>
    <td>
    </td>
  </tr>
  <tr>
  	<td>Compare os resultado entre os meses</td>
  	<td>
  		<div class="radio">
          	<label><input type="radio" name="p4" id="options1" value="0" checked>Melhor</label>
       	</div>
    <td>
        <div class="radio">
          	<label><input type="radio" name="p4" id="options2" value="1" checked>Igual</label>
       	</div>
    </td>
    <td>
        <div class="radio">
          	<label><input type="radio" name="p4" id="options3" value="2" checked>Pior</label>
       	</div>
    </td>
    <td>
    </td>
  </tr>
  <tr>
  	<td>Como está a quantidade de Cliques? (confira com o mês anterior)</td>
  	<td>
  		<div class="radio">
          	<label><input type="radio" name="p5" id="options1" value="0" checked>Melhor</label>
       	</div>
    <td>
        <div class="radio">
          	<label><input type="radio" name="p5" id="options2" value="1" checked>Igual</label>
       	</div>
    </td>
    <td>
        <div class="radio">
          	<label><input type="radio" name="p5" id="options3" value="2" checked>Pior</label>
       	</div>
    </td>
    <td>
    </td>
  </tr>
  <tr>
  	<td>Como está a quantidade de CTR? (confira com o mês anterior)</td>
  	<td>
  		<div class="radio">
          	<label><input type="radio" name="p6" id="options1" value="0" checked>Melhor</label>
       	</div>
    <td>
        <div class="radio">
          	<label><input type="radio" name="p6" id="options2" value="1" checked>Igual</label>
       	</div>
    </td>
    <td>
        <div class="radio">
          	<label><input type="radio" name="p6" id="options3" value="2" checked>Pior</label>
       	</div>
    </td>
    <td>
    </td>
  </tr>
  <tr>
  	<td>Como está a quantidade de Posição Média? (confira com o mês anterior)</td>
  	<td>
  		<div class="radio">
          	<label><input type="radio" name="p7" id="options1" value="0" checked>Melhor</label>
       	</div>
    <td>
        <div class="radio">
          	<label><input type="radio" name="p7" id="options2" value="1" checked>Igual</label>
       	</div>
    </td>
    <td>
        <div class="radio">
          	<label><input type="radio" name="p7" id="options3" value="2" checked>Pior</label>
       	</div>
    </td>
    <td>
    </td>
  </tr>
  <tr>
  	<td>Como está a quantidade de Conversões? (confira com o mês anterior)</td>
  	<td>
  		<div class="radio">
          	<label><input type="radio" name="p8" id="options1" value="0" checked>Melhor</label>
       	</div>
    <td>
        <div class="radio">
          	<label><input type="radio" name="p8" id="options2" value="1" checked>Igual</label>
       	</div>
    </td>
    <td>
        <div class="radio">
          	<label><input type="radio" name="p8" id="options3" value="2" checked>Pior</label>
       	</div>
    </td>
    <td>
        <div class="radio">
          	<label><input type="radio" name="p8" id="options4" value="3" checked>Sem código</label>
       	</div>
    </td>
  </tr>
  <tr>
  	<td>Como está a quantidade de Custo de Conversão? (confira com o mês anterior)</td>
  	<td>
  		<div class="radio">
          	<label><input type="radio" name="p9" id="options1" value="0" checked>Melhor</label>
       	</div>
    <td>
        <div class="radio">
          	<label><input type="radio" name="p9" id="options2" value="1" checked>Igual</label>
       	</div>
    </td>
    <td>
        <div class="radio">
          	<label><input type="radio" name="p9" id="options3" value="2" checked>Pior</label>
       	</div>
    </td>
    <td>
        <div class="radio">
          	<label><input type="radio" name="p9" id="options4" value="3" checked>Sem código</label>
       	</div>
    </td>
  </tr>
  <tr>
  	<td>Conferiu writeboards (briefing e atendimento)?</td>
  	<td>
  		<div class="radio">
          	<label><input type="radio" name="p10" id="options1" value="1" checked>Sim</label>
       	</div>
    <td>
        <div class="radio">
          	<label><input type="radio" name="p10" id="options2" value="0" checked>Não</label>
       	</div>
    </td>
    <td>
    </td>
    <td>
    </td>
  </tr>
  <tr>
  	<td>Possui campanha de Pesquisa?</td>
  	<td>
  		<div class="radio">
          	<label><input type="radio" name="p11" id="options1" value="1" checked>Sim</label>
       	</div>
    <td>
        <div class="radio">
          	<label><input type="radio" name="p11" id="options2" value="0" checked>Não</label>
       	</div>
    </td>
    <td>
    </td>
    <td>
    </td>
  </tr>
  <tr>
  	<td>Possui campanha de Display?</td>
  	<td>
  		<div class="radio">
          	<label><input type="radio" name="p12" id="options1" value="1" checked>Sim</label>
       	</div>
    <td>
        <div class="radio">
          	<label><input type="radio" name="p12" id="options2" value="0" checked>Não</label>
       	</div>
    </td>
    <td>
    </td>
    <td>
    </td>
  </tr>
  <tr>
  	<td>Possui campanha de Remarketing?</td>
  	<td>
  		<div class="radio">
          	<label><input type="radio" name="p13" id="options1" value="1" checked>Sim</label>
       	</div>
    <td>
        <div class="radio">
          	<label><input type="radio" name="p13" id="options2" value="0" checked>Não</label>
       	</div>
    </td>
    <td>
    </td>
    <td>
    </td>
  </tr>
  <tr>
  	<td>Possui campanha de Google Shopping?</td>
  	<td>
  		<div class="radio">
          	<label><input type="radio" name="p14" id="options1" value="1" checked>Sim</label>
       	</div>
    <td>
        <div class="radio">
          	<label><input type="radio" name="p14" id="options2" value="0" checked>Não</label>
       	</div>
    </td>
    <td>
    </td>
    <td>
    </td>
  </tr>
  <tr>
  	<td>Possui campanha de Remarketing Dinâmico?</td>
  	<td>
  		<div class="radio">
          	<label><input type="radio" name="p15" id="options1" value="1" checked>Sim</label>
       	</div>
    <td>
        <div class="radio">
          	<label><input type="radio" name="p15" id="options2" value="0" checked>Não</label>
       	</div>
    </td>
    <td>
    </td>
    <td>
    </td>
  </tr>
  <tr>
  	<td>Possui campanha de Dinâmica?</td>
  	<td>
  		<div class="radio">
          	<label><input type="radio" name="p16" id="options1" value="1" checked>Sim</label>
       	</div>
    <td>
        <div class="radio">
          	<label><input type="radio" name="p16" id="options2" value="0" checked>Não</label>
       	</div>
    </td>
    <td>
    </td>
    <td>
    </td>
  </tr>
  <tr>
  	<td>Possui campanha de Youtube?</td>
  	<td>
  		<div class="radio">
          	<label><input type="radio" name="p17" id="options1" value="1" checked>Sim</label>
       	</div>
    <td>
        <div class="radio">
          	<label><input type="radio" name="p17" id="options2" value="0" checked>Não</label>
       	</div>
    </td>
    <td>
    </td>
    <td>
    </td>
  </tr>
  <tr>
  	<td>Possui campanha de Gmail?</td>
  	<td>
  		<div class="radio">
          	<label><input type="radio" name="p18" id="options1" value="1" checked>Sim</label>
       	</div>
    <td>
        <div class="radio">
          	<label><input type="radio" name="p18" id="options2" value="0" checked>Não</label>
       	</div>
    </td>
    <td>
    </td>
    <td>
    </td>
  </tr>

  <tr>
  <td>
  <button type="submit" class="btn btn-primary btn-block">Finalizar</button>&nbsp&nbsp&nbsp
  </td>
  <td>
  </td>
  <td>
  </td>
  <td>
  </td>

<td>
<a href="listar.php"><button type="button" class="btn btn-info btn-block">Listar todos</button></a>
</td>
</tr>
</table>
</div>
</form>
</center>
</body>
</html>
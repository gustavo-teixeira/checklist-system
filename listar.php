<?php

include "conexao.php";

$select = "SELECT * from checklist order by id desc limit 10"; 

$res = mysqli_query($conexao,$select); 

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
<tr>
<td>
<h5>ID</h5>
</td>
<td>
<h5>Cliente</h5>
</td>
<td>
<h5>Link</h5>
</td>
</tr>
<?php
	
	while($escrever = mysqli_fetch_array($res)){
		echo "<tr><td>".$escrever['id'] . '</td>';
		echo "<td>".$escrever['cliente'] . '</td><td><a href="checklist-adwords.php?id=' .$escrever['id']. '">
<button type="button" class="btn btn-primary btn-block">Link</button>
</a></td></tr>';
	}
?>
</table>
</div>
</center>
</body>
</html>

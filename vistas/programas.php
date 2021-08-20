<!doctype html>
<html>
<head>

<title>Editar </title>

</head>

<body>
<div class="main-wrapper">
<h1>Editar Registros de Programas</h1>
<br><br>

<?php
	include("../class/function.php");
?>
<div class="containe1">

</div>
	<table class="table" >
		<thead><br>
		

		<th>Ficha</th>
		<th >Nombre de Programa</th>
		<th >Numero de Documento</th>
		<th >Opciones</th>
	</thead>
<?php 
	$sql = "select * from programas";
	$result = db_query($sql);
	while($row = mysqli_fetch_object($result)){
	?>
	<tbody><tr>
				<td data-label="Ficha:"><?php echo $row->ficha;?></td>
                <td data-label="Nombre de Programa:"><?php echo $row->nom_programa;?></td>
                <td data-label="Numero de Documento"><?php echo $row->No_documento;?></td>
                <td data-label="Opcion"><a href="editar_programas.php?id=<?php echo $row->ficha; ?>">
				<input type="submit" class="btn btn-primary btn-block"  name="submit" value="actualizar"></a></td></tbody>
	
	<?php } ?>
	
	<a  href="../controlaores/c-menu.php">
<input type="submit" class="btn btn-primary btn-block"  name="submit" value="Volver"></a>
	<br><br>
</table>
</div>
</body>
</html>
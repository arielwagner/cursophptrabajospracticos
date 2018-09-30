<?php 

require_once 'datas.php';
if(isset($_POST['btn1'])) {
	if($_POST['btn1']=='Aceptar') {
		$update = new Datas();
		$update->addNewUser(trim($_POST['txt2']), 
							trim($_POST['txt3']));
		echo "<p>Datos actualizados...</p>";
		echo '<p><a href="index.php">Ir al Listado</a></p>';
		exit;
	}
}

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5">
<title>Agregar Contacto...</title>
</head>

<body>
<h2>Gesti&oacute;n de Contactos</h2>
<p>Agregar Contacto:</p>
<p></p>
<form action="add.php" method="post" id="form1" name="form1">
<table>
<tr>
<td>Nombre: </td>
<td><input id="txt2" name="txt2" type="text" required="required" 
placeholder="Usuario" value=""></td>
</tr>
<td>Contrase&ntilde;a: </td>
<td><input id="txt3" name="txt3" type="text" required="required" 
placeholder="Contrase&ntilde;a" value=""></td>
</tr>
</table>
<p></p>
<p><input name="btn1" type="submit" value="Aceptar"> | <a href="index.php">Cancelar</a></p>
</form>
</body>
</html>
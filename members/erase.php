<?php 

require_once 'datas.php';
if(isset($_POST['btn1'])) {
	if($_POST['btn1']=='Aceptar') {
		$update = new Datas();
		$update->eraseUser(trim($_POST['txt1']));
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
<title>Eliminar Contacto...</title>
</head>

<body>
<h2>Gesti&oacute;n de Contactos</h2>
<p>Borrar Contacto:</p>
<p></p>
<p>Recuerde que si elimina el contacto m&aacute;s tarde no 
podr&aacute; recuperarlo. &iquest;Est&aacute; seguro de hacer esto?</p>
<p></p>
<form action="erase.php" method="post" id="form1" name="form1">
<table>
<tr>
<td>ID: </td>
<td><input id="txt1" name="txt1" type="hidden" 
value="<?php echo $_GET['id']; ?>"><?php echo $_GET['id']; ?></td>
</tr>
<td>Nombre: </td>
<td><?php echo $_GET['usuario']; ?></td>
</tr>
<td>Contrase&ntilde;a: </td>
<td><?php echo $_GET['clave']; ?></td>
</tr>
</table>
<p></p>
<p><input name="btn1" type="submit" value="Aceptar"> | <a href="index.php">Cancelar</a></p>
</form>
</body>
</html>
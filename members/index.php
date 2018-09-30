<?php

require_once 'datas.php';
$lista=new Datas();

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5">
<title>Membres&iacute;as de los Clientes</title>
</head>

<body>
<h2>Gesti&oacute;n de Contactos</h2>
<p>Listado de Contactos:</p>
<table>
<tr><th>ID</th><th>Usuarios</th><th>Contrase&ntilde;a</th><th>ABM</th></tr>
	<!-- Cargar listado de contactos -->
	<?php foreach($lista->getListado() as $row) { ?>
    <tr>
        <td><?php echo $row[0]; ?></td>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><a href="add.php">Nuevo</a> | 
        <a href="erase.php?id=<?php echo $row[0]; ?>&amp;
        usuario=<?php echo $row[1]; ?>&amp;
        clave=<?php echo $row[2]; ?>&amp;">Borrar</a> | 
        <a href="edit.php?id=<?php echo $row[0]; ?>&amp;
        usuario=<?php echo $row[1]; ?>&amp;
        clave=<?php echo $row[2]; ?>&amp;">Editar</a></td>
    </tr>
    <?php } ?>
</table>
<p></p>
<p><a href="add.php">Nuevo</a></p>
</body>
</html>

<?php
/*
	Archivo para crear el archivo que contiene a los
	usuarios y sus contraseñas. Las contraseñas están
	encriptadas por razones de seguridad...
*/

$username = "mabel";
$password = "mabel123";

$archivo = 'c:\appserv\www\curso\logon1\htpass';
$contenido = $username.":".md5($password);

if (is_writable($archivo)) {
	if (!$handle = fopen($archivo, "a")) {
	echo "No se puede abrir el archivo ($archivo)";
	exit;
}

if (fwrite($handle, $contenido) === FALSE) {
	echo "No se puede escribir en el archivo ($archivo)";
}
fclose($handle);
} else {
	echo "El archivo $archivo no se puede escribir";
}
?>
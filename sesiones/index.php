<?php
	require_once 'sesiones.php';
?>

<?php 

// Datos que proviene de la consulta de la base de datos
$user = "user";
$pass = "123";
// Preparar la carta - Compose
$to = "usuario@miserver.com";
$subject = "Asunto - Clave de Env�o Nueva";
$headers = "From: Librer�a Virtual - Nueva Contrase�a";
$message = "Nueva Contrase�a\r\n";
$message .= "Le recordamos que hemos actualizado su contrase�a nueva. A conti-nuaci�n le dejamos los datos.\r\n";
$message .= "Nombre de usuario: $user\r\n";
$message .= "Contrase�a: $pass\r\n";
$message .= "Cualquier inconveniente, por favor, comun�quese con el administra-dor del sistema.";
// Enviar el correo electr�nico...
mail($to, $subject, $message, $headers);

?>
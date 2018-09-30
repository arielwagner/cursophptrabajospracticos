<?php
	require_once 'sesiones.php';
?>

<?php 

// Datos que proviene de la consulta de la base de datos
$user = "user";
$pass = "123";
// Preparar la carta - Compose
$to = "usuario@miserver.com";
$subject = "Asunto - Clave de Envío Nueva";
$headers = "From: Librería Virtual - Nueva Contraseña";
$message = "Nueva Contraseña\r\n";
$message .= "Le recordamos que hemos actualizado su contraseña nueva. A conti-nuación le dejamos los datos.\r\n";
$message .= "Nombre de usuario: $user\r\n";
$message .= "Contraseña: $pass\r\n";
$message .= "Cualquier inconveniente, por favor, comuníquese con el administra-dor del sistema.";
// Enviar el correo electrónico...
mail($to, $subject, $message, $headers);

?>
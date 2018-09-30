<?php 

require_once 'publisheds.php';
$pbs=new Publisheds();

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<title>Librer&iacute;a Online</title>
<style type="text/css">
  body {
  	margin-left: 5px;
  	margin-top: 5px;
  	margin-right: 5px;
  	margin-bottom: 5px;
  }
</style>
<body>
<div class="container">
  <div class="header"><a href="#" class="header">
  <img src="images/top.png" width="757" height="120" id="Insert_logo" 
        style="background-color: #D7DCDE; display:block;" /></a> 
</div>
  <div class="sidebar1">
    <ul class="nav">
      <li><a href="#">Novedades</a></li>
      <li><a href="#">Compras</a></li>
      <li><a href="#">Socios</a></li>
      <li><a href="#">Contacto</a></li>
    </ul>
    <p><h4>M&aacute;ximas</h4></p>
    <p>&quot;No me gusta que me confundan. En mi pa&iacute;s hay grandes escritores y poetas. Yo, a veces, le arrimo el boch&iacute;n a la poes&iacute;a. Es s&oacute;lo una   arrimada. No me comparen. Pegar un grito en el cerro no es acercarse al   serm&oacute;n de la monta&ntilde;a&quot;.</p>
    <p>Atahualpa Yupanqui.</p>
    <p>&quot;Los peque&ntilde;os actos que se ejecutan son mejores que todos aquellos grandes que se planean&quot;.</p>
    <p>George Marshall.</p>
  </div><!-- End .sidebar1 -->
  <div class="content">
    <h1>Listado de Libros T&eacute;cnicos</h1>
    <iframe src="listado.php" scrolling="auto" height="250" width="600" frameborder="0"></iframe>
    <p><a href="#">Actualizar Listado</a></p>
    <p><h2>Ultimatums</h2></p>
    <p><strong>LONDRES, INGLATERRA (29/SEP/2013).-</strong> <a href="http://www.informador.com.mx/suplementos/2013/477782/6/bridget-jones-resucita.htm"><strong>Bridget Jones</strong></a> es una viuda con dos hijos en la tercera novela de <a href="http://www.informador.com.mx/cultura/2013/460915/6/loca-por-el-chico-la-tercera-novela-de-bridget-jones.htm"><strong>Helen Fielding</strong></a> "Mad about the Boy" (Loca por el chico), que saldr&aacute; a la venta el   pr&oacute;ximo 10 de octubre, seg&uacute;n avanza hoy el dominical brit&aacute;nico "Sunday   Times". </p>
    <p>El libro comienza cinco a&ntilde;os despu&eacute;s de la muerte de Darcy cuando Daniel   Cleaver, el exjefe de Bridget y ahora padrino de sus dos hijos, lucha   por sacar de la tristeza a Bridget Jones, el personaje interpretado en   el cine por la actriz Renee Zellweger. </p>
    <p><strong>GUADALAJARA, JALISCO (29/SEP/2013).-</strong> Hablar con   Santiago Gamboa es como toparse con las italianas te&ntilde;idas de rubio por   las calles de Roma, ser llevado de las narices por la calurosa y   especiada India, sentir la hostilidad francesa por las calles del Par&iacute;s   que, en sus palabras, s&oacute;lo es rom&aacute;ntico en la literatura.</p>
    <p>El autor de El s&iacute;ndrome de Ulises y Necr&oacute;polis, que conoce 68 pa&iacute;ses y   dice que le faltan porque Naciones Unidas tiene registrados 194, cuenta   que lleva siempre dos libretas a todos los viajes. Una m&aacute;s grande y otra   que quepa en el bolsillo, asegura que esa es una mejor forma de viajar.</p>
    <h2>&Uacute;ltimos Libros</h2>
    <div class="feedRSS">
      <?php foreach($pbs->getUpdateBooks() as $row) { ?>
      	<p><?php echo $row[0] ?> - <?php echo $row[1] ?> - <?php echo $row[2] ?></p>
      <?php } ?>
    </div>
  </div>
  <div class="sidebar2">
    <h4>Noticias</h4>
    <p>La XIII edici&oacute;n de la Feria Internacional del Libro de la Ciudad de   M&eacute;xico, se enfocar&aacute; en despertar el inter&eacute;s del p&uacute;blico hacia la lectura.</p></div>
  <div class="footer">
    <div class="footerCenter">Librer&iacute;a Online - E-Librer&iacute;a - &copy; Copyright 2013 - Job Systems Solutions</div>
  </div>
</div>
</body>
</html>

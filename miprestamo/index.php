<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Banco del Sud SA - Consultas Online</title>
<link href="css/styles1.css" rel="stylesheet" type="text/css">
</head>
<body>

<header><div class="boxHead">
<h1>Banco del Sud</h1><br>
<h2>Plazo Fijo - Consultas Online</h2>
</div>
</header>
<div class="boxMainBody">
<h3>Calcular Prestamo</h3>
    <div class="boxQuery">
    <form action="query.php" method="post">
    <table>
    <tr>
        <td class="fields">Nombre y Apellido:</td>
        <td><input type="text" name="txtNomApe" id="txtNomApe" required="required" placeholder="Nombre y Apellido" size="40" /></td>
    </tr>
    <tr>
        <td class="fields">Ingrese el Monto:</td>
        <td><input type="number" name="txtMonto" id="txtMonto" required="required" placeholder="10000" /></td>
    </tr>
    <tr>
        <td class="fields">Cantidad de Pagos:</td>
        <td><input type="number" name="txtPago" id="txtPago" required="required" placeholder="12" /></td>
    </tr>
    <tr>
        <td class="fields"></td>
        <td><input type="reset" value="Limpiar" />&nbsp;<input type="submit" name="btnSubmit" id="btnSubmit" value="Calcular" /></td>
    </tr>
    </table>
    </form>
    </div>
</div>
</div>
<foot><div class="boxFoot"><p class="copyright">Banco del Sud de la Rep&uacute;blica Argentina - Copyright &copy; 2013</p></div></foot>
</body>
</html>

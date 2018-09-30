<?php 

require_once 'datas.php';
$glibs=new Datas();

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5">
<title></title>
<link href="css/stslist.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- Listado de libros -->
<table>
	<tr>
    	<th class="th1">ISBN</th>
        <th class="th2">T&iacute;tulo</th>
        <th class="th3">Publicado</th>
        <th class="th4">Precio</th>
    </tr>
    <?php foreach($glibs->getListQuery() as $row) {?>
    <tr>
        <td><?php echo $row[0]; ?></td>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo "$ ".number_format($row[3], 2); ?></td>
    </tr>
    <?php } ?>
</table>
</body>
</html>
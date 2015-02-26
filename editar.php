<html>
<head>
</head>

<body>
<div id="main">
<?php

print_r($_POST);


$idReceta=$_POST["idReceta"];
$descripcion = $_POST ['descripcion'];
$total = $_POST ['total'];


echo "Edici&oacute;n en proceso ....  </br>";

include_once("RecetaCollector.php");
$RecetaCollectorObj = new UsuarioCollector();
$RecetaCollectorObj->updateReceta($idReceta,$descripcion, $total);

echo "id :".$idReceta." actualizado a:".$nombre." </br>";
?>
<div><a href="usuario-admin.php">Volver al Inicio</a></div>
</div>
</body>
</html>

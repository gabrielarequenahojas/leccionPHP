<html>
<head>
</head>

<body>
<div id="main">
<?php

$descripcion = $_POST ['descripcion'];
$total = $_POST ['total'];

//echo $peso."</br>";
//echo $objetivo."</br>";
//$valor="manuel";
//echo 'Hola ' . htmlspecialchars($nombre)."  ". htmlspecialchars($apellido) . ' !';


include_once("FacturaCollector.php");

$FacturaCollectorObj = new FacturaCollector();
$FacturaCollectorObj->createFactura($descripcion, $total);
echo "</br>";
echo "Factura Agregado </br>";
?>
<div><a href="factura-admin.php">Volver al Inicio</a></div>
</div>
</body>
</html>

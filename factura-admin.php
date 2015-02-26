<html>
<head>
</head>
<?php
include_once("FacturaCollector.php");
$FacturaCollectorObj = new FacturaCollector();
?>
<body>
<div id="main">
<table>
<tr><td><a href="nuevoFactura.php">Nuevo</a></td></tr>
<tr>
<td><strong>Id</strong></td>
<td><strong>Descripcion</strong></td>
<td><strong>Total</strong></td>


<?php
foreach ($FacturaCollectorObj->readFacturas() as $c){
 //print_r($c);
  echo "<tr>";
  echo "<td>".$c->getIdFactura() ."</td>";
  echo "<td>".$c->getDescripcion()."</td>";
  echo "<td>".$c->getTotal()."</td>";
  

  echo "<td><a href='formularioFacturaEditar.php?idFactura=".$c->getIdFactura()."'> Editar</a></td>";
 // if ($c->getIdUsuario() > 1)
  	echo "<td><a href='eliminar.php?idFactura=".$c->getIdFactura()."'> Eliminar</a></td>"; 
  echo "</tr>"; 
}
?>

<tr><td colspan='11'><a href='../administracion.php'>Regresar a Perfil de Administrador</a></td></tr>
</table>
</div>
</body>
</html>
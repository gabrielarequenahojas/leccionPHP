<html>
<head>
</head>
<?php
include_once("UsuarioCollector.php");
$UsuarioCollectorObj = new UsuarioCollector();
?>
<body>
<div id="main">
<table>
<tr><td><a href="nuevoUsuario.php">Nuevo</a></td></tr>
<tr>
<td><strong>Id</strong></td>
<td><strong>Nombre</strong></td>
<td><strong>Apellido</strong></td>
<td><strong>Email</strong></td>
<td><strong>Contrase&ntilde;a</strong></td>
<td><strong>G&eacute;nero</strong></td>
<td><strong>Actividad f&iacute;sica</strong></td>
<td><strong>Edad</strong></td>
<td><strong>Estatura</strong></td>
<td><strong>Peso</strong></td>
<td><strong>Objetivo</strong></td></tr>

<?php
foreach ($UsuarioCollectorObj->readUsuarios() as $c){
 //print_r($c);
  echo "<tr>";
  echo "<td>".$c->getIdUsuario() ."</td>";
  echo "<td>".$c->getNombre()."</td>";
  echo "<td>".$c->getApellido()."</td>";
  echo "<td>".$c->getEmail()."</td>";
  echo "<td>".$c->getContrasena()."</td>";
  echo "<td>".$c->getGenero()."</td>";
  echo "<td>".$c->getActfisica()."</td>";
  echo "<td>".$c->getEdad()."</td>";
  echo "<td>".$c->getEstatura()."</td>";
  echo "<td>".$c->getPeso()."</td>";
  echo "<td>".$c->getObjetivo()."</td>";

  echo "<td><a href='formularioUsuarioEditar.php?idUsuario=".$c->getIdUsuario()."'> Editar</a></td>";
 // if ($c->getIdUsuario() > 1)
  	echo "<td><a href='eliminar.php?idUsuario=".$c->getIdUsuario()."'> Eliminar</a></td>"; 
  echo "</tr>"; 
}
?>

<tr><td colspan='11'><a href='../administracion.php'>Regresar a Perfil de Administrador</a></td></tr>
</table>
</div>
</body>
</html>
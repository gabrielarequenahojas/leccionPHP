<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Editar usuario</title>
</head>
<body>

<?php
$idUsuario=$_GET["idUsuario"];
//echo "xxxxxxx".$idUsuario;
//$id=11;
include_once("UsuarioCollector.php");
include_once("Usuario.php");
$UsuarioCollectorObj = new UsuarioCollector();
$ObjUsuario = $UsuarioCollectorObj->showUsuario($idUsuario);

print_r($ObjUsuario);
?>
<h2>Editar Objeto Usuario </h2>
<form action="editar.php" method="post" >
<p>
Id: <input type="text" name="idUsuario" value="<?php echo $ObjUsuario->getIdUsuario(); ?>" readonly />
</p>

<p>
Nombre: <input type="text" name="nombre"  value="<?php echo $ObjUsuario->getNombre(); ?>" autofocus required />
</p>
<p>
Apellido: <input type="text" name="apellido" value="<?php echo $ObjUsuario->getApellido(); ?>" autofocus required /></br>
</p>
<p>
Email: <input type="text" name="email" value="<?php echo $ObjUsuario->getEmail(); ?>" autofocus required /></br>
</p>
<p>
Contrase&nacute;a: <input type="text" name="contrasena" value="<?php echo $ObjUsuario->getContrasena(); ?>" autofocus required /></br>
</p>
<p>
G&eacute;nero:</br> 
Masculino<input type="radio" name="genero" value="m" 
<?php 
if ($ObjUsuario->getGenero() == 'm') {
	echo "checked";
}
?>
>
Femenino<input type="radio" name="genero" value="f"
<?php 
if ($ObjUsuario->getGenero() == 'f') {
	echo "checked";
}
?>
></br>

</p>
<p>
Actividad Fisica: </br>
Ligero<input type="radio" name="actfisica" value="l"
<?php 
if ($ObjUsuario->getActfisica() == 'l') {
	echo "checked";
}
?>
>
Moderado<input type="radio" name="actfisica" value="m"
<?php 
if ($ObjUsuario->getActfisica() == 'm') {
	echo "checked";
}
?>
>
Alta<input type="radio" name="actfisica" value="a"
<?php 
if ($ObjUsuario->getActfisica() == 'a') {
	echo "checked";
}
?>
>
</br>
</p>
<p>
Edad: <input type="text" name="edad" value="<?php echo $ObjUsuario->getEdad(); ?>" autofocus required /></br>
</p>
<p>
Estatura: <input type="text" name="estatura" value="<?php echo $ObjUsuario->getEstatura(); ?>" autofocus required /></br>
</p>
<p>
Peso: <input type="text" name="peso" value="<?php echo $ObjUsuario->getPeso(); ?>" autofocus required /></br>
</p>
<p>
Objetivo: <input type="text" name="objetivo" value="<?php echo $ObjUsuario->getObjetivo(); ?>" autofocus required /></br>
</p>

</p>

<a href="usuario-admin.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>

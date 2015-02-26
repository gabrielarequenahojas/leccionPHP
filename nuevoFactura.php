<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario Usuario</title>
</head>
<body>
<form action="insert.php" method="post" >
<p>
Nombre: <input type="text" name="nombre" autofocus required /></br>
Apellido: <input type="text" name="apellido" autofocus required /></br>
Email: <input type="text" name="email" autofocus required /></br>
Contrase&nacute;a: <input type="text" name="contrasena" autofocus required /></br>
G&eacute;nero:</br> 
Masculino<input type="radio" name="genero" value="m">
Femenino<input type="radio" name="genero" value="f"></br>
Actividad Fisica: </br>
Ligero<input type="radio" name="actfisica" value="l">
Moderado<input type="radio" name="actfisica" value="m">
Alta<input type="radio" name="actfisica" value="a"></br>
Edad: <input type="text" name="edad" autofocus required /></br>
Estatura: <input type="text" name="estatura" autofocus required /></br>
Peso: <input type="text" name="peso" autofocus required /></br>
Objetivo: <input type="text" name="objetivo" autofocus required /></br>


</p>
<input type="submit" value="Grabar" />

</form>

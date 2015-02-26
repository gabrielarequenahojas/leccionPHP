<html>
<head>
</head>

<body>
<div id="main">
<?php
$nombre = $_POST ['nombre'];
$apellido = $_POST ['apellido'];
$email = $_POST ['email'];
$contrasena = $_POST ['contrasena'];
$genero = $_POST ['genero'];
$actfisica = $_POST ['actfisica'];
$edad = $_POST ['edad'];
$estatura = $_POST ['estatura'];
$peso = $_POST ['peso'];
$objetivo = $_POST ['objetivo'];

//echo $peso."</br>";
//echo $objetivo."</br>";
//$valor="manuel";
echo 'Hola ' . htmlspecialchars($nombre)."  ". htmlspecialchars($apellido) . ' !';


include_once("UsuarioCollector.php");

$UsuarioCollectorObj = new UsuarioCollector();
$UsuarioCollectorObj->createUsuario($nombre, $apellido, $email, $contrasena, $genero, $actfisica, $edad, $estatura, $peso, $objetivo);
echo "</br>";
echo "Usuario Agregado </br>";
?>
<div><a href="usuario-admin.php">Volver al Inicio</a></div>
</div>
</body>
</html>

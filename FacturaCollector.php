<?php

include_once('Usuario.php');
include_once('Collector.php');

class UsuarioCollector extends Collector
{
  
  function showUsuario($idUsuario) {
    $row = self::$db->getRows("SELECT * FROM usuario where idusuario= ? ", array("{$idUsuario}")); 
    $ObjUsuario = new Usuario($row[0]{'idusuario'},$row[0]{'nombre'},$row[0]{'apellido'},
                  $row[0]{'email'}, $row[0]{'contrasena'}, $row[0]{'genero'}, $row[0]{'actfisica'},
                  $row[0]{'edad'}, $row[0]{'estatura'}, $row[0]{'peso'}, $row[0]{'objetivo'});
    return $ObjUsuario;
  }

  function createUsuario($nombre, $apellido, $email, $contrasena, $genero, $actfisica, $edad, $estatura, $peso, $objetivo) {    
    $insertrow = self::$db->insertRow("INSERT INTO clubNutricion.usuario (idusuario, nombre, apellido, email, contrasena, genero, actfisica, edad, estatura, peso, objetivo)
                                      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", array(null, "{$nombre}", "{$apellido}", "{$email}", "{$contrasena}", "{$genero}", "{$actfisica}", "{$edad}", "{$estatura}", "{$peso}", "{$objetivo}"));
  }  

  function readUsuarios() {
    $rows = self::$db->getRows("SELECT * FROM usuario ");        
    $arrayUsuario= array();        
    foreach ($rows as $c){
      //print_r($c);
      $aux = new Usuario($c{'idusuario'},$c{'nombre'}, $c{'apellido'}, $c{'email'}, $c{'contrasena'}, $c{'genero'}, $c{'actfisica'}, $c{'edad'}, $c{'estatura'}, $c{'peso'}, $c{'objetivo'});
      array_push($arrayUsuario, $aux);
    }
      //print_r($arrayUsuario);
    
    return $arrayUsuario;        
  }
  
  function updateUsuario($idUsuario, $nombre, $apellido, $email, $contrasena, $genero, $actfisica, $edad, $estatura, $peso, $objetivo) {

    echo "$idUsuario. $nombre. $apellido. $email. $contrasena. $genero. $actfisica. $edad. $estatura. $peso. $objetivo";
    $insertrow = self::$db->updateRow("UPDATE clubNutricion.usuario SET usuario.nombre = ?, usuario.apellido = ?, usuario.email = ?, 
                      usuario.contrasena = ?, usuario.genero = ?, usuario.actfisica = ?, usuario.edad = ?, usuario.estatura = ?, 
                      usuario.peso = ?, usuario.objetivo = ? WHERE usuario.idusuario = ? ", array("{$nombre}", "{$apellido}",
                      "{$email}", "{$contrasena}", "{$genero}", "{$actfisica}", "{$edad}", "{$estatura}", "{$peso}", "{$objetivo}",$idUsuario));
  }  

  function deleteUsuario($idUsuario) {    
    $deleterow = self::$db->deleteRow("DELETE FROM clubNutricion.usuario WHERE idusuario= ?", array("{$idUsuario}"));
  }  




}
?>


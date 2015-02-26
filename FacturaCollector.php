<?php

include_once('Factura.php');
include_once('Collector.php');

class FacturaCollector extends Collector
{
  
  function showFactura($idFactura) {
    $row = self::$db->getRows("SELECT * FROM factura where idfactura= ? ", array("{$idFactura}")); 
    $ObjFactura = new Usuario($row[0]{'idfactura'},$row[0]{'descripcion'},$row[0]{'total'});
    return $ObjFactura;
  }

  function createFactura($descripcion, $total) {    
    $insertrow = self::$db->insertRow("INSERT INTO factura.factura (idusuario, descripcion, total)
                                      VALUES (?, ?, ?)", array(null, "{$descripcion}", "{$total}"));
  }  

  function readFacturas() {
    $rows = self::$db->getRows("SELECT * FROM factura ");        
    $arrayFactura= array();        
    foreach ($rows as $c){
      //print_r($c);
      $aux = new Factura($c{'idfactura'},$c{'descripcion'}, $c{'total'});
      array_push($arrayFactura, $aux);
    }
      //print_r($arrayUsuario);
    
    return $arrayFactura;        
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


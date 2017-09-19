<?php

include_once('Adopcion.php');
include_once("../Collector.php");

class adopcionCollector extends Collector
{
  
//mostrar adopciones
  function showAdopciones() {
    $rows = self::$db->getRows("SELECT * FROM adopcion");        
    $arrayanimals= array();        
    foreach ($rows as $c){
      $aux = new Adopcion($c{'id_adopcion'},$c{'id_cliente'},$c{'id_mascota'},$c{'fecha_adopcion'});
      array_push($arrayanimals, $aux);
    }
    return $arrayanimals;        
  }
  
//eliminar adopcion
  function deleteAdopcion($id_adopcion) {
    $rows = self::$db->deleteRow("DELETE FROM adopcion WHERE id_adopcion= ? ", array("{$id_adopcion}"));        
  }   

//insertar adopcion
  function createAdopcion($id_cliente,$id_mascota,$fecha_adopcion) {
    $rows = self::$db->insertRow("INSERT INTO adopcion (id_cliente, id_mascota, fecha_adopcion) VALUES (?,?,?) ", array("{$id_cliente}","{$id_mascota}","{$fecha_adopcion}"));        
  } 
    
//actualizar adopcion
  function updateAdopcion($id_adopcion,$id_cliente,$id_mascota,$fecha_adopcion) {
    $rows = self::$db->insertRow("UPDATE adopcion SET id_cliente= ? , id_mascota= ? , fecha_adopcion= ? WHERE id_adopcion= ? ", array("{$id_cliente}","{$id_mascota}","{$fecha_adopcion}",$id_adopcion));        
  }

}
?>

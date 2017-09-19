<?php

include_once('ciudad.php');
include_once("../Collector.php");

class ciudadCollector extends Collector
{
  

  function showciudad() {
    $rows = self::$db->getRows("SELECT * FROM ciudad");        
    $arrayciudad= array();        
    foreach ($rows as $c){
      $aux = new ciudad($c{'id_ciudad'},$c{'nombre'});
      array_push($arrayciudad, $aux);
    }
    return $arrayciudad;        
  }
  
//eliminar 
  function deleteciudad($id_ciudad) {
    $rows = self::$db->deleteRow("DELETE FROM ciudad WHERE id_ciudad= ? ", array("{$id_ciudad}"));        
  }   

//insertar 
 function createciudad($nombre) {
   $insertrow = self::$db->insertRow("INSERT INTO public.ciudad (nombre) VALUES (?) ", array("{$nombre}"));        
 }
    
//actualizar 
  function updateciudad($id_ciudad,$nombre) {
    $rows = self::$db->insertRow("UPDATE ciudad SET nombre= ? WHERE id_ciudad= ? ", array("{$id_ciudad}","{$nombre}"));        
  }
    

}
?>

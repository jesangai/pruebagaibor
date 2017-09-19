<?php

include_once('museo.php');
include_once("../Collector.php");

class museoCollector extends Collector
{
  

  function showmuseo() {
    $rows = self::$db->getRows("SELECT * FROM museo");        
    $arraymuseo= array();        
    foreach ($rows as $c){
      $aux = new museo($c{'id_museo'},$c{'nombre'},$c{'id_ciudad'});
      array_push($arraymuseo, $aux);
    }
    return $arraymuseo;        
  }
  
//eliminar 
  function deletemuseo($id_museo) {
    $rows = self::$db->deleteRow("DELETE FROM museo WHERE id_museo= ? ", array("{$id_museo}"));        
  }   

//insertar 
 function createmuseo($nombre,$id_ciudad) {
   $rows = self::$db->insertRow("INSERT INTO public.museo (nombre, id_ciudad) VALUES (?,?) ", array("{$nombre}","{$id_ciudad}"));        
 }
    

}
?>

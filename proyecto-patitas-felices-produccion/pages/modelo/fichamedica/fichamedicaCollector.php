<?php

include_once('fichamedica.php');
include_once("../Collector.php");

class fichamedicaCollector extends Collector
{
  
//mostrar mascotas
  function showfichamedica() {
    $rows = self::$db->getRows("SELECT * FROM fichamedica");        
    $arrayfichamedica= array();        
    foreach ($rows as $c){
      $aux = new fichamedica($c{'id_fichamedica'},$c{'id_mascota'},$c{'detalle'});
      array_push($arrayfichamedica, $aux);
    }
    return $arrayfichamedica;        
  }
  
//eliminar mascota
  function deletefichamedica($id_fichamedica) {
    $rows = self::$db->deleteRow("DELETE FROM fichamedica WHERE id_fichamedica= ? ", array("{$id_fichamedica}"));        
  }   

//insertar mascota
  function createfichamedica($id_mascota,$detalle) {
    $rows = self::$db->insertRow("INSERT INTO public.fichamedica (id_mascota, detalle) VALUES (?,?) ", array("{$id_mascota}","{$detalle}"));        
  } 
    
//actualizar mascota
  function updatefichamedica($id_fichamedica,$id_mascota,$detalle) {
    $rows = self::$db->insertRow("UPDATE fichamedica SET id_mascota= ? ,detalle= ?  WHERE id_fichamedica= ? ", array("{$id_mascota}","{$detalle}","{$id_fichamedica}"));        
  }
    

}
?>

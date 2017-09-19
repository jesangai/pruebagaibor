<?php

include_once('estado.php');
include_once('../Collector.php');

class estadoCollector extends Collector
{
  
  function showEstados() {
    $rows = self::$db->getRows("SELECT * FROM estado ");        
    $arrayEstado= array();        
    foreach ($rows as $c){
      $aux = new Estado($c{'id_estado'},$c{'descripcion'});
      array_push($arrayEstado, $aux);
    }
    return $arrayEstado;        
  }

 function showEstado($id_estado) {
   $row = self::$db->getRows("SELECT * FROM estado where id_estado= ?", array("{$id_estado}"));        
   $ObjAdmin = new Estado($row[0]{'id_estado'},$row[0]{'descripcion'});
   return $ObjAdmin;   
 }

function updateEstado($id_estado,$descripcion) {
   $insertrow = self::$db->updateRow("UPDATE public.estado SET descripcion = ? WHERE id_estado= ? ", array("{$descripcion}","$id_estado"));        
 }

function deleteEstado($id_estado) {
   $insertrow = self::$db->deleteRow("DELETE FROM estado WHERE id_estado= ? ", array("{$id_estado}"));        
 }


function createEstado($descripcion) {
   $insertrow = self::$db->insertRow("INSERT INTO public.estado (descripcion) VALUES (?) ", array("{$descripcion}"));        
 }
}
?>


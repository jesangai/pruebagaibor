<?php

include_once('Rol.php');
include_once('../Collector.php');

class RolCollector extends Collector
{
  
  function showRols() {
    $rows = self::$db->getRows("SELECT * FROM rol ");        
    $arrayRol= array();        
    foreach ($rows as $c){
      $aux = new Rol($c{'id_rol'},$c{'descripcion'});
      array_push($arrayRol, $aux);
    }
    return $arrayRol;        
  }

 function showRol($id_rol) {
   $row = self::$db->getRows("SELECT * FROM rol where id_rol= ?", array("{$id_rol}"));        
   $ObjRol = new Rol($row[0]{'id_rol'},$row[0]{'descripcion'});
   return $ObjRol;   
 }

function updateRol($id_rol,$descripcion) {
   $insertrow = self::$db->updateRow("UPDATE public.rol SET descripcion = ? WHERE id_rol= ? ", array("{$descripcion}","$id_rol"));        
 }

function deleteRol($id_rol) {
   $insertrow = self::$db->deleteRow("DELETE FROM rol WHERE id_rol= ? ", array("{$id_rol}"));        
 }


function createRol($descripcion) {
   $insertrow = self::$db->insertRow("INSERT INTO public.rol (descripcion) VALUES (?) ", array("{$descripcion}"));        
 }
}
?>


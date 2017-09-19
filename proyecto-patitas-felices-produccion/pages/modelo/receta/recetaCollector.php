<?php

include_once('receta.php');
include_once('../Collector.php');

class recetaCollector extends Collector
{
  
  function showRecetas() {
    $rows = self::$db->getRows("SELECT * FROM receta ");        
    $arrayReceta= array();        
    foreach ($rows as $c){
      $aux = new Receta($c{'id_receta'},$c{'id_consulta'},$c{'descripcion'},$c{'cantidad'});
      array_push($arrayReceta, $aux);
    }
    return $arrayReceta;        
  }

 function showReceta($id_receta) {
   $row = self::$db->getRows("SELECT * FROM receta where id_receta= ?", array("{$id_receta}"));
   $ObjReceta = new Receta($row[0]{'id_receta'},$row[0]{'id_consulta'},$row[0]{'descripcion'},$row[0]{'cantidad'});
   return $ObjReceta;   
 }

function updateReceta($id_receta, $id_consulta, $descripcion, $cantidad) {
   $insertrow = self::$db->updateRow("UPDATE public.receta SET descripcion = ?, cantidad = ? ,id_consulta=? WHERE id_receta= ?" , array("{$descripcion}","{$cantidad}","{$id_consulta}","{$id_receta}"));  
 }



function deleteReceta($id_receta) {
   $insertrow = self::$db->deleteRow("DELETE FROM receta WHERE id_receta= ? ", array("{$id_receta}"));        
 }


function createReceta($id_consulta, $descripcion, $cantidad) {
   $insertrow = self::$db->insertRow("INSERT INTO public.receta (id_consulta, descripcion, cantidad) VALUES (?,?,?) ", array("{$id_consulta}", "{$descripcion}", "{$cantidad}"));        
 }
}
?>


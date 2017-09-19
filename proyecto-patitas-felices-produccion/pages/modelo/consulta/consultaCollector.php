<?php

include_once('consulta.php');
include_once("../Collector.php");

class consultaCollector extends Collector
{

  function showconsulta() {
    $rows = self::$db->getRows("SELECT * FROM consulta");        
    $arrayconsulta= array();        
    foreach ($rows as $c){
      $aux = new consulta($c{'id_consulta'},$c{'id_reserva'},$c{'hora_consulta'},$c{'descripcion'});
      array_push($arrayconsulta, $aux);
    }
    return $arrayconsulta;        
  }
  

  function deleteconsulta($id_consulta) {
    $rows = self::$db->deleteRow("DELETE FROM consulta WHERE id_consulta= ? ", array("{$id_consulta}"));        
  }   


  function createconsulta($id_reserva,$hora_consulta,$descripcion) {
    $rows = self::$db->insertRow("INSERT INTO public.consulta (id_reserva, hora_consulta ,descripcion) VALUES (?,?,?) ", array("{$id_reserva}","{$hora_consulta}","{$descripcion}"));        
  } 

  function updateconsulta($id_consulta,$id_reserva,$hora_consulta,$descripcion) {
    $rows = self::$db->insertRow("UPDATE consulta SET id_reserva= ? ,hora_consulta= ? ,descripcion= ?  WHERE id_consulta= ? ", array("{$id_reserva}","{$hora_consulta}","{$descripcion}","{$id_consulta}"));        
  }
    

}
?>

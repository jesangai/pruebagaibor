<?php

include_once('reserva.php');
include_once("../Collector.php");

class reservaCollector extends Collector
{
  
//mostrar 
  function showreserva() {
    $rows = self::$db->getRows("SELECT * FROM reserva");        
    $arrayreserva= array();        
    foreach ($rows as $c){
      $aux = new reserva($c{'id_reserva'},$c{'id_cliente'},$c{'fecha_consulta'},$c{'id_veterinario'});
      array_push($arrayreserva, $aux);
    }
    return $arrayreserva;        
  }
  
//eliminar 
  function deletereserva($id_reserva) {
    $rows = self::$db->deleteRow("DELETE FROM reserva WHERE id_reserva= ? ", array("{$id_reserva}"));        
  }   

//insertar 
  function createreserva($id_cliente,$id_veterinario,$fecha_consulta) {
$rows = self::$db->insertRow("INSERT INTO public.reserva (id_cliente, id_veterinario,fecha_consulta ) VALUES (?,?,?) ", array("{$id_cliente}","{$id_veterinario}","{$fecha_consulta}"));        
  } 
    
//actualizar 
  function updatereserva($id_reserva,$id_cliente,$id_veterinario,$fecha) {
    $rows = self::$db->insertRow("UPDATE reserva SET id_cliente= ? ,fecha_consulta= ?,id_veterinario = ? WHERE id_reserva= ? ", array("{$id_cliente}","{$fecha}","{$id_veterinario}","{$id_reserva}"));        
  }
    

}
?>

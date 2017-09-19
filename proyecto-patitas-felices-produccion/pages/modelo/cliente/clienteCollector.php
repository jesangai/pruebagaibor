<?php

include_once('Cliente.php');
include_once("../Collector.php");

class clienteCollector extends Collector
{
  
//mostrar clientes
  function showClientes() {
    $rows = self::$db->getRows("SELECT * FROM cliente");        
    $arrayanimals= array();        
    foreach ($rows as $c){
      $aux = new Cliente($c{'id_cliente'},$c{'id_persona'},$c{'fecha_registro'});
      array_push($arrayanimals, $aux);
    }
    return $arrayanimals;        
  }
  
//eliminar clientes
  function deleteCliente($id_cliente) {
    $rows = self::$db->deleteRow("DELETE FROM cliente WHERE id_cliente= ? ", array("{$id_cliente}"));        
  }   

//insertar clientes
  function createCliente($id_persona,$fecha_registro) {
    $rows = self::$db->insertRow("INSERT INTO cliente (id_persona,fecha_registro) VALUES (?,?) ", array("{$id_persona}", "{$fecha_registro}"));        
  } 
    
//actualizar clientes
  function updateCliente($id_cliente,$id_persona,$fecha_registro) {
    $rows = self::$db->insertRow("UPDATE cliente SET fecha_registro= ? , id_persona= ? WHERE id_cliente= ? ", array("{$fecha_registro}","{$id_persona}",$id_cliente));        
  }

}
?>

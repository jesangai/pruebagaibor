<?php

include_once('Administrador.php');
include_once('../Collector.php');

class AdministradorCollector extends Collector
{
  
  function showAdmins() {
    $rows = self::$db->getRows("SELECT * FROM administrador ");        
    $arrayAdmin= array();        
    foreach ($rows as $c){
      $aux = new Administrador($c{'id_administrador'},$c{'id_persona'});
      array_push($arrayAdmin, $aux);
    }
    return $arrayAdmin;        
  }

 function showAdmin($id_administrador) {
   $row = self::$db->getRows("SELECT * FROM administrador where id_administrador= ?", array("{$id_administrador}"));        
   $ObjAdmin = new Administrador($row[0]{'id_administrador'},$row[0]{'id_persona'});
   return $ObjAdmin;   
 }

function updateAdmin($id_administrador,$id_persona) {
   $insertrow = self::$db->updateRow("UPDATE public.administrador SET id_persona = ? WHERE id_administrador= ? ", array("{$id_persona}","$id_administrador"));        
 }

function deleteAdmin($id_administrador) {
   $insertrow = self::$db->deleteRow("DELETE FROM administrador WHERE id_administrador= ? ", array("{$id_administrador}"));        
 }


function createAdmin($id_persona) {
   $insertrow = self::$db->insertRow("INSERT INTO public.administrador (id_persona) VALUES (?) ", array("{$id_persona}"));        
 }
}
?>


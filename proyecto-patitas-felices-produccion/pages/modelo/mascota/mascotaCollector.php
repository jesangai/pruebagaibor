<?php

include_once('Mascota.php');
include_once("../Collector.php");

class mascotaCollector extends Collector
{
  
//mostrar mascotas
  function showMascotas() {
    $rows = self::$db->getRows("SELECT * FROM mascota");        
    $arrayanimals= array();        
    foreach ($rows as $c){
      $aux = new Mascota($c{'id_mascota'},$c{'nombre'},$c{'raza'},$c{'color'},$c{'sexo'},$c{'fecha_nacimiento'},$c{'imagen'},$c{'id_estado'});
      array_push($arrayanimals, $aux);
    }
    return $arrayanimals;        
  }
  
//eliminar mascota
  function deleteMascota($id_mascota) {
    $rows = self::$db->deleteRow("DELETE FROM mascota WHERE id_mascota= ? ", array("{$id_mascota}"));        
  }   

//insertar mascota
  function createMascota($nombre,$raza,$color,$sexo,$fecha_nacimiento,$imagen,$id_estado) {
    $rows = self::$db->insertRow("INSERT INTO mascota (nombre, raza, color, sexo, fecha_nacimiento, imagen, id_estado) VALUES (?,?,?,?,?,?,?) ", array("{$nombre}","{$raza}","{$color}","{$sexo}","{$fecha_nacimiento}","{$imagen}","{$id_estado}"));        
  } 
    
//actualizar mascota
  function updateMascota($id_mascota,$nombre,$raza,$color,$sexo,$fecha_nacimiento,$imagen,$id_estado) {
    $rows = self::$db->insertRow("UPDATE mascota SET nombre= ? , raza= ? , color= ? , sexo= ? , fecha_nacimiento= ? , imagen= ? , id_estado= ?  WHERE id_mascota= ? ", array("{$nombre}","{$raza}","{$color}","{$sexo}","{$fecha_nacimiento}","{$imagen}","{$id_estado}",$id_mascota));        
  }

}
?>

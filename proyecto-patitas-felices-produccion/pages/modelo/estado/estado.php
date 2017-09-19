<?php

class estado
{
    private $id_estado;
    private $descripcion;
    
    
     function __construct($id_estado,$descripcion) {

 	    $this->id_estado = $id_estado;
       $this->descripcion = $descripcion;
     }


    function setIdEstado($id_estado){
       $this->id_estado = $id_estado;
     } 


     function getIdEstado(){
       return $this->id_estado;
     } 


      function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 

      function getDescripcion(){
       return $this->descripcion;
      } 

      
}

?>

<?php

class Rol
{
    private $id_rol;
    private $descripcion;
    

    function __construct($id_rol, $descripcion) {
       $this->id_rol = $id_rol;
       $this->descripcion = $descripcion;
	
     }

     function setIdRol($id_rol){
       $this->id_rol = $id_rol;
     } 
     function getIdRol(){
       return $this->id_rol;
     } 
     function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getDescripcion(){
       return $this->descripcion;
     } 
}

?> 

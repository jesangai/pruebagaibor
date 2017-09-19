<?php

class Adopcion
{
    private $id_adopcion;
    private $id_cliente;
    private $id_mascota;
    private $fecha_adopcion;
    
     function __construct($id_adopcion, $id_cliente, $id_mascota, $fecha_adopcion) {
       $this->id_adopcion = $id_adopcion;
       $this->id_cliente = $id_cliente;
       $this->id_mascota = $id_mascota;
       $this->fecha_adopcion = $fecha_adopcion;
     }

     function setId_adopcion($id_adopcion){
       $this->id_adopcion = $id_adopcion;
     } 
     function getId_adopcion(){
       return $this->id_adopcion;
     }    
     function setId_cliente($id_cliente){
       $this->id_cliente = $id_cliente;
     } 
     function getId_cliente(){
       return $this->id_cliente;
     } 
     function setId_mascota($id_mascota){
       $this->id_mascota = $id_mascota;
     } 
     function getId_mascota(){
       return $this->id_mascota;
     }
     function setFecha_adopcion($fecha_adopcion){
       $this->fecha_adopcion = $fecha_adopcion;
     } 
     function getFecha_adopcion(){
       return $this->fecha_adopcion;
     } 
}

?> 

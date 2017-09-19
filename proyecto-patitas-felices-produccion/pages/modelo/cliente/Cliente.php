<?php

class Cliente
{
    private $id_cliente;
    private $id_persona;
    private $fecha_registro;
    
     function __construct($id_cliente, $id_persona, $fecha_registro) {
       $this->id_cliente = $id_cliente;
       $this->id_persona = $id_persona;
       $this->fecha_registro = $fecha_registro;
     }
    
     function setId_cliente($id_cliente){
       $this->id_cliente = $id_cliente;
     } 
     function getId_cliente(){
       return $this->id_cliente;
     } 
     function setId_persona($id_persona){
       $this->id_persona = $id_persona;
     } 
     function getId_persona(){
       return $this->id_persona;
     }
     function setFecha_registro($fecha_registro){
       $this->fecha_registro = $fecha_registro;
     } 
     function getFecha_registro(){
       return $this->fecha_registro;
     } 

}

?> 

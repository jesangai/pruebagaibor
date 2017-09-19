<?php

class consulta
{

    private $id_consulta;
    private $id_reserva;
    private $hora;
    private $detalle;
    
    
     function __construct($id_consulta,$id_reserva,$hora_consulta,$descripcion) {

 	$this->id_consulta = $id_consulta;
       $this->id_reserva = $id_reserva;
       $this->hora_consulta = $hora_consulta;
	$this->descripcion = $descripcion;
     }


    function setId_consulta($id_consulta){
       $this->id_consulta = $id_consulta;
     } 
     function getId_consulta(){
       return $this->id_consulta;
     } 

function setId_reserva($id_reserva){
       $this->id_reserva = $id_reserva;
     } 
     function getId_reserva(){
       return $this->id_reserva;
     } 

function setHora_consulta($hora_consulta){
       $this->hora_consulta = $hora_consulta;
     } 
     function getHora_consulta(){
       return $this->hora_consulta;
     } 

     function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getDescripcion(){
	return $this->descripcion;

	}

    
     

}

?> 

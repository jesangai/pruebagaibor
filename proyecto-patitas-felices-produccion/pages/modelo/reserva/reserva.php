<?php

class reserva
{

    private $id_reserva;
    private $id_cliente;
    private $fecha_consulta;
    private $id_veterinario;
    
    
     function __construct($id_reserva,$id_cliente,$fecha_consulta,$id_veterinario) {

 	$this->id_reserva = $id_reserva;
       $this->id_cliente = $id_cliente;
       $this->fecha_consulta = $fecha_consulta;
	$this->id_veterinario = $id_veterinario;
     }


    function setId_reserva($id_reserva){
       $this->id_reserva = $id_reserva;
     } 
     function getId_reserva(){
       return $this->id_reserva;
     } 

function setId_id_cliente($id_cliente){
       $this->id_cliente = $id_cliente;
     } 
     function getId_cliente(){
       return $this->id_cliente;
     } 

function setHora_consulta($hora_consulta){
       $this->hora_consulta = $hora_consulta;
     } 
     function getHora_consulta(){
       return $this->hora_consulta;
     } 

     function setFecha_consulta($fecha_consulta){
       $this->fecha_consulta = $fecha_consulta;
     } 
     function getFecha_consulta(){
	return $this->fecha_consulta;

	}


function setId_veterinario($id_veterinario){
       $this->id_veterinario = $id_veterinario;
     } 
     function getId_veterinario(){
	return $this->id_veterinario;

	}

    
     

}

?>

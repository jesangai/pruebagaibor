
<?php

class veterinario
{

    private $id_veterinario;
    private $id_persona;
    private $titulo;
    private $ocupacion;
    
    
     function __construct($id_veterinario,$id_persona,$titulo,$ocupacion) {

 	   $this->id_veterinario = $id_veterinario;
       $this->id_persona = $id_persona;
       $this->titulo = $titulo;
	   $this->ocupacion = $ocupacion;
     }

    function setId_veterinario($id_veterinario){
       $this->id_veterinario = $id_veterinario;
     } 
     function getId_veterinario(){
       return $this->id_veterinario;
     } 

    function setId_persona($id_persona){
       $this->id_persona = $id_persona;
     } 
     function getId_persona(){
       return $this->id_persona;
     } 

function setTitulo($titulo){
       $this->titulo = $titulo;
     } 
     function getTitulo(){
       return $this->titulo;
     } 

     function setOcupacion($ocupacion){
       $this->ocupacion = $ocupacion;
     } 
     function getOcupacion(){
       return $this->ocupacion;
     } 
     

}

?>

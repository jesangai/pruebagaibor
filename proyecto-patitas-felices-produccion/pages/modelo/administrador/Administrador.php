<?php

class Administrador
{
    private $id_administrador;
    private $id_persona;
    

    function __construct($id_administrador, $id_persona) {
       $this->id_administrador = $id_administrador;
       $this->id_persona = $id_persona;
	
     }

     function setIdAdministrador($id_administrador){
       $this->id_administrador = $id_administrador;
     } 
     function getIdAdministrador(){
       return $this->id_administrador;
     } 
     function setIdPersona($id_persona){
       $this->id_persona = $id_persona;
     } 
     function getIdPersona(){
       return $this->id_persona;
     } 
}

?> 

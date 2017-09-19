<<?php
class ciudad
{
    private $id_ciudad;
    private $nombre;
    
   
    
     function __construct($id_ciudad, $nombre) {
        $this->id_ciudad = $id_ciudad;
        $this->nombre = $nombre;
 	
     }
function setId_ciudad($id_ciudad){
       $this->id_ciudad = $id_ciudad;
     } 
     function getId_ciudad(){
       return $this->id_ciudad;
     } 
    
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 


}
?> 

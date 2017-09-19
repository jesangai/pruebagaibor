<<?php
class museo
{
    private $id_museo;
    private $nombre;
	private $id_ciudad;
    
   
    
     function __construct($id_museo, $nombre, $id_ciudad) {
        $this->id_museo = $id_museo;
        $this->nombre = $nombre;
       $this->id_ciudad = $id_ciudad;
 	
     }
function setId_museo($id_museo){
       $this->id_museo = $id_museo;
     } 
     function getId_museo(){
       return $this->id_museo;
     } 
    
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 

function setId_ciudad($id_ciudad){
       $this->id_ciudad = $id_ciudad;
     } 
     function getId_ciudad(){
       return $this->id_ciudad;
     } 

}
?> 

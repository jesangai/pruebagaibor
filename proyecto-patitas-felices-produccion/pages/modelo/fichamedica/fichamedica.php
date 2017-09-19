<<?php
class fichamedica
{
    private $id_fichamedica;
    private $id_mascota;
    private $detalle;
   
    
     function __construct($id_fichamedica, $id_mascota,$detalle) {
        $this->id_fichamedica = $id_fichamedica;
        $this->id_mascota = $id_mascota;
 	$this->detalle = $detalle;
 	
     }
function setId_fichamedica($id_fichamedica){
       $this->id_fichamedica = $id_fichamedica;
     } 
     function getId_fichamedica(){
       return $this->id_fichamedica;
     } 
    
     function setId_mascota($id_mascota){
       $this->id_mascota = $id_mascota;
     } 
     function getId_mascota(){
       return $this->id_mascota;
     } 
     function setDetalle($detalle){
       $this->detalle = $detalle;
     } 
     function getDetalle(){
       return $this->detalle;
     } 

}
?> 

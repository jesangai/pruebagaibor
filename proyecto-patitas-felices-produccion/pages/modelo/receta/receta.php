
<?php

class receta
{
    private $id_receta;
    private $id_consulta;
    private $descripcion;
    private $cantidad;

    
    
     function __construct($id_receta,$id_consulta,$descripcion,$cantidad) {

 	$this->id_receta = $id_receta;
       $this->id_consulta = $id_consulta;
       $this->descripcion = $descripcion;
	$this->cantidad = $cantidad;
     }

    function setId_receta($id_receta){
       $this->id_receta = $id_receta;
     } 
     function getId_receta(){
       return $this->id_receta;
     } 

function setId_consulta($id_consulta){
       $this->id_consulta = $id_consulta;
     } 
     function getId_consulta(){
       return $this->id_consulta;
     } 
function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getDescripcion(){
       return $this->descripcion;
     } 
function setCantidad($cantidad){
       $this->cantidad = $cantidad;
     } 
     function getCantidad(){
       return $this->cantidad;
     } 


}

?>

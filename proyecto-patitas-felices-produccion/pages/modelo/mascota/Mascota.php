<?php

class Mascota
{
    private $id_mascota;
    private $nombre;
    private $raza;
    private $color;
    private $sexo;
    private $fecha_nacimiento;
    private $imagen;
    private $id_estado;
    
     function __construct($id_mascota, $nombre, $raza, $color, $sexo, $fecha_nacimiento,$imagen,$id_estado) {
       $this->id_mascota = $id_mascota;
       $this->nombre = $nombre;
       $this->raza = $raza;
       $this->color = $color;
       $this->sexo = $sexo;
       $this->fecha_nacimiento = $fecha_nacimiento;
       $this->imagen = $imagen;
       $this->id_estado = $id_estado;
     }
    
     function setId_mascota($id_mascota){
       $this->id_mascota = $id_mascota;
     } 
     function getId_mascota(){
       return $this->id_mascota;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }
     function setRaza($raza){
       $this->raza = $raza;
     } 
     function getRaza(){
       return $this->raza;
     } 
     function setColor($color){
       $this->color = $color;
     } 
     function getColor(){
       return $this->color;
     } 
     function setSexo($sexo){
       $this->sexo = $sexo;
     } 
     function getSexo(){
       return $this->sexo;
     } 
     function setFecha_nacimiento($fecha_nacimiento){
       $this->fecha_nacimiento = $fecha_nacimiento;
     } 
     function getFecha_nacimiento(){
       return $this->fecha_nacimiento;
     } 
     function setImagen($imagen){
       $this->imagen = $imagen;
     } 
     function getImagen(){
       return $this->imagen;
     } 
     function setId_estado($id_estado){
       $this->id_estado = $id_estado;
     } 
     function getId_estado(){
       return $this->id_estado;
     } 
}

?> 

<?php

class Persona
{
    private $id_persona;
    private $nombre;
    private $apellido;
    private $correo;
    private $direccion;
    private $usuario;
    private $pass;
    private $fecha_nacimiento;
    private $id_rol;

    function __construct($id_persona, $nombre, $direccion, $apellido, $usuario, $pass, $correo, $fecha_nacimiento, $id_rol) {
       $this->id_persona = $id_persona;
       $this->nombre = $nombre;
       $this->direccion = $direccion;
       $this->apellido = $apellido;
       $this->usuario = $usuario;
       $this->pass = $pass;
       $this->correo = $correo;
       $this->fecha_nacimiento = $fecha_nacimiento;
       $this->id_rol = $id_rol;
	
     }
    
     function setIdPersona($id_persona){
       $this->id_persona = $id_persona;
     } 
     function getIdPersona(){
       return $this->id_persona;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
     function setApellido($apellido){
       $this->apellido = $apellido;
     } 
     function getApellido(){
       return $this->apellido;
     } 
     function setCorreo($correo){
       $this->correo = $correo;
     } 
     function getCorreo(){
       return $this->correo;
     } 
     function setDireccion($direccion){
       $this->direccion = $direccion;
     } 
     function getDireccion(){
       return $this->direccion;
     } 
     function setUsuario($usuario){
       $this->usuario = $usuario;
     } 
     function getUsuario(){
       return $this->usuario;
     } 
     function setPass($pass){
       $this->pass = $pass;
     } 
     function getPass(){
       return $this->pass;
     } 
     function setFechaNacimiento($fecha_nacimiento){
       $this->fecha_nacimiento = $fecha_nacimiento;
     } 
     function getFechaNacimiento(){
       return $this->fecha_nacimiento;
     } 
     function setIdRol($id_rol){
       $this->id_rol = $id_rol;
     } 
     function getIdRol(){
       return $this->id_rol;
     } 
}

?> 

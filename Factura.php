<?php

class Usuario
{
    private $idUsuario;
    private $nombre;
    private $apellido;
    private $email;
    private $contrasena;
    private $genero;
    private $actfisica;
    private $edad;
    private $estatura;
    private $peso;
    private $objetivo;
    
     function __construct($idUsuario, $nombre, $apellido, $email, $contrasena, $genero, $actfisica, $edad, $estatura, $peso, $objetivo) {
       $this->idUsuario = $idUsuario;
       $this->nombre = $nombre;
       $this->apellido = $apellido;
       $this->email = $email;
       $this->contrasena = $contrasena;
       $this->genero = $genero;
       $this->actfisica = $actfisica;
       $this->edad = $edad;
       $this->estatura = $estatura;
       $this->peso = $peso;
       $this->objetivo = $objetivo;
     }
    
     function setIdUsuario($idUsuario){
       $this->idUsuario = $idUsuario;
     } 
     function getIdUsuario(){
       return $this->idUsuario;
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
     function setEmail($email){
       $this->email = $email;
     } 
     function getEmail(){
       return $this->email;
     } 
     function setContrasena($contrasena){
       $this->contrasena = $contrasena;
     } 
     function getContrasena(){
       return $this->contrasena;
     } 
     function setGenero($genero){
       $this->genero = $genero;
     } 
     function getGenero(){
       return $this->genero;
     } 
     function setActfisica($actfisica){
       $this->actfisica = $actfisica;
     } 
     function getActfisica(){
       return $this->actfisica;
     } 
     function setEdad($edad){
       $this->edad = $edad;
     } 
     function getEdad(){
       return $this->edad;
     } 
     function setEstatura($estatura){
       $this->estatura = $estatura;
     } 
     function getEstatura(){
       return $this->estatura;
     } 
     function setPeso($peso){
       $this->peso = $peso;
     } 
     function getPeso(){
       return $this->peso;
     }
      function setObjetivo($objetivo){
       $this->objetivo = $objetivo;
     } 
     function getObjetivo(){
       return $this->objetivo;
     }  
}

?> 

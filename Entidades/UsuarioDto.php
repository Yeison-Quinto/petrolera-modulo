<?php

Class UsuarioDto{
    
    Private $idusuario;
    Private $contraseña;
    Private $rol;
    
    function __construct($idusuario, $contraseña, $rol) {
        $this->idusuario = $idusuario;
        $this->contraseña = $contraseña;
        $this->rol = $rol;
    }
    
    function getIdusuario() {
        return $this->idusuario;
    }

    function getContraseña() {
        return $this->contraseña;
    }

    function getRol() {
        return $this->rol;
    }

    function setIdusuario($idusuario) {
        $this->idusuario = $idusuario;
    }

    function setContraseña($contraseña) {
        $this->contraseña = $contraseña;
    }

    function setRol($rol) {
        $this->rol = $rol;
    }


}
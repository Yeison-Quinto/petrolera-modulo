<?php
Class PersonaDto{
    
  Private $idpersona;
  Private $cedula_persona;
  Private $nombre_persona;
  Private $usuario_persona;
  Private $cargo_persona;
  Private $correo_persona;
  Private $fecha_ingreso;
  
  function __construct($idpersona, $cedula_persona, $nombre_persona, $usuario_persona, $cargo_persona, $correo_persona, $fecha_ingreso) {
      $this->idpersona = $idpersona;
      $this->cedula_persona = $cedula_persona;
      $this->nombre_persona = $nombre_persona;
      $this->usuario_persona = $usuario_persona;
      $this->cargo_persona = $cargo_persona;
      $this->correo_persona = $correo_persona;
      $this->fecha_ingreso = $fecha_ingreso;
  }

  function getIdpersona() {
      return $this->idpersona;
  }

  function getCedula_persona() {
      return $this->cedula_persona;
  }

  function getNombre_persona() {
      return $this->nombre_persona;
  }

  function getUsuario_persona() {
      return $this->usuario_persona;
  }

  function getCargo_persona() {
      return $this->cargo_persona;
  }

  function getCorreo_persona() {
      return $this->correo_persona;
  }

  function getFecha_ingreso() {
      return $this->fecha_ingreso;
  }

  function setIdpersona($idpersona) {
      $this->idpersona = $idpersona;
  }

  function setCedula_persona($cedula_persona) {
      $this->cedula_persona = $cedula_persona;
  }

  function setNombre_persona($nombre_persona) {
      $this->nombre_persona = $nombre_persona;
  }

  function setUsuario_persona($usuario_persona) {
      $this->usuario_persona = $usuario_persona;
  }

  function setCargo_persona($cargo_persona) {
      $this->cargo_persona = $cargo_persona;
  }

  function setCorreo_persona($correo_persona) {
      $this->correo_persona = $correo_persona;
  }

  function setFecha_ingreso($fecha_ingreso) {
      $this->fecha_ingreso = $fecha_ingreso;
  }


}
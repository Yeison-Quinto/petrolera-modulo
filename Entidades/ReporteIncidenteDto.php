<?php
Class ReporteIncidenteDto{
    
  Private $id_reporte_incidente;
  Private $nombre_reportero;
  Private $cedula_reportero;
  Private $fecha_reporte;
  Private $nombre_pers_impl;
  Private $descripcion;
  Private $prueba_reporte;
  Private $tipo_incidente;
  Private $categoria_incidente;
  Private $cedula_implicado;
  
  function __construct($id_reporte_incidente, $nombre_reportero, $cedula_reportero, $fecha_reporte, $nombre_pers_impl, $descripcion, $prueba_reporte, $tipo_incidente, $categoria_incidente, $cedula_implicado) {
      $this->id_reporte_incidente = $id_reporte_incidente;
      $this->nombre_reportero = $nombre_reportero;
      $this->cedula_reportero = $cedula_reportero;
      $this->fecha_reporte = $fecha_reporte;
      $this->nombre_pers_impl = $nombre_pers_impl;
      $this->descripcion = $descripcion;
      $this->prueba_reporte = $prueba_reporte;
      $this->tipo_incidente = $tipo_incidente;
      $this->categoria_incidente = $categoria_incidente;
      $this->cedula_implicado = $cedula_implicado;
  }

  function getId_reporte_incidente() {
      return $this->id_reporte_incidente;
  }

  function getNombre_reportero() {
      return $this->nombre_reportero;
  }

  function getCedula_reportero() {
      return $this->cedula_reportero;
  }

  function getFecha_reporte() {
      return $this->fecha_reporte;
  }

  function getNombre_pers_impl() {
      return $this->nombre_pers_impl;
  }

  function getDescripcion() {
      return $this->descripcion;
  }

  function getPrueba_reporte() {
      return $this->prueba_reporte;
  }

  function getTipo_incidente() {
      return $this->tipo_incidente;
  }

  function getCategoria_incidente() {
      return $this->categoria_incidente;
  }

  function getCedula_implicado() {
      return $this->cedula_implicado;
  }

  function setId_reporte_incidente($id_reporte_incidente) {
      $this->id_reporte_incidente = $id_reporte_incidente;
  }

  function setNombre_reportero($nombre_reportero) {
      $this->nombre_reportero = $nombre_reportero;
  }

  function setCedula_reportero($cedula_reportero) {
      $this->cedula_reportero = $cedula_reportero;
  }

  function setFecha_reporte($fecha_reporte) {
      $this->fecha_reporte = $fecha_reporte;
  }

  function setNombre_pers_impl($nombre_pers_impl) {
      $this->nombre_pers_impl = $nombre_pers_impl;
  }

  function setDescripcion($descripcion) {
      $this->descripcion = $descripcion;
  }

  function setPrueba_reporte($prueba_reporte) {
      $this->prueba_reporte = $prueba_reporte;
  }

  function setTipo_incidente($tipo_incidente) {
      $this->tipo_incidente = $tipo_incidente;
  }

  function setCategoria_incidente($categoria_incidente) {
      $this->categoria_incidente = $categoria_incidente;
  }

  function setCedula_implicado($cedula_implicado) {
      $this->cedula_implicado = $cedula_implicado;
  }


}

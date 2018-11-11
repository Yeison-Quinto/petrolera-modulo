<?php

include_once 'ReporteIncidenteDto.php';

class ReporteIncidenteDao {
    
    public function insertar($conexion, $ReporteIncidenteDto) {
        $insertado = false;
        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO reporteIncidente (id_reporte_incidente, nombre_reportero, cedula_reportero, fecha_reporte, nombre_pers_impl, descripcion, prueba_reporte, tipo_incidente, catergoria_incidente, cedula_implicado )
                VALUES (:id_reporte_incidente, :nombre_reportero, :cedula_reportero, :fecha_reporte, :nombre_pers_impl, :descripcion, :prueba_reporte, :tipo_incidente, :catergoria_incidente, :cedula_implicado )";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':id_reporte_incidente', $ReporteIncidenteDto->getId_reporte_incidente(), PDO::PARAM_STR);
                $sentencia->bindParam(':nombre_reportero', $ReporteIncidenteDto->getNombre_reportero(), PDO::PARAM_STR);
                $sentencia->bindParam(':cedula_reportero', $ReporteIncidenteDto->getCedula_reportero(), PDO::PARAM_STR);
                $sentencia->bindParam(':fecha_reporte', $ReporteIncidenteDto->getFecha_reporte(), PDO::PARAM_STR);
                $sentencia->bindParam(':nombre_pers_impl', $ReporteIncidenteDto->getNombre_pers_impl(), PDO::PARAM_STR);
                $sentencia->bindParam(':descripcion', $ReporteIncidenteDto->getDescripcion(), PDO::PARAM_STR);
                $sentencia->bindParam(':prueba_reporte', $ReporteIncidenteDto->getPrueba_reporte(), PDO::PARAM_STR);
                $sentencia->bindParam(':tipo_incidente', $ReporteIncidenteDto->getTipo_incidente(), PDO::PARAM_STR);
                $sentencia->bindParam(':catergoria_incidente', $ReporteIncidenteDto->getCatergoria_incidente(), PDO::PARAM_STR);
                $sentencia->bindParam(':cedula_implicado', $ReporteIncidenteDto->getCedula_implicado(), PDO::PARAM_STR);
                $insertado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR ' . $ex->getMessage();
            }
        }        
        return $insertado;   
    }

    public function editar($conexion, $ReporteIncidenteDto) {
        $editado = false;
        if (isset($conexion)) {
            try { 
                $sql = "UPDATE reporte_incidente SET id_reporte_incidente = :id_reporte_incidente, nombre_reportero = :nombre_reportero, cedula_reportero = cedula_reportero, fecha_reporte = :fecha_reporte, nombre_pers_impl = :nombre_pers_impl, descripcion = :descripcion, prueba_reporte = :prueba_reporte, tipo_incidente = :tipo_incidente, catergoria_incidente = :catergoria_incidente, cedula_implicado = :cedula_implicado";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':id_reporte_incidente', $ReporteIncidenteDto->getId_reporte_incidente(), PDO::PARAM_STR);
                $sentencia->bindParam(':nombre_reportero', $ReporteIncidenteDto->getNombre_reportero(), PDO::PARAM_STR);
                $sentencia->bindParam(':cedula_reportero', $ReporteIncidenteDto->getCedula_reportero(), PDO::PARAM_STR);
                $sentencia->bindParam(':fecha_reporte', $ReporteIncidenteDto->getFecha_reporte(), PDO::PARAM_STR);
                $sentencia->bindParam(':nombre_pers_impl', $ReporteIncidenteDto->getNombre_pers_impl(), PDO::PARAM_STR);
                $sentencia->bindParam(':descripcion', $ReporteIncidenteDto->getDescripcion(), PDO::PARAM_STR);
                $sentencia->bindParam(':prueba_reporte', $ReporteIncidenteDto->getPrueba_reporte(), PDO::PARAM_STR);
                $sentencia->bindParam(':tipo_incidente', $ReporteIncidenteDto->getTipo_incidente(), PDO::PARAM_STR);
                $sentencia->bindParam(':catergoria_incidente', $ReporteIncidenteDto->getCatergoria_incidente(), PDO::PARAM_STR);
                $sentencia->bindParam(':cedula_implicado', $ReporteIncidenteDto->getCedula_implicado(), PDO::PARAM_STR);
                $insertado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR ' . $ex->getMessage();
            }
        }        
        return $insertado;   
    }

    public function consultar($conexion, $id) {
        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM reporte_incidente WHERE id_reporte_incidente = :id ";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':id', $id, PDO::PARAM_STR);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $ReporteIncidenteDao = new ReporteIncidenteDao($resultado[0], $resultado[1], $resultado[2]);
            } catch (PDOException $ex) {
                print 'ERROR ' . $ex->getMessage();
            }
        }
        return $ReporteIncidenteDao;        
    }

    public function eliminar($conexion, $id) {
        $eliminado = false;
        if (isset($conexion)) {
            try {
                $sql = "DELETE FROM reporte_incidente WHERE id_reporte_incidente = :id ";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':id', $id, PDO::PARAM_STR);
                $eliminado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR ' . $ex->getMessage();
            }
        }
        return $eliminado;
    }

    public function mostrarTodos($conexion) {
        if (isset($conexion)) {
            try {                
                $sql = "SELECT * FROM reporte_incidente";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
            } catch (PDOException $ex) {
                print 'ERROR ' . $ex->getMessage();
            }
        }
        return $resultado;
    }
}
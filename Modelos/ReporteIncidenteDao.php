<?php

include_once 'ReporteIncidenteDto.php';

class ReporteIncidenteDao {
    
    public function insertar($conexion, $ReporteIncidenteDto) {
        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO reporteIncidente (contraseña, rol ) VALUES (:contraseña, :rol )";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':contraseña', $ReporteIncidenteDto->getContraseña(), PDO::PARAM_STR);
                $sentencia->bindParam(':rol', $ReporteIncidenteDto->getRol(), PDO::PARAM_STR);
                $insertado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR ' . $ex->getMessage();
            }
        }        
        return $insertado;   
    }

    public function editar($conexion, $ReporteIncidenteDto) {
        
    }

    public function consultar($conexion, $id) {
        
    }

    public function eliminar($conexion, $id) {
        
    }

    public function mostrarTodos($conexion) {
        
    }

}

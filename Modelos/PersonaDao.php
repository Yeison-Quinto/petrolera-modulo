<?php

include_once 'PersonaDto.php';

class PersonaDao {
    
    public function insertar($conexion, $PersonaDto) {
        $insertado = false;
        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO persona (cedula_persona, nombre_persona,usuario_persona,cargo_persona,correo_persona,fecha_ingreso ) VALUES (:contraseña, :rol )";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':cedula_persona', $PersonaDto->getCedula_persona(), PDO::PARAM_STR);
                $sentencia->bindParam(':nombre_persona', $PersonaDto->getNombre_persona(), PDO::PARAM_STR);
                $sentencia->bindParam(':usuario_persona', $PersonaDto->getUsuario_persona(), PDO::PARAM_STR);
                $sentencia->bindParam(':cargo_persona', $PersonaDto->getCargo_persona(), PDO::PARAM_STR);
                $sentencia->bindParam(':correo_persona', $PersonaDto->getCorreo_persona(), PDO::PARAM_STR);
                $sentencia->bindParam(':fecha_ingreso', $PersonaDto->getFecha_ingreso(), PDO::PARAM_STR);
                $insertado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR ' . $ex->getMessage();
            }
        }        
        return $insertado;
    }
    public function editar($conexion, $PersonaDto) {
        $editado = false;
        if (isset($conexion)) {
            try {
                $sql = "UPDATE persona  SET cedula_persona = :cedula_persona, nombre_persona = :nombre_persona, usuario_persona = :usuario_persona, cargo_persona = :cargo_persona, correo_persona = :correo_persona, fecha_ingreso = :fecha_ingreso";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':cedula_persona', $PersonaDto->getCedula_persona(), PDO::PARAM_STR);
                $sentencia->bindParam(':nombre_persona', $PersonaDto->getNombre_persona(), PDO::PARAM_STR);
                $sentencia->bindParam(':usuario_persona', $PersonaDto->getUsuario_persona(), PDO::PARAM_STR);
                $sentencia->bindParam(':cargo_persona', $PersonaDto->getCargo_persona(), PDO::PARAM_STR);
                $sentencia->bindParam(':correo_persona', $PersonaDto->getCorreo_persona(), PDO::PARAM_STR);
                $sentencia->bindParam(':fecha_ingreso', $PersonaDto->getFecha_ingreso(), PDO::PARAM_STR);
                $editado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR ' . $ex->getMessage();
            }
        }        
        return $editado;
    }
    public function consultar($conexion, $id) {
        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM persona WHERE idpersona = :id ";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':id', $id, PDO::PARAM_STR);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $usuarioDto = new UsuarioDto($resultado[0], $resultado[1], $resultado[2]);
            } catch (PDOException $ex) {
                print 'ERROR ' . $ex->getMessage();
            }
        }
        return $usuarioDto;
    }
    public function eliminar($conexion, $id) {
        $eliminado = false;
        if (isset($conexion)) {
            try {
                $sql = "DELETE FROM persona WHERE idpersona = :id ";
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
                $sql = "SELECT * FROM persona";
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
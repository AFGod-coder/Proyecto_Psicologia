<?php

include_once('../config/config.php');
include('../config/Database.php');

class paciente{
public $conexion;

function __construct()
{
    $db = new Database();
    $this->conexion = $db-> connectToDatabase();
}

function save($params){
    $nombres = $params['nombres'];
    $apellidos = $params['apellidos'];
    $email = $params['email'];
    $celular = $params['celular'];
    $fecha = $params['fecha'];
    $duracionSesion = $params['duracionSesion'];
    $enfermedades = $params['enfermedades'];

    $insert = " INSERT INTO pacientes VALUES (NULL, '$nombres', '$apellidos', '$email', $celular, '$fecha', '$duracionSesion', '$enfermedades') ";
    return mysqli_query($this->conexion, $insert);

}



function getAll(){
    $sql = "SELECT * FROM pacientes";
    return mysqli_query($this->conexion, $sql);
}

function  getOne($id)
{
    $spl = "SELECT * FROM pacientes WHERE id = $id";
    return mysqli_query($this->conexion, $spl);

}
function update($params){
    $nombres = $params['nombres'];
    $apellidos = $params['apellidos'];
    $email = $params['email'];
    $celular = $params['celular'];
    $fecha = $params['fecha'];
    $duracionSesion = $params['duracionSesion'];
    $enfermedades = $params['enfermedades'];
    $id = $params['id'];


    $update = " UPDATE pacientes SET nombres= '$nombres', apellidos= '$apellidos', email= '$email', celular= $celular, fecha= '$fecha', duracionSesion= '$duracionSesion', enfermedades= '$enfermedades' WHERE id = $id ";
    return mysqli_query($this->conexion, $update);

}
function delete($id){
    $delete = " DELETE FROM pacientes WHERE id = $id ";
    return mysqli_query($this->conexion, $delete);
}

}


?>
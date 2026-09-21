<?php 

require_once "../config/conexion.php";

$basedatos = new Database();
$conexion = $basedatos->conectar();

if ($conexion) {
    echo " Conexion Exitosa";
} else {
    echo "No fue posible establecer conexion";
}
<?php
require_once __DIR__ . "/../../config/Database.php";

class Apartamento
{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->conectar();
    }

    public function getAll()
    {
        $sql = "SELECT 
                u.nombre AS usuario,
                tp.nombre_tipo_vivienda AS TipoVivienda,
                a.estado,
                a.direccion,
                a.area,
                a.habitaciones,
                a.bano,
                a.parqueadero,
                a.valor_canon
                FROM apartamentos a
                JOIN usuario u ON a.id_usuario=u.id_usuario
                JOIN tipo_vivienda tp ON a.id_tipo_vivienda=tp.id_tipo_vivienda";
        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
}

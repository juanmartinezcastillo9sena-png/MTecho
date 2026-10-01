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

    public function guardar($id_usuario, $id_tipo_vivienda, $estado, $direccion, $area, $habitaciones, $bano, $parqueadero, $valor_canon)
    {
        try {
            $sql =
            "INSERT INTO apartamentos (id_usuario, id_tipo_vivienda, estado, direccion, area, habitaciones, bano, parqueadero, valor_canon)
            VALUES (:id_usuario, :id_tipo_vivienda, :estado, :direccion, :area, :habitaciones, :bano, :parqueadero, :valor_canon)";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":id_usuario", $id_usuario);
            $consulta->bindParam(":id_tipo_vivienda", $id_tipo_vivienda);
            $consulta->bindParam(":estado", $estado);
            $consulta->bindParam(":direccion", $direccion);
            $consulta->bindParam(":area", $area);
            $consulta->bindParam(":habitaciones", $habitaciones);
            $consulta->bindParam(":bano", $bano);
            $consulta->bindParam(":parqueadero", $parqueadero);
            $consulta->bindParam(":valor_canon", $valor_canon);

            return $consulta->execute();
        } catch (PDOException $e) {
            echo "Error al guardar el apartamento";
        }
    }
}

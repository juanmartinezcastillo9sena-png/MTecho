<?php
require_once __DIR__ . "/../../config/Database.php";

class Contrato
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
        c.id_contrato,
        u.nombre AS nombre,
        tp.nombre_tipo_vivienda AS tipoVivienda,
        c.fecha_inicio,
        c.fecha_terminacion,
        c.valor_contrato
        FROM contrato c
        JOIN usuario u ON c.id_usuario=u.id_usuario
        JOIN apartamentos a ON c.id_apartamentos=a.id_apartamentos
        JOIN tipo_vivienda tp ON a.id_tipo_vivienda=tp.id_tipo_vivienda";
        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    public function guardar($id_usuario, $id_apartamentos, $fecha_inicio, $fecha_terminacion, $valor_contrato)
    {
        try{
            $sql=
            "INSERT INTO contrato (id_usuario, id_apartamentos, fecha_inicio, fecha_terminacion, valor_contrato)
            VALUES (:id_usuario, :id_apartamentos, :fecha_inicio, :fecha_terminacion, :valor_contrato)";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":id_usuario", $id_usuario);
            $consulta->bindParam(":id_apartamentos", $id_apartamentos);
            $consulta->bindParam(":fecha_inicio", $fecha_inicio);
            $consulta->bindParam(":fecha_terminacion", $fecha_terminacion);
            $consulta->bindParam(":valor_contrato", $valor_contrato);

            return $consulta->execute();
        }
        catch (PDOException $e){
            echo "Error al guardar el contrato";
        }
    }
}

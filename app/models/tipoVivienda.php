<?php
require_once __DIR__ . "/../../config/Database.php";

class TipoVivienda{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->conectar();
    }

    public function getAll(){
        $sql="SELECT * FROM tipo_vivienda";
        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    public function guardar($nombre_tipo_vivienda){
        try{
            $sql= "INSERT INTO tipo_vivienda(nombre_tipo_vivienda)
            VALUES(:nombre_tipo_vivienda)";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":nombre_tipo_vivienda", $nombre_tipo_vivienda);

            return $consulta->execute();


        } catch(PDOException $e){
            echo "Error al guardar tipo de vivienda";
        }
    }
}
?>
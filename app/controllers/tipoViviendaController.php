<?php
require_once __DIR__ . "/../models/tipoVivienda.php";

class tipoviviendaController
{
    public function index()
    {
        $tipoViviendaModel = new TipoVivienda();

        try{
            $tipoViviendas=$tipoViviendaModel->getAll();
        }catch (PDOException){
            echo "Se encontraron errores";
        }

        require_once __DIR__ . "/../views/tipoVivienda/index.php";
    }

    public function crear(){
        require_once __DIR__ . "/../views/tipoVivienda/crear.php";
    }

    public function guardar(){
        $nombre_tipo_vivienda=$_POST['nombre_tipo_vivienda'];

        $tipo_vivienda=new TipoVivienda();
        $resultado=$tipo_vivienda->guardar($nombre_tipo_vivienda);
        if($resultado){
            echo "Tipo de vivienda creado correctamente";
            $this->index();
        } else{
            echo "No se puede guardar tipo de apartamento";
        }
    }
}
?>
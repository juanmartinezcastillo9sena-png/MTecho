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
}
?>
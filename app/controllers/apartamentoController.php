<?php
require_once __DIR__ . "/../models/apartamento.php";

class apartamentoController
{

    public function index()
    {

        $apartamentoModel = new Apartamento();

        try {
            $apartamentos = $apartamentoModel->getAll();
        } catch (PDOException) {
            echo "Se encontraron errores";
        }

        require_once __DIR__ . "/../views/apartamento/index.php";
    }
}
?>
<?php

require_once __DIR__ . "/../models/contrato.php";

class contratoController
{
    public function index()
    {

        $contratoModel = new Contrato();

        try
        {
            $contratos = $contratoModel ->getAll();
        } catch (PDOException){
            echo "Se encontraron errores";
        }

        require_once __DIR__ . "/../views/contrato/index.php";
    }

}
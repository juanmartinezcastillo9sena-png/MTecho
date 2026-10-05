<?php

require_once __DIR__ . "/../models/contrato.php";

class contratoController
{
    public function index()
    {

        $contratoModel = new Contrato();

        try {
            $contratos = $contratoModel->getAll();
        } catch (PDOException) {
            echo "Se encontraron errores";
        }

        require_once __DIR__ . "/../views/contrato/index.php";
    }

    public function crear()
    {
        require_once __DIR__ . "/../views/contrato/crear.php";
    }

    public function guardar()
    {
        $id_usuario = $_POST['id_usuario'];
        $id_apartamentos = $_POST['id_apartamentos'];
        $fecha_inicio = $_POST['fecha_inicio'];
        $fecha_terminacion = $_POST['fecha_terminacion'];
        $valor_canon = $_POST['valor_canon'];

        $contrato = new Contrato();
        $resultado = $contrato->guardar($id_usuario, $id_apartamentos, $fecha_inicio, $fecha_terminacion, $valor_canon);
        if ($resultado) {
            echo "Contrato guardado correctamente";
            $this->index();
        } else {
            echo "No se puede guardar el contrato";
        }
    }
}

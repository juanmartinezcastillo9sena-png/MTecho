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

    public function crear()
    {
        require_once __DIR__ . "/../views/apartamento/crear.php";
    }

    public function guardar()
    {
        $id_usuario = $_POST['id_usuario'];
        $id_tipo_vivienda = $_POST['id_tipo_vivienda'];
        $estado = $_POST['estado'];
        $direccion = $_POST['direccion'];
        $area = $_POST['area'];
        $habitaciones = $_POST['habitaciones'];
        $bano = $_POST['bano'];
        $parqueadero = $_POST['parqueadero'];
        $valor_canon = $_POST['valor_canon'];

        $apartamento = new Apartamento();
        $resultado = $apartamento->guardar($id_usuario, $id_tipo_vivienda, $estado, $direccion, $area, $habitaciones, $bano, $parqueadero, $valor_canon);
        if ($resultado) {
            echo "Apartamento guardado correctamente";
            $this->index();
        } else {
            echo "No se puede guardar el apartamento";
        }
    }
}

<?php
require_once __DIR__ . "/../app/controllers/apartamentoController.php";
require_once __DIR__ . "/../app/controllers/tipoViviendaController.php";
require_once __DIR__ . "/../app/controllers/contratoController.php";
$rutas = require dirname(__DIR__) . '/rutas/web.php';

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$ruta = parse_url($uri, PHP_URL_PATH);

?>

    <a href="/apartamento">Apartamentos</a>
    <a href="/tipoVivienda">Tipo Vivienda</a>
    <a href="/contrato">Contratos</a>
    <a href="/crear/apartamento">Crear Apartamento</a>
    <a href="/crear/tipoVivienda">Crear Tipo Vivienda</a>
    <a href="/crear/contrato">Crear Contrato</a>

<?php
    $enrutamiento = $rutas[$method][$ruta] ?? null;

    if ($enrutamiento !== null) {
        $nControlador = $enrutamiento[0];
        $nMetodo = $enrutamiento[1];
        $controlador = new $nControlador();
        $controlador->$nMetodo();
    } else {
        echo "Error 404 página no encontrada";
    }

?>
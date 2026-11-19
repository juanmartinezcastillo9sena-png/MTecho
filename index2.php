<?php
require_once __DIR__ . "/../app/controllers/apartamentoController.php";
require_once __DIR__ . "/../app/controllers/tipoViviendaController.php";
require_once __DIR__ . "/../app/controllers/contratoController.php";
$rutas = require dirname(__DIR__) .'/rutas/web.php';

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
$enrutamiento=$rutas[$method][$ruta] ?? null;

if($enrutamiento !== null){
    $nControlador = $enrutamiento[0];
    $nMetodo = $enrutamiento[1];

    $controlador=new $nControlador();
    $controlador->$nMetodo();
}

?>

//

<?php

require_once __DIR__ . "/../app/controllers/apartamentoController.php";
require_once __DIR__ . "/../app/controllers/tipoViviendaController.php";
require_once __DIR__ . "/../app/controllers/contratoController.php";

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
//APARTAMENTO
switch ($uri) {
    case '/apartamento';
        if ($method === 'GET') {
            $ApartamentoController = new apartamentoController();
            $ApartamentoController->index();
        }
}
switch ($uri) {
    case '/apartamento';
        if ($method === 'POST') {
            $ApartamentoController = new apartamentoController();
            $ApartamentoController->guardar();
        }
}
switch ($uri) {
    case '/crear/apartamento';
        if ($method === 'GET') {
            $ApartamentoController = new apartamentoController();
            $ApartamentoController->crear();
        }
}
switch ($ruta) {
    case '/editar/apartamento';
        if ($method === 'GET') {
            $ApartamentoController = new apartamentoController();
            $ApartamentoController->editar();
        }
}
switch ($ruta) {
    case '/actualizar/apartamento';
        if ($method === 'POST') {
            $ApartamentoController = new apartamentoController();
            $ApartamentoController->actualizar();
        }
}
switch ($ruta) {
    case '/eliminar/apartamento';
        if ($method === 'POST') {
            $ApartamentoController = new apartamentoController();
            $ApartamentoController->eliminar();
        }
}
//TIPO VIVIENDA
switch ($uri) {
    case '/tipoVivienda';
        if ($method === 'GET') {
            $TipoViviendaController = new tipoviviendaController();
            $TipoViviendaController->index();
        }
}
switch ($uri) {
    case '/tipoVivienda';
        if ($method === 'POST') {
            $TipoViviendaController = new tipoviviendaController();
            $TipoViviendaController->guardar();
        }
}
switch ($uri) {
    case '/crear/tipoVivienda';
        if ($method === 'GET') {
            $TipoViviendaController = new tipoviviendaController();
            $TipoViviendaController->crear();
        }
}

//CONTRATO
switch ($uri) {
    case '/contrato';
        if ($method === 'GET') {
            $ContratoController = new contratoController();
            $ContratoController->index();
        }
}
switch ($uri) {
    case '/contrato';
        if ($method === 'POST') {
            $ContratoController = new contratoController();
            $ContratoController->guardar();
        }
}
switch ($uri) {
    case '/crear/contrato';
        if ($method === 'GET') {
            $ContratoController = new contratoController();
            $ContratoController->crear();
        }
}









?>

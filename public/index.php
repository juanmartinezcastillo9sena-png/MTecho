<?php

require_once __DIR__ . "/../app/controllers/apartamentoController.php";
require_once __DIR__ . "/../app/controllers/tipoViviendaController.php";
require_once __DIR__ . "/../app/controllers/contratoController.php";

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

?>

<a href="/apartamento">Apartamentos</a>
<a href="/tipoVivienda">Tipo Vivienda</a>
<a href="/contrato">Contratos</a>
<a href="/crear/apartamento">Crear Apartamento</a>
<a href="/crear/tipoVivienda">Crear Tipo Vivienda</a>
<a href="/crear/contrato">Crear Contrato</a>

<?php
//APARTAMENTO
if ($method === 'GET' && $uri === '/apartamento') {
    $ApartamentoController = new apartamentoController();
    $ApartamentoController->index();
} 
elseif ($method === 'POST' && $uri === '/apartamento') {
    $ApartamentoController = new apartamentoController();
    $ApartamentoController->guardar();
} 
elseif ($method === 'GET' && $uri === '/crear/apartamento') {
    $ApartamentoController = new apartamentoController();
    $ApartamentoController->crear();
}
//TIPO VIVIENDA
elseif ($method === 'GET' && $uri === '/tipoVivienda') {
    $TipoViviendaController = new tipoviviendaController();
    $TipoViviendaController->index();
} 
elseif ($method === 'POST' && $uri === '/tipoVivienda') {
    $TipoViviendaController = new tipoviviendaController();
    $TipoViviendaController->guardar();
} 
elseif ($method === 'GET' && $uri === '/crear/tipoVivienda') {
    $TipoViviendaController = new tipoviviendaController();
    $TipoViviendaController->crear();
} 
//CONTRATO
elseif ($method === 'GET' && $uri === '/contrato') {
    $ContratoController = new contratoController();
    $ContratoController->index();
} 
elseif ($method === 'POST' && $uri === '/contrato') {
    $ContratoController = new contratoController();
    $ContratoController->guardar();
} 
elseif ($method === 'GET' && $uri === '/crear/contrato') {
    $ContratoController = new contratoController();
    $ContratoController->crear();
} 







?>
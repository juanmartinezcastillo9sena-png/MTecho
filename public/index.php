<?php

require_once __DIR__ . "/../app/controllers/apartamentoController.php";

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

?>

<a href="/apartamento">Apartamentos</a>

<?php
if ($method === 'GET' && $uri === '/apartamento') {
    $ApartamentoController = new apartamentoController();
    $ApartamentoController->index();
}
?>
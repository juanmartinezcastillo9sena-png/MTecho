<?php 

require_once __DIR__ . "/../app/controllers/apartamentoController.php";

$ApartamentoController = new apartamentoController();
$ApartamentoController->index();

?>
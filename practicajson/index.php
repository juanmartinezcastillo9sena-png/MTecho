<?php
$producto=[
    ['id'=>1,'nombre'=>'Impresora', 'precio'=>350000,'stock'=>12,'disponibilidad'=>true],
    ['id'=>2,'nombre'=>'Mouse Pad', 'precio'=>15000,'stock'=>10,'disponibilidad'=>true],
    ['id'=>3,'nombre'=>'Cargadores', 'precio'=>30000,'stock'=>0,'disponibilidad'=>false]
    ];

    $json=json_encode($producto, JSON_PRETTY_PRINT);

    echo $json;

$json1=file_get_contents(__DIR__ . "/productos.json");
$productos1 = json_decode($json1,true);

echo "<h2>Todos los productos</h2>";
foreach ($productos1 as $producto) {
    echo $producto['nombre'] . " - $" . number_format($producto['precio'], 0, ',', '.') . "<br>";
}

echo "<h2>Productos con precio superior a $100.000</h2>";
foreach ($productos1 as $producto) {
    if ($producto['precio'] > 100000) {
        echo $producto['nombre'] . " - $" . number_format($producto['precio'], 0, ',', '.') . "<br>";
    }
}
?>
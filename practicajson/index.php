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

echo "<pre>";
print_r($productos1);
echo "/<pre>";

?>
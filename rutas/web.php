<?php
$rutas=[
    "GET"=>[
        '/apartamento'=>['apartamentoController','index'],
        '/crear/apartamento'=>['apartamentoController','crear'],
        '/editar/apartamento'=>['apartamentoController', 'editar']
    ],
    "POST"=>[
        '/apartamento'=>['apartamentoController','guardar']
    ]
];

return $rutas;
?>
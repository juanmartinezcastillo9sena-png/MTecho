<?php
$rutas=[
    "GET"=>[
        '/apartamento'=>['apartamentoController','index'],
        '/crear/apartamento'=>['apartamentoController','crear'],
        '/editar/apartamento'=>['apartamentoController', 'editar'],
        '/api/apartamento'=>['apartamentoController','listarjson']
    ],
    "POST"=>[
        '/apartamento'=>['apartamentoController','guardar']
    ]
];

return $rutas;
?>
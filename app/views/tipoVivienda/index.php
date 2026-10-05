<h1>Listado Tipo de Viviendas</h1>

<?php if (!empty($tipoViviendas)) {?>
    <table border="2">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
        </tr>

        <?php foreach ($tipoViviendas as $tipo_vivienda): ?>
            <tr>
                <td><?= $tipo_vivienda["id_tipo_vivienda"] ?></td>
                <td><?= $tipo_vivienda["nombre_tipo_vivienda"] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php } else { ?>
        <p>No hay tipo de viviendas para mostrar</p>
<?php } ?>
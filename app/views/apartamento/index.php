<h1>Listado Apartamentos</h1>

<?php if (!empty($apartamentos)) {?>
    <table border='2'>
        <tr>
            <th>Usuario</th>
            <th>Tipo Vivienda</th>
            <th>Estado</th>
            <th>Direccion</th>
            <th>Area</th>
            <th>Habitaciones</th>
            <th>Baños</th>
            <th>Parqueadero</th>
            <th>Valor</th>
        </tr>

        <?php foreach ($apartamentos as $apartamento): ?>
            <tr>
                <td><?= $apartamento["usuario"] ?></td>
                <td><?= $apartamento["TipoVivienda"] ?></td>
                <td><?= $apartamento["estado"] ?></td>
                <td><?= $apartamento["direccion"] ?></td>
                <td><?= $apartamento["area"] ?></td>
                <td><?= $apartamento["habitaciones"] ?></td>
                <td><?= $apartamento["bano"] ?></td>
                <td><?= $apartamento["parqueadero"] ?></td>
                <td><?= $apartamento["valor_canon"] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php } else { ?>
        <p>No hay productos para mostrar</p>
<?php } ?>
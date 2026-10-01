<h1>Listado de Contratos</h1>

<?php if(!empty($contratos)) {?>
    <table border='2'>
        <tr>
            <th>Contrato</th>
            <th>Usuario</th>
            <th>Apartamento</th>
            <th>Fecha Inicio</th>
            <th>Fecha Terminacion</th>
            <th>Valor Contrato</th>
        </tr>

        <?php foreach ($contratos as $contrato): ?>
            <tr>
                <td><?= $contrato["id_contrato"] ?></td>
                <td><?= $contrato["id_usuario"] ?></td>
                <td><?= $contrato["id_apartamentos"] ?></td>
                <td><?= $contrato["fecha_inicio"] ?></td>
                <td><?= $contrato["fecha_terminacion"] ?></td>
                <td><?= $contrato["valor_contrato"] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php } else { ?>
            <p>No hay productos para mostrar</p>
<?php } ?>
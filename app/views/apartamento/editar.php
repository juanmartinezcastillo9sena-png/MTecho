<h1>Actualizando Datos</h1>
<form action="/apartamento/editar" method="POST">
    <input type="hidden" name="id_apartamentos" value=<?= $apartamento->id_apartamentos ?>>

    <label for="id_usuario">Usuario</label>
    <input type="text" name="id_usuario" value=<?= $apartamento->id_usuario ?>><br>
    <label for="id_tipo_vivienda">Tipo Vivienda</label>
    <input type="text" name="id_tipo_vivienda" value=<?= $apartamento->id_tipo_vivienda ?>><br>
    <label for="estado">Estado</label>
    <input type="text" name="estado" value=<?= $apartamento->estado ?>><br>
    <label for="direccion">Direccion</label>
    <input type="text" name="direccion" value=<?= $apartamento->direccion ?>><br>
    <label for="area">Area</label>
    <input type="number" name="area" value=<?= $apartamento->area ?>><br>
    <label for="bano">Baños</label>
    <input type="number" name="bano" value=<?= $apartamento->bano ?>><br>
    <label for="parqueadero">Parqueaderos</label>
    <input type="number" name="parqueadero" value=<?= $apartamento->parqueadero ?>><br>
    <label for="valor_canon">Valor Canon</label>
    <input type="number" name="valor_canon" value=<?= $apartamento->valor_canon ?>><br>

    <button type="submit">Guardar</button>

</form>
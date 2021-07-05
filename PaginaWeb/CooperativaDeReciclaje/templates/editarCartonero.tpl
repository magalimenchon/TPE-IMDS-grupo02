{include file="header.tpl"}

<body class="fondo">
    <section class="overlay">
        <h2>Editar cartonero</h2>
        {include file="mensaje.tpl"}
        <table class="table mb-3">
            <tbody>
                <tr class="table mb-3 table table-striped table-success table-hover table-borderless">
                    <th>{$cartonero->DNI_cartonero}</th>
                    <td>{$cartonero->nombre_cartonero}</td>
                    <td>{$cartonero->apellido_cartonero}</td>
                    <td>{$cartonero->direccion_cartonero}</td>
                    <td>{$cartonero->fecha_nac_cartonero}</td>
                    <td>{$cartonero->categoria}</td>
                </tr>
            </tbody>
        </table>
        <h2>Nuevos Datos</h2>
        <form action="modificar_cartonero" method="post" enctype="multipart/form-data">
            <div class="ocultar">
                <label class="form-label">DNI cartonero</label>
                <input type="number" class="form-control" name="cartonero_DNI" value="{$cartonero->DNI_cartonero}"
                    required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre cartonero</label>
                <input type="text" class="form-control" name="cartonero_nombre" value="{$cartonero->nombre_cartonero}"
                    required>
            </div>
            <div class="mb-3">
                <label class="form-label">Apellido cartonero</label>
                <input type="text" class="form-control" name="cartonero_apellido"
                    value="{$cartonero->apellido_cartonero}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Direccion cartonero</label>
                <input type="text" class="form-control" name="cartonero_direccion"
                    value="{$cartonero->direccion_cartonero}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Fecha de nacimiento cartonero</label>
                <input type="date" class="form-control" name="cartonero_fecha_nac"
                    value="{$cartonero->fecha_nac_cartonero}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Categoria vehiculo</label>
                <select name="cartonero_categoria">
                    <option value="a">-</option>
                    <option value="b">Auto</option>
                    <option value="c">Camioneta</option>
                    <option value="d">Camión</option>

                </select>
            </div>
            <div class="col text-center">
                <button type="submit"
                    class="btn btn-lg btn-success">Editar</button>
            </div>
        </form>
    </section>
</body>
{include file="footer.tpl"}
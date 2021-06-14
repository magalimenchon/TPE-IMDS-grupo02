{include file="header.tpl"}

<body class="fondo">
    <section class="overlay">
        {foreach from=$materiales item=material}
            <ul class="list-group list-group-horizontal">
                <li class="list-group-item">{$material->nombre_mat}
                </li>
                <li class="list-group-item">{$material->detalle}
                </li>
                <li class="list-group-item"><button class="btn btn-warning"><a
                            href="editar_material/{$material->id_especificacion}">Editar</a></button></li>
                <li class="list-group-item"><button class="btn btn-danger"><a
                            href="borrar_material/{$material->id_especificacion}">Borrar</a></button></li>
            </ul>
        {/foreach}

        <form action="material_aceptado" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Nombre material</label>
                <input type="text" class="form-control" name="input_material_aceptado_nombre_fk" placeholder="Nombre"
                    required>
            </div>
            <div class="mb-3">
                <label class="form-label">Detalle de entrega</label>
                <input type="text" class="form-control" name="input_material_aceptado_detalle_fk" placeholder="Detalle"
                    required>
            </div>
            <div class="col text-center">
                <button type="submit" class=" btn btn-lg btn-success">Enviar</button>
            </div>
        </form>
        {foreach from=$materiales item=material}
            <form action="modificar_material" method="POST" enctype="multipart/form-data">
                <ul class="list-group list-group-horizontal">
                    <li class="ocultar">{$material->id_especificacion}<input type="number"
                            name="material_id" value="{$material->id_especificacion}"></li>
                    <li class="list-group-item">{$material->nombre_mat}<input type="text" name="material_nombre"
                            value="{$material->nombre_mat}"></li>
                    <li class="list-group-item">{$material->detalle}<input type="text" name="material_detalle"
                            value="{$material->detalle}"></li>
                    <input class="btn btn-warning" type="submit" value="Modificar">
                </ul>
            </form>
        {/foreach}
    </section>
</body>
{include file="footer.tpl"}
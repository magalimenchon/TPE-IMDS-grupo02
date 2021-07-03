{include file="header.tpl"}

<body class="fondo">
    <section class="overlay">
        <br>
        <h2>Listado de cartoneros</h2>
        <br><br>
        {include file="mensaje.tpl"}
        
        <table class="table mb-3 table table-striped table-success table-hover table-borderless">
            <thead>
                <tr>
                    <th scope="col" style="text-align: center;">DNI</th>
                    <th scope="col" style="text-align: center;">Nombre</th>
                    <th scope="col" style="text-align: center;">Apellido</th>
                    <th scope="col" style="text-align: center;">Dirección</th>
                    <th scope="col" style="text-align: center;">Fecha de nacimiento</th>
                    <th scope="col" style="text-align: center;">Categoría</th>
                    <th scope="col"> </th>
                    <th scope="col"> </th>
                </tr>
            </thead>
            {foreach from=$cartoneros item=cartonero}
            <tbody>
            <tr class="table">
                <th scope="row" style="text-align: center;">{$cartonero->DNI_cartonero}</th>
                <td style="text-align: center;">{$cartonero->nombre_cartonero}</td>
                <td style="text-align: center;">{$cartonero->apellido_cartonero}</td>
                <td style="text-align: center;">{$cartonero->direccion_cartonero}</td>
                <td style="text-align: center;">{$cartonero->fecha_nac_cartonero}</td>
                <td style="text-align: center;">{$cartonero->categoria}</td>
                
                <td style="text-align: center;"><a type="button" href="editar_cartonero/{$cartonero->DNI_cartonero}" class="btn btn-light"><i class="far fa-edit"></i></a></td>
                <td style="text-align: center;"><a type="button" href="borrar_cartonero/{$cartonero->DNI_cartonero}" class="btn btn-light"><i class="fas fa-trash-alt"></i></a></td>
            </tr>
            </tbody>
            {/foreach}
        </table>

    </section>
</body>
{include file="footer.tpl"}
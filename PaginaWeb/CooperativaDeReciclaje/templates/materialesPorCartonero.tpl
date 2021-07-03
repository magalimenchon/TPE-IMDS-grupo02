{include file="header.tpl"}

<body class="fondo">
    <section class="overlay">
   
        <h2>Materiales acopiados</h2>
        {include file="mensaje.tpl"}

        <table class="table mb-3">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Material 1</th>
                    <th scope="col">Material 2</th>
                    <th scope="col">Etc</th>
                </tr>
            </thead>
            {foreach from=$materiales item=material}
            <tbody>
            <tr class="table-warning">
                {* <th scope="row">{$material->}</th>
                <td>{$material->}</td>
                <td>{$material->}</td>
                <td>{$material->}</td> *}
            </tr>
            </tbody>
            {/foreach}
        </table>
    </section>
</body>
{include file="footer.tpl"}
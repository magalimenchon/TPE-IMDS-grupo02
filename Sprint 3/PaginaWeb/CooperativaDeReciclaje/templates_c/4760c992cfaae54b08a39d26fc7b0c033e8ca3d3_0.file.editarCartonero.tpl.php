<?php
/* Smarty version 3.1.34-dev-7, created on 2021-07-07 22:46:28
  from 'C:\xampp\htdocs\tpe-metodologias\TPE-IMDS-grupo02\PaginaWeb\CooperativaDeReciclaje\templates\editarCartonero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60e612a41f4d66_17050618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4760c992cfaae54b08a39d26fc7b0c033e8ca3d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-metodologias\\TPE-IMDS-grupo02\\PaginaWeb\\CooperativaDeReciclaje\\templates\\editarCartonero.tpl',
      1 => 1625690566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:mensaje.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60e612a41f4d66_17050618 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body class="fondo">
    <section class="overlay">
        <h2>Editar cartonero</h2>
        <br>
        <?php $_smarty_tpl->_subTemplateRender("file:mensaje.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <table class="table mb-3 table table-striped table-success table-hover table-borderless">
            <thead>
                <tr>
                    <th style="text-align: center;">DNI</th>
                    <th style="text-align: center;">Nombre</th>
                    <th style="text-align: center;">Apellido</th>
                    <th style="text-align: center;">Dirección</th>
                    <th style="text-align: center;">Fecha de nacimiento</th>
                    <th style="text-align: center;">Vehículo</th>
                    <th style="text-align: center;">Estado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['cartonero']->value->DNI_cartonero;?>
</th>
                    <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['cartonero']->value->nombre_cartonero;?>
</td>
                    <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['cartonero']->value->apellido_cartonero;?>
</td>
                    <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['cartonero']->value->direccion_cartonero;?>
</td>
                    <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['cartonero']->value->fecha_nac_cartonero;?>
</td>
                    <?php if ($_smarty_tpl->tpl_vars['cartonero']->value->categoria == "a") {?>
                        <td style="text-align: center;"> - </td>
                    <?php } elseif ($_smarty_tpl->tpl_vars['cartonero']->value->categoria == "b") {?>
                        <td style="text-align: center;">Auto</td>
                    <?php } elseif ($_smarty_tpl->tpl_vars['cartonero']->value->categoria == "c") {?>
                        <td style="text-align: center;">Camioneta</td>
                    <?php } elseif ($_smarty_tpl->tpl_vars['cartonero']->value->categoria == "d") {?>
                        <td style="text-align: center;">Camión</td>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['cartonero']->value->borrado == 0) {?>
                        <td style="text-align: center;"> Activo </td>
                    <?php } else { ?>
                        <td style="text-align: center;"> Inactivo </td>
                    <?php }?>
                </tr>
            </tbody>
        </table>
        <br>
        <h2>Nuevos Datos</h2>
        <br>
        <form action="modificar_cartonero" method="post" enctype="multipart/form-data">
            <div class="ocultar">
                <label class="form-label">DNI cartonero</label>
                <input type="number" class="form-control" name="cartonero_DNI" value="<?php echo $_smarty_tpl->tpl_vars['cartonero']->value->DNI_cartonero;?>
"
                    required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre cartonero</label>
                <input type="text" class="form-control" name="cartonero_nombre" value="<?php echo $_smarty_tpl->tpl_vars['cartonero']->value->nombre_cartonero;?>
"
                    required>
            </div>
            <div class="mb-3">
                <label class="form-label">Apellido cartonero</label>
                <input type="text" class="form-control" name="cartonero_apellido"
                    value="<?php echo $_smarty_tpl->tpl_vars['cartonero']->value->apellido_cartonero;?>
" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Direccion cartonero</label>
                <input type="text" class="form-control" name="cartonero_direccion"
                    value="<?php echo $_smarty_tpl->tpl_vars['cartonero']->value->direccion_cartonero;?>
" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Fecha de nacimiento cartonero</label>
                <input type="date" class="form-control" name="cartonero_fecha_nac"
                    value="<?php echo $_smarty_tpl->tpl_vars['cartonero']->value->fecha_nac_cartonero;?>
" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Vehículo</label>
                <select name="cartonero_categoria">
                    <?php if ($_smarty_tpl->tpl_vars['cartonero']->value->categoria == "a") {?>
                        <option value="a" selected> - </option>
                        <option value="b">Auto</option>
                        <option value="c">Camioneta</option>
                        <option value="d">Camión</option>
                    <?php } elseif ($_smarty_tpl->tpl_vars['cartonero']->value->categoria == "b") {?>
                        <option value="a"> - </option>
                        <option value="b" selected>Auto</option>
                        <option value="c">Camioneta</option>
                        <option value="d">Camión</option>
                    <?php } elseif ($_smarty_tpl->tpl_vars['cartonero']->value->categoria == "c") {?>
                        <option value="a"> - </option>
                        <option value="b">Auto</option>
                        <option value="c" selected>Camioneta</option>
                        <option value="d">Camión</option>
                    <?php } else { ?>
                        <option value="a"> - </option>
                        <option value="b">Auto</option>
                        <option value="c">Camioneta</option>
                        <option value="d" selected>Camión</option>
                    <?php }?>
                </select>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['cartonero']->value->borrado == 1) {?>
                <div class="mb-3">
                    <label class="form-label">Estado</label>
                    <select name="cartonero_borrado">
                    <?php if ($_smarty_tpl->tpl_vars['cartonero']->value->borrado == 0) {?>
                        <option value=0 selected>Activo</option>
                        <option value=1>Inactivo</option>
                    <?php } else { ?>
                        <option value=0>Activo</option>
                        <option value=1 selected>Inactivo</option>
                    <?php }?>
                    </select>
                </div>
            <?php } else { ?>
                <div class="ocultar">
                    <label class="form-label">Borrado</label>
                    <select name="cartonero_borrado">
                        <option value="<?php echo $_smarty_tpl->tpl_vars['cartonero']->value->borrado;?>
">No</option>
                    </select>
                </div>
            <?php }?>
            <div class="col text-center">
                <button type="submit" class="btn btn-lg btn-success">Editar</button>
            </div>
        </form>
    </section>
</body>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

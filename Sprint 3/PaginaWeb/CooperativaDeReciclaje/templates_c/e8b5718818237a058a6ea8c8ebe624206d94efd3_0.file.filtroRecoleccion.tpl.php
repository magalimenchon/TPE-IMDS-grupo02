<?php
/* Smarty version 3.1.34-dev-7, created on 2021-07-07 22:44:24
  from 'C:\xampp\htdocs\tpe-metodologias\TPE-IMDS-grupo02\PaginaWeb\CooperativaDeReciclaje\templates\filtroRecoleccion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60e6122842baa6_86858756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8b5718818237a058a6ea8c8ebe624206d94efd3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-metodologias\\TPE-IMDS-grupo02\\PaginaWeb\\CooperativaDeReciclaje\\templates\\filtroRecoleccion.tpl',
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
function content_60e6122842baa6_86858756 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body class="fondo">
        <section class="overlay">
            <h2>Recolección de materiales</h2>

            <?php $_smarty_tpl->_subTemplateRender("file:mensaje.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            
        <div class="mb-3">
            <form action="buscarRecoleccionPorDNI" method="post" class="centrado">
                <div class="mb-3">
                    <label class="form-label">Ingresar cartonero a registrar recolección </label>
                </div>

                <div class="mb-3">
                    <label class="form-label">DNI</label>
                    <input class="form-control" type="text" name="buscarPorDNI" required>
                </div>

                <div class="col text-center">
                    <button type="submit" class=" btn btn-lg btn-success">Seleccionar</button>
                </div>
            </form>

            <table class="table mb-3 table-hover table-borderless">
                    <thead>
                        <tr>
                            <th style="text-align: center;">DNI</th>
                            <th style="text-align: center;">Nombre</th>
                            <th style="text-align: center;">Apellido</th>
                            <th style="text-align: center;">Dirección</th>
                            <th style="text-align: center;">Vehículo</th>
                        </tr>
                    </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filas']->value, 'fila');
$_smarty_tpl->tpl_vars['fila']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fila']->value) {
$_smarty_tpl->tpl_vars['fila']->do_else = false;
?> 
                    <?php if ($_smarty_tpl->tpl_vars['fila']->value->borrado == 0) {?>
                            <tr>
                                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['fila']->value->DNI_cartonero;?>
</td>
                                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['fila']->value->nombre_cartonero;?>
</td>
                                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['fila']->value->apellido_cartonero;?>
</td>
                                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['fila']->value->direccion_cartonero;?>
</td>
                                <?php if ($_smarty_tpl->tpl_vars['fila']->value->categoria == "a") {?>
                                    <td style="text-align: center;"> - </td>
                                <?php } elseif ($_smarty_tpl->tpl_vars['fila']->value->categoria == "b") {?>
                                    <td style="text-align: center;">Auto</td>
                                <?php } elseif ($_smarty_tpl->tpl_vars['fila']->value->categoria == "c") {?>
                                    <td style="text-align: center;">Camioneta</td>   
                                <?php } elseif ($_smarty_tpl->tpl_vars['fila']->value->categoria == "d") {?> 
                                    <td style="text-align: center;">Camión</td>   
                                <?php }?>
                            </tr>
                    <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>    
            </table>
        </section>
</body>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

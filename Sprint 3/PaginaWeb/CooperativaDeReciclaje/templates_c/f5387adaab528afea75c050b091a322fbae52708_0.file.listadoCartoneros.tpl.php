<?php
/* Smarty version 3.1.34-dev-7, created on 2021-07-07 22:45:47
  from 'C:\xampp\htdocs\tpe-metodologias\TPE-IMDS-grupo02\PaginaWeb\CooperativaDeReciclaje\templates\listadoCartoneros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60e6127bd5f652_05298734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5387adaab528afea75c050b091a322fbae52708' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-metodologias\\TPE-IMDS-grupo02\\PaginaWeb\\CooperativaDeReciclaje\\templates\\listadoCartoneros.tpl',
      1 => 1625690566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:mensaje.tpl' => 2,
    'file:formularioCartoneros.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60e6127bd5f652_05298734 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body class="fondo">
    <section class="overlay">
        <br>
        <h2>Listado de cartoneros</h2>
         <br><br>
        <?php if ((isset($_smarty_tpl->tpl_vars['tipoAlerta']->value)) && $_smarty_tpl->tpl_vars['tipoAlerta']->value == "info") {?>
            <?php $_smarty_tpl->_subTemplateRender("file:mensaje.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } else { ?>
            <table class="table mb-3 table table-striped table-success table-hover table-borderless">
                <thead>
                    <tr>
                        <th scope="col" style="text-align: center;">DNI</th>
                        <th scope="col" style="text-align: center;">Nombre</th>
                        <th scope="col" style="text-align: center;">Apellido</th>
                        <th scope="col" style="text-align: center;">Dirección</th>
                        <th scope="col" style="text-align: center;">Fecha de nacimiento</th>
                        <th scope="col" style="text-align: center;">Vehículo</th>
                        <th scope="col" style="text-align: center;">Estado</th>
                        <th scope="col"> </th>
                        <th scope="col"> </th>
                    </tr>
                </thead>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cartoneros']->value, 'cartonero');
$_smarty_tpl->tpl_vars['cartonero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cartonero']->value) {
$_smarty_tpl->tpl_vars['cartonero']->do_else = false;
?>
                <tbody>
                <tr class="table">
                    <th scope="row" style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['cartonero']->value->DNI_cartonero;?>
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
                    <td style="text-align: center;"><a type="button" href="editar_cartonero/<?php echo $_smarty_tpl->tpl_vars['cartonero']->value->DNI_cartonero;?>
" class="btn btn-light"><i class="far fa-edit"></i></a></td>
                    <td style="text-align: center;"><a type="button" href="borrar_cartonero/<?php echo $_smarty_tpl->tpl_vars['cartonero']->value->DNI_cartonero;?>
" class="btn btn-light"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
                </tbody>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
            <?php $_smarty_tpl->_subTemplateRender("file:mensaje.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("file:formularioCartoneros.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </section>
</body>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

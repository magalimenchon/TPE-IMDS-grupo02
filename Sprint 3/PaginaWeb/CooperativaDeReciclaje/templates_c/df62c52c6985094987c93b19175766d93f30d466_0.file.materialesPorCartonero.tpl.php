<?php
/* Smarty version 3.1.34-dev-7, created on 2021-07-07 22:44:22
  from 'C:\xampp\htdocs\tpe-metodologias\TPE-IMDS-grupo02\PaginaWeb\CooperativaDeReciclaje\templates\materialesPorCartonero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60e61226281661_15697073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df62c52c6985094987c93b19175766d93f30d466' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-metodologias\\TPE-IMDS-grupo02\\PaginaWeb\\CooperativaDeReciclaje\\templates\\materialesPorCartonero.tpl',
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
function content_60e61226281661_15697073 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body class="fondo">
    <section class="overlay">
        <br>
        <h2>Materiales acopiados</h2>
         <br><br>
        <?php if ((isset($_smarty_tpl->tpl_vars['mensaje']->value))) {?>
            <?php $_smarty_tpl->_subTemplateRender("file:mensaje.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } else { ?>
        <div style="padding: 0vw 15vw 5vw 15vw">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cartoneros']->value, 'cartonero');
$_smarty_tpl->tpl_vars['cartonero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cartonero']->value) {
$_smarty_tpl->tpl_vars['cartonero']->do_else = false;
?>
                <table class="table mb-3 table table-striped table-success table-hover table-borderless">
                <thead>
                    <tr>
                        <th>
                            Cartonero: <?php echo $_smarty_tpl->tpl_vars['cartonero']->value->nombre_cartonero;?>
 <?php echo $_smarty_tpl->tpl_vars['cartonero']->value->apellido_cartonero;?>
 - 
                            DNI: <?php echo $_smarty_tpl->tpl_vars['cartonero']->value->DNI_cartonero;?>

                        </th>                 
                    </tr>
                    <tr>    
                        <th style= "text-align: center;">Material</th>
                        <th style= "text-align: center;">Total</th>
                    </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['materiales']->value, 'material');
$_smarty_tpl->tpl_vars['material']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['material']->value) {
$_smarty_tpl->tpl_vars['material']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['material']->value->DNI_cartonero == $_smarty_tpl->tpl_vars['cartonero']->value->DNI_cartonero) {?>
                    <tr class="table">
                        <td style= "text-align: center;"><?php echo $_smarty_tpl->tpl_vars['material']->value->material_recolectado;?>
</td>
                        <td style= "text-align: center;"><?php echo $_smarty_tpl->tpl_vars['material']->value->sumatoria;?>
</td>
                    </tr>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
                </table>
                <br><br>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>
    </section>
</body>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

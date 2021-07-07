<?php
/* Smarty version 3.1.34-dev-7, created on 2021-07-07 22:44:34
  from 'C:\xampp\htdocs\tpe-metodologias\TPE-IMDS-grupo02\PaginaWeb\CooperativaDeReciclaje\templates\listadoMaterialesPorCartonero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60e612320ead43_32354635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fd7bfcb0edeac9d17f4b464515f72a0d4fb5e75' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-metodologias\\TPE-IMDS-grupo02\\PaginaWeb\\CooperativaDeReciclaje\\templates\\listadoMaterialesPorCartonero.tpl',
      1 => 1625690566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:mensaje.tpl' => 1,
    'file:formularioRecoleccion.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60e612320ead43_32354635 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body class="fondo">
<section class="overlay">
    <h2>Recolección de materiales</h2>

    <?php $_smarty_tpl->_subTemplateRender("file:mensaje.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <br><br>
    <h4>Datos personales:</h4>

    <br>
    <table class="table table-striped table-success table-hover table-borderless">
        <thead>
               <tr>
                   <th style="text-align: center;">DNI</th>
                   <th style="text-align: center;">Nombre</th>
                   <th style="text-align: center;">Apellido</th>
                   <th style="text-align: center;">Dirección</th>
                   <th style="text-align: center;">Fecha de nacimiento</th>
               </tr>
        </thead>
        <tbody>
                <tr>
                    <th style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['cartonero']->value->DNI_cartonero;?>
</th>
                    <th style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['cartonero']->value->nombre_cartonero;?>
</th>
                    <th style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['cartonero']->value->apellido_cartonero;?>
</th>
                    <th style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['cartonero']->value->direccion_cartonero;?>
</th>
                    <th style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['cartonero']->value->fecha_nac_cartonero;?>
</th>
                </tr>
        </tbody>  
    </table>

    <br><br>
    <h4>Información sobre recolecciones:</h4>
    <br>
    <?php if ((isset($_smarty_tpl->tpl_vars['filas']->value))) {?>
        <table class="table mb-3 table-hover table-borderless">
            <thead>
                <tr>
                    <th>Fecha de recolección</th>
                    <th>Nombre Material</th>
                    <th>Peso Material</th>
                </tr>
            </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filas']->value, 'fila');
$_smarty_tpl->tpl_vars['fila']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fila']->value) {
$_smarty_tpl->tpl_vars['fila']->do_else = false;
?> 
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['fila']->value->fecha_recoleccion;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['fila']->value->material_recolectado;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['fila']->value->peso_material_recolectado;?>
</td>
                    </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>    
        </table>
    <?php } else { ?>
        <div class="alert alert-info" role="alert">
            No existen pedidos de recolección actualmente
        </div>
    <?php }?>
    <br><br>
    <?php $_smarty_tpl->_subTemplateRender("file:formularioRecoleccion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <br>
           
</section>
</body>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>   <?php }
}

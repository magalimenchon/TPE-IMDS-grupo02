<?php
/* Smarty version 3.1.34-dev-7, created on 2021-07-07 22:44:34
  from 'C:\xampp\htdocs\tpe-metodologias\TPE-IMDS-grupo02\PaginaWeb\CooperativaDeReciclaje\templates\formularioRecoleccion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60e612322aa274_17786448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8686c0c982dd27971e36bd9e5ea28db1608b6008' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-metodologias\\TPE-IMDS-grupo02\\PaginaWeb\\CooperativaDeReciclaje\\templates\\formularioRecoleccion.tpl',
      1 => 1625690566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e612322aa274_17786448 (Smarty_Internal_Template $_smarty_tpl) {
?><h4> Formulario de registro de kilaje: </h4>
<br>
<form action="recoleccion" method="post">
    <div class="mb-3">
        <label class="form-label">Nombre: <?php echo $_smarty_tpl->tpl_vars['cartonero']->value->apellido_cartonero;?>
  <?php echo $_smarty_tpl->tpl_vars['cartonero']->value->nombre_cartonero;?>
</label>
        <input type="hidden" class="form-control" name="input_recoleccion_dni_cartonero_fk"
            value="<?php echo $_smarty_tpl->tpl_vars['cartonero']->value->DNI_cartonero;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['cartonero']->value->DNI_cartonero;?>
" required>
    </div>

    <label class="form-label">Material recolectado </label>
    <select name="input_recoleccion_material" id="materiales_s" required>
        <option value="" selected></option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['materiales']->value, 'material');
$_smarty_tpl->tpl_vars['material']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['material']->value) {
$_smarty_tpl->tpl_vars['material']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['material']->value->nombre_mat;?>
"><?php echo $_smarty_tpl->tpl_vars['material']->value->nombre_mat;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Peso </label>
        <input type="number" class="form-control" name="input_recoleccion_peso"
            placeholder="Ingresar kilos del material" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Fecha de recolección </label>
        <input type="date" class="form-control" name="input_recoleccion_fecha" required>
    </div>

    <div class="col text-center">
        <button type="submit" class=" btn btn-lg btn-success">Enviar</button>
    </div>
</form><?php }
}

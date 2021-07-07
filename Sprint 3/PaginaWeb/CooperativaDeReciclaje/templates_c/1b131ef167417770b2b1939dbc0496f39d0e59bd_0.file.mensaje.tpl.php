<?php
/* Smarty version 3.1.34-dev-7, created on 2021-07-07 22:44:03
  from 'C:\xampp\htdocs\tpe-metodologias\TPE-IMDS-grupo02\PaginaWeb\CooperativaDeReciclaje\templates\mensaje.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60e61213df8284_29047430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b131ef167417770b2b1939dbc0496f39d0e59bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-metodologias\\TPE-IMDS-grupo02\\PaginaWeb\\CooperativaDeReciclaje\\templates\\mensaje.tpl',
      1 => 1625690566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e61213df8284_29047430 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['mensaje']->value)) && (isset($_smarty_tpl->tpl_vars['tipoAlerta']->value))) {?>
    <?php if ($_smarty_tpl->tpl_vars['tipoAlerta']->value == "danger") {?>
        <div class="alert alert-danger" role="alert">
    <?php } elseif ($_smarty_tpl->tpl_vars['tipoAlerta']->value == "success") {?>
        <div class="alert alert-success" role="alert">
    <?php } elseif ($_smarty_tpl->tpl_vars['tipoAlerta']->value == "info") {?>
        <div class="alert alert-info" role="alert">
    <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

        </div>
<?php }
}
}

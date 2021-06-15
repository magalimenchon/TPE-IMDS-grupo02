<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-15 05:02:40
  from 'C:\xampp\htdocs\TPE_IMDS\TPE-IMDS-grupo02\SEGUNDA ENTREGA\PaginaWeb\CooperativaDeReciclaje\templates\mensaje.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c81850db48a1_14279881',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '364a5cf84d53778e0e8b91cae92a1f47f6098bbe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_IMDS\\TPE-IMDS-grupo02\\SEGUNDA ENTREGA\\PaginaWeb\\CooperativaDeReciclaje\\templates\\mensaje.tpl',
      1 => 1623726151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c81850db48a1_14279881 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['mensaje']->value)) && (isset($_smarty_tpl->tpl_vars['tipoAlerta']->value))) {?>
    <?php if ($_smarty_tpl->tpl_vars['tipoAlerta']->value == "danger") {?>
        <div class="alert alert-danger" role="alert">
    <?php } elseif ($_smarty_tpl->tpl_vars['tipoAlerta']->value == "success") {?>
        <div class="alert alert-success" role="alert">
    <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

        </div>
<?php }
}
}

<?php
/* Smarty version 3.1.34-dev-7, created on 2021-07-07 22:44:19
  from 'C:\xampp\htdocs\tpe-metodologias\TPE-IMDS-grupo02\PaginaWeb\CooperativaDeReciclaje\templates\listadoPedidosRetiro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60e612238b4635_34638975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af05d7118388d5ae37ad8cce2ba5c1473a11bb38' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-metodologias\\TPE-IMDS-grupo02\\PaginaWeb\\CooperativaDeReciclaje\\templates\\listadoPedidosRetiro.tpl',
      1 => 1625690566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60e612238b4635_34638975 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body class="fondo">
    <section class="overlay">
        <h2>Listado de pedidos de retiro</h2>
        <table class="table mb-3">
            <thead>
                <tr>
                <th scope="col">Categoria</th>
                <th scope="col">Inicio del Horario de Retiro</th>
                <th scope="col">Finalización de Horario de Retiro</th>
                <!--<th scope="col">DNI del Cartonero</th>
                <th scope="col">Usuario</th>-->
                <th scope="col">Imagen</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pedidos']->value, 'pedido');
$_smarty_tpl->tpl_vars['pedido']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pedido']->value) {
$_smarty_tpl->tpl_vars['pedido']->do_else = false;
?>
                    <tr class="table">
                        <?php if ($_smarty_tpl->tpl_vars['pedido']->value->categoria == "a") {?>
                            <td>Entra en una caja</td>
                        <?php } elseif ($_smarty_tpl->tpl_vars['pedido']->value->categoria == "b") {?>
                            <td>Entra en el baúl de un auto</td>
                        <?php } elseif ($_smarty_tpl->tpl_vars['pedido']->value->categoria == "c") {?>
                            <td>Entra en la caja de una camioneta</td>   
                        <?php } elseif ($_smarty_tpl->tpl_vars['pedido']->value->categoria == "d") {?> 
                            <td>Es necesario un camión</td>   
                        <?php }?>
                        <td><?php echo $_smarty_tpl->tpl_vars['pedido']->value->inicio_horario_retiro;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['pedido']->value->fin_horario_retiro;?>
</td>
                        <!--<td><?php echo $_smarty_tpl->tpl_vars['pedido']->value->DNI_cartonero;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['pedido']->value->id_usuario;?>
</td>-->
                        <?php if ($_smarty_tpl->tpl_vars['pedido']->value->foto !== null) {?>
                        <td><img style="width: 200px; height: 200px;" src="<?php echo $_smarty_tpl->tpl_vars['pedido']->value->foto;?>
"></td>
                        <?php }?>
                    </tr>
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

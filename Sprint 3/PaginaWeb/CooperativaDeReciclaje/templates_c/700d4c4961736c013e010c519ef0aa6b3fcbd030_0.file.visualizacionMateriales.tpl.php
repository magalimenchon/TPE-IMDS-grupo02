<?php
/* Smarty version 3.1.34-dev-7, created on 2021-07-07 22:46:52
  from 'C:\xampp\htdocs\tpe-metodologias\TPE-IMDS-grupo02\PaginaWeb\CooperativaDeReciclaje\templates\visualizacionMateriales.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60e612bcca8fd1_51378108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '700d4c4961736c013e010c519ef0aa6b3fcbd030' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-metodologias\\TPE-IMDS-grupo02\\PaginaWeb\\CooperativaDeReciclaje\\templates\\visualizacionMateriales.tpl',
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
function content_60e612bcca8fd1_51378108 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body class="fondo">
    <section class="overlay">
   
        <h2>¿Qué podemos reciclar?</h2>
        <?php $_smarty_tpl->_subTemplateRender("file:mensaje.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        
        <table class="table mb-3">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Detalle</th>
                    <th scope="col">Forma de entrega</th>
                    <th scope="col">No aceptamos</th>
                    <th scope="col">Imagen</th>
                    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
                    <th scope="col"> </th>
                    <th scope="col"> </th>
                    <?php }?>
                </tr>
            </thead>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['materiales']->value, 'material');
$_smarty_tpl->tpl_vars['material']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['material']->value) {
$_smarty_tpl->tpl_vars['material']->do_else = false;
?>
            <tbody>
            <tr class="table-warning">
                <th scope="row"><?php echo $_smarty_tpl->tpl_vars['material']->value->nombre_mat;?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['material']->value->detalle;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['material']->value->forma_entrega;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['material']->value->no_aceptado;?>
</td>
                <td><img style="max-width: 200px; max-height: 200px;" src="<?php echo $_smarty_tpl->tpl_vars['material']->value->imagen_material;?>
"></td>
                <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
                <td><a type="button" href="editar_material/<?php echo $_smarty_tpl->tpl_vars['material']->value->id_especificacion;?>
" class="btn btn-light"><i class="far fa-edit"></i></a></td>
                <td><a type="button" href="borrar_material/<?php echo $_smarty_tpl->tpl_vars['material']->value->id_especificacion;?>
" class="btn btn-light"><i class="fas fa-trash-alt"></i></a></td>
                <?php }?>
            </tr>
            </tbody>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
        <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
        <form action="material_aceptado" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Nombre material</label>
                <input type="text" class="form-control" name="material_nombre" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Detalle</label>
                <textarea type="text" class="form-control" name="material_detalle" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Forma de entrega</label>
                <textarea type="text" class="form-control" name="material_formaEntrega" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Como no se acepta</label>
                <textarea type="text" class="form-control" name="material_noAceptado" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                    <input type="file" name="material_imagen" id="imageToUpload">
                </div>
            <div class="col text-center">
                <button type="submit" class=" btn btn-lg btn-success">Agregar</button>
            </div>
        </form>
        <?php }?>

    </section>
</body>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

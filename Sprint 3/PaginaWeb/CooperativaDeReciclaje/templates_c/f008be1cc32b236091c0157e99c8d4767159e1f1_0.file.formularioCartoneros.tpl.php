<?php
/* Smarty version 3.1.34-dev-7, created on 2021-07-07 22:45:48
  from 'C:\xampp\htdocs\tpe-metodologias\TPE-IMDS-grupo02\PaginaWeb\CooperativaDeReciclaje\templates\formularioCartoneros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60e6127c06f521_10888055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f008be1cc32b236091c0157e99c8d4767159e1f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-metodologias\\TPE-IMDS-grupo02\\PaginaWeb\\CooperativaDeReciclaje\\templates\\formularioCartoneros.tpl',
      1 => 1625690566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e6127c06f521_10888055 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <section class="overlay">
            <br>
            <h2>Añadir cartonero</h2>
            <br>
            <form action="cartonero" method="post">
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="cartonero_nombre" placeholder="Nombre" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Apellido</label>
                    <input type="text" class="form-control" name="cartonero_apellido" placeholder="Apellido"  required>
                </div>
                <div class="mb-3">
                    <label class="form-label">DNI</label>
                    <input type="number" class="form-control" name="cartonero_dni" placeholder="Dirección" required>
                </div>
                <div class="mb-3">
                    <label for="title">Dirección</label>
                    <input type="text" class="form-control" name="cartonero_direccion" placeholder="Dirección" required>
                </div>
                <div class="mb-3">
                    <label for="title">Fecha nacimiento</label>
                    <input type="date" class="form-control" name="cartonero_fecha" required>
                </div>
                
                <div class="mb-3">
                <label for="title">Vehículo</label>
                    <select name="cartonero_select">
                        <option value="a"> - </option>
                        <option value="b">Auto</option>
                        <option value="c">Camioneta</option>
                        <option value="d">Camión</option>
                    </select>
                </div>
                <div class="col text-center">
                    <button type="submit" class=" btn btn-lg btn-success">Enviar</button>
                </div>
            </form>
        </section>
<?php }
}

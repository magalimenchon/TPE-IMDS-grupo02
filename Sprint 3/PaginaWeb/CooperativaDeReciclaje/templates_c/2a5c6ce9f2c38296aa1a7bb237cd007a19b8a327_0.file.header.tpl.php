<?php
/* Smarty version 3.1.34-dev-7, created on 2021-07-07 22:43:56
  from 'C:\xampp\htdocs\tpe-metodologias\TPE-IMDS-grupo02\PaginaWeb\CooperativaDeReciclaje\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60e6120ca2d126_09100038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a5c6ce9f2c38296aa1a7bb237cd007a19b8a327' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-metodologias\\TPE-IMDS-grupo02\\PaginaWeb\\CooperativaDeReciclaje\\templates\\header.tpl',
      1 => 1625690566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e6120ca2d126_09100038 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cooperativa de Reciclaje</title>
    <base href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">
    <link rel="stylesheet" href="./css/cssRecicladora.css">
    <link rel="stylesheet" href="./css/fonts/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/7f791b61f0.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
</head>

<header>
    <nav class="navegador">
        <ul class="ulnav nav justify-content-center">
            <li class="nav-item"><a class="link nav-link active" aria-current="page" href="home"> Home</a></li>
            <li class="nav-item"><a class="link nav-link active" aria-current="page" href="retiro">Solicitar retiro</a></li>
            <li class="nav-item"><a class="link nav-link active" aria-current="page" href="materialesAceptados">Materiales</a></li>
            <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Modificaciones
                </a>
                <div class="dropdown-menu" >
                    <a class="dropdown-item" style="background-color: rgba(50, 168, 21, 0.733);" href="listadoPedidoRetiro">Pedidos de retiro</a>
                    <a class="dropdown-item" style="background-color: rgba(50, 168, 21, 0.733);" href="cartoneros">Cartoneros</a>
                    <a class="dropdown-item" style="background-color: rgba(50, 168, 21, 0.733);" href="recoleccion">Registro de recolecciones</a>
                    <a class="dropdown-item" style="background-color: rgba(50, 168, 21, 0.733);" href="materiales_acopiados">Materiales acopiados</a>
                </div>
            </li>     
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['logged']->value == false) {?>
                <li class="nav-item"><a class="link nav-link active" aria-current="page" href="login">Iniciar Sesión</a></li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
            <li>
                <button class="btn btn-lg" type="button"><a href="logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a></button>
            </li>
            <?php }?>
        </ul>
    </nav>
</header><?php }
}

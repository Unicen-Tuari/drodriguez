<?php /* Smarty version Smarty-3.1.14, created on 2016-10-12 01:38:07
         compiled from ".\templates\Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63457fd77df461f39-23190470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8af2cf9940fe80cd4af304236a193241292c8f9' => 
    array (
      0 => '.\\templates\\Index.tpl',
      1 => 1476223958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63457fd77df461f39-23190470',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57fd77df634595_84959868',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fd77df634595_84959868')) {function content_57fd77df634595_84959868($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<link href="images/Caja%20Logo.ico" rel="shortcut icon" />
<head>
    <title>MTB</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/miestilo.css">
    <link rel="stylesheet" href="css/animate.min.css">
     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    [endif]-->
</head>
<body>

<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-2">
                <a href="#"><img src="images/logo.png" alt=""></a>
            </div>

            <div class="col-lg-2 col-lg-offset-4 col-md-2 col-md-offset-3 col-sm-2 col-sm-offset-4">
                <img class="imagensociales" src="images/facebook_logo-65x65.png" />
                <img class="imagensociales" src="images/twitter_h.png" />
                <img class="imagensociales" src="images/Youtube%20logo.png" />
                <img class="imagensociales" src="images/CDB%20logo.png" />
            </div>

            <div class="col-lg-2 col-lg-offset-0 col-md-2 col-md-offset-0 col-sm-2 col-sm-offset0">
                <form>
                    <p>Usuario: <br> <input type="text" name="Usuario"></p>
                    <p>Contraseña: <br> <input type="password" name="Contraseña"></p>
                    <a href="#">Registrate</a>
                </form>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">MTBMonster</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a id="home" href="#">Home</a></li>
                            <li><a id="circuitos" href="#"> Circuitos </a></li><!--id="circuitos"-->
                            <li><a id="eventos" href="#"> Eventos </a></li>
                            <li><a id="productos" href="#"> Productos </a></li>
                            <li><a id="registro" href="#"> Registro </a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a id="juego" href="#"> Juego de Dados </a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
    </div>
</div>

<div id="contenido">
</div>

<footer>
    <div>
        <ul>
            <li> Jose Hernandez 128 </li>
            <li> Tandil Bs As </li>
            <li> Codigo Postal: 7000 </li>
            <li> (0249) 4278322 </li>
        </ul>
    </div>
</footer>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins)-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed-->
<script src="js/bootstrap.min.js"></script>
<script src="js/Ajax.js"></script>
</body>
</html>
<?php }} ?>
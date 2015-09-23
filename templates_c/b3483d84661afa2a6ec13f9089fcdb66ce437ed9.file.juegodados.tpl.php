<?php /* Smarty version Smarty-3.1.14, created on 2015-09-23 21:38:53
         compiled from ".\templates\juegodados.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97575602ffcdc83943-47998911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3483d84661afa2a6ec13f9089fcdb66ce437ed9' => 
    array (
      0 => '.\\templates\\juegodados.tpl',
      1 => 1443037093,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97575602ffcdc83943-47998911',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5602ffcdc9eed7_75947903',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5602ffcdc9eed7_75947903')) {function content_5602ffcdc9eed7_75947903($_smarty_tpl) {?>
      <div class="container">
          <div class="row">
              <div class="col-xs-12 col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1 contenedor fondodados">
                  <h1 class="textojuego">Juego de Dados</h1>
                      <div class="row">
                      <div class="col-lg-4 col-lg-offset-4">
                          <div><img src="" alt=""></div>
                          <div class="input-group">
                              <span class="input-group-btn">
                                  <button class="btn btn-default" onclick="tirarVarios()" type="button">Go!</button>
                              </span>
                              <input id="cantDados" type="text" class="form-control" placeholder="Cantidad de Tiradas">
                          </div>
                      </div>
                  </div>
                  <div>
                      <h1 class="textojuego">Dados</h1>
                      <p>
                          <img id="dado1" src="images/dados/dado1.png"/>
                      </p>
                      <p>
                          <img id="dado2" src="images/dados/dado1.png"/>
                      </p>
                  </div>
                  <h3 class="textojuego">Valores de Tiradas:</h3>
                  <input type="text" id="ValoresTiradas">
                  <h3 class="textojuego">Suma Mayor:</h3>
                  <div id="margenbot"><input type="text" id="SumaMayor"></div>
              </div>
          </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/Juego.js"></script>
<?php }} ?>
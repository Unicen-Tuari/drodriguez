<?php /* Smarty version Smarty-3.1.14, created on 2015-09-23 21:36:59
         compiled from ".\templates\productos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116285602fd14c6b8d2-90874854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6df90411d030ce6933bcd9d906fbf42dbdcbb40a' => 
    array (
      0 => '.\\templates\\productos.tpl',
      1 => 1443036986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116285602fd14c6b8d2-90874854',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5602fd14ddac20_64616312',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5602fd14ddac20_64616312')) {function content_5602fd14ddac20_64616312($_smarty_tpl) {?><div class="container">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 contenedor">
            <div class=" row">
                <h1>MARCAS DE ROPA Y COMPLEMENTOS</h1>
                <a href="#" class="marcasproductos col-lg-3 col-md-3 col-sm-4 col-xs-6"><img src="images/Productos/banner1.gif"/></a>
                <a href="#" class="marcasproductos col-lg-3 col-md-3 col-sm-4 col-xs-6"><img src="images/Productos/banner6.gif"/></a>
                <a href="#" class="marcasproductos col-lg-3 col-md-3 col-sm-4 col-xs-6"><img src="images/Productos/banner11.gif"/></a>
                <a href="#" class="marcasproductos col-lg-3 col-md-3 col-sm-4 col-xs-6"><img src="images/Productos/banner10.gif"/></a>
                <a href="#" class="marcasproductos col-lg-3 col-md-3 col-sm-4 col-xs-6"><img src="images/Productos/banner13.gif"/></a>
                <a href="#" class="marcasproductos col-lg-3 col-md-3 col-sm-4 col-xs-6"><img src="images/Productos/banner14.gif"/></a>
                <a href="#" class="marcasproductos col-lg-3 col-md-3 col-sm-4 col-xs-6"><img src="images/Productos/banner2.gif"/></a>
                <a href="#" class="marcasproductos col-lg-3 col-md-3 col-sm-4 col-xs-6"><img src="images/Productos/banner4.gif"/></a>
                <a href="#" class="marcasproductos col-lg-3 col-md-3 col-sm-4 col-xs-6"><img src="images/Productos/banner5.gif"/></a>
                <a href="#" class="marcasproductos col-lg-3 col-md-3 col-sm-4 col-xs-6"><img src="images/Productos/banner15.gif"/></a>
                <a href="#" class="marcasproductos col-lg-3 col-md-3 col-sm-4 col-xs-6"><img src="images/Productos/banner17.gif"/></a>
                <a href="#" class="marcasproductos col-lg-3 col-md-3 col-sm-4 col-xs-6"><img src="images/Productos/banner16.gif"/></a>
            </div>

            <div class="row">
                <h1>MARCAS DE ROPA Y COMPLEMENTOS</h1>
                <a href="#" class="marcasproductos col-lg-3 col-md-3 col-sm-4 col-xs-6"><img src="images/Productos/banner1.gif"/></a>
                <a href="#" class="marcasproductos col-lg-3 col-md-3 col-sm-4 col-xs-6"><img src="images/Productos/banner19.gif"/></a>
                <a href="#" class="marcasproductos col-lg-3 col-md-3 col-sm-4 col-xs-6"><img src="images/Productos/banner18.gif"/></a>
                <a href="#" class="marcasproductos col-lg-3 col-md-3 col-sm-4 col-xs-6"><img src="images/Productos/banner20.gif"/></a>
                <a href="#" class="marcasproductos col-lg-3 col-md-3 col-sm-4 col-xs-6"><img src="images/Productos/banner21.gif"/></a>
                <a href="#" class="marcasproductos col-lg-3 col-md-3 col-sm-4 col-xs-6"><img src="images/Productos/banner6.gif"/></a>
                <a href="#" class="marcasproductos col-lg-3 col-md-3 col-sm-4 col-xs-6"><img src="images/Productos/banner7.gif"/></a>
                <a href="#" class="marcasproductos col-lg-3 col-md-3 col-sm-4 col-xs-6"><img src="images/Productos/banner8.gif"/></a>
                <a href="#" class="marcasproductos col-lg-3 col-lg-offset-2 col-md-3 col-md-offset-2 col-sm-4 col-xs-6"><img src="images/Productos/banner9.gif"/></a>
                <a href="#" class="marcasproductos col-lg-3 col-lg-offset-2 col-md-3 col-md-offset-2 col-sm-4 col-sm-offset-4 col-xs-6"><img src="images/Productos/banner3.gif"/></a>
            </div>


            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th> Descripci&oacuten </th>
                            <th> Precio </th>
                            <th> Producto </th>
                        </tr>
                        </thead>
                        <tbody id="datos" >
                        </tbody>
                        <tfoot>
                            <tr>
                                <td><input id="descripcion" type="text" name="Descripcion"  class="form-control" placeholder="Descripcion" tabindex="1"></td>
                                <td><input id="precio" type="text" name="Precio"  class="form-control" placeholder="Precio" tabindex="2"></td>
                                <td><input id="producto" type="text" name="Producto"  class="form-control" placeholder="Producto" tabindex="3"></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                    <div class="row">
                        <div class="button-checkbox col-lg-2 col-lg-offset-4">
                            <button id="enviar" type="button" class="btn btn-default">Enviar</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

<script src="js/Tabla.js"></script>
<?php }} ?>
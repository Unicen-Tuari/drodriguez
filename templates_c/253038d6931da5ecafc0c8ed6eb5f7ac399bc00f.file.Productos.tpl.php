<?php /* Smarty version Smarty-3.1.14, created on 2016-10-12 01:41:00
         compiled from ".\templates\Productos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1107057fd788c488a88-83140343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '253038d6931da5ecafc0c8ed6eb5f7ac399bc00f' => 
    array (
      0 => '.\\templates\\Productos.tpl',
      1 => 1476225427,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1107057fd788c488a88-83140343',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57fd788c4bb029_23649836',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fd788c4bb029_23649836')) {function content_57fd788c4bb029_23649836($_smarty_tpl) {?><div class="container">
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
                        <tbody id="datos">
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
<script src="js/Rest.js"></script>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.14, created on 2015-09-26 21:45:02
         compiled from ".\templates\listado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50525606ae76e1d029-42025687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '424176c0cc6736f8339ef20dadf5a733624b5c10' => 
    array (
      0 => '.\\templates\\listado.tpl',
      1 => 1443296594,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50525606ae76e1d029-42025687',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5606ae76e4be32_21459935',
  'variables' => 
  array (
    'productos' => 0,
    'producto' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5606ae76e4be32_21459935')) {function content_5606ae76e4be32_21459935($_smarty_tpl) {?><div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1 contenedor">
          <ul class="list-group">
            <?php  $_smarty_tpl->tpl_vars['producto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['producto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->key => $_smarty_tpl->tpl_vars['producto']->value){
$_smarty_tpl->tpl_vars['producto']->_loop = true;
?>
              <li class="list-group-item col-md-12">

                <div  class="col-md-4">
                  <?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['producto']->value['imagenes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value;?>
" alt="hola mundo" id="imagenes" />
                  <?php } ?>
                </div>

                <div class="col-md-8 texto">
                  <?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
<br><br>
                  <?php echo $_smarty_tpl->tpl_vars['producto']->value['descripcion'];?>
<br><br>
                  <?php echo $_smarty_tpl->tpl_vars['producto']->value['categoria'];?>

                </div>

              </li>
            <?php } ?>
          </ul>
        </div>
    </div>
</div>
<!-- <a href="#" class="marcasproductos col-lg-3 col-md-3 col-sm-4 col-xs-6"><img src="images/Productos/banner1.gif"/></a> -->
<?php }} ?>
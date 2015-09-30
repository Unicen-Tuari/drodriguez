<?php /* Smarty version Smarty-3.1.14, created on 2015-09-30 02:20:54
         compiled from ".\templates\ProductoCompleto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9386560b289c4a7349-38803007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3486326ec0042ef12300fa710fae1727137b95b' => 
    array (
      0 => '.\\templates\\ProductoCompleto.tpl',
      1 => 1443572449,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9386560b289c4a7349-38803007',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_560b289c4e4242_69530522',
  'variables' => 
  array (
    'producto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560b289c4e4242_69530522')) {function content_560b289c4e4242_69530522($_smarty_tpl) {?><div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1 contenedor">
          <ul class="list-group">

              <li class="list-group-item col-md-12">

                <div  class="col-md-4">

                    <img src="<?php echo $_smarty_tpl->tpl_vars['producto']->value['imagenes'];?>
" alt="hola mundo" id="imagenes" />

                </div>

                <div class="col-md-8 texto">
                  <?php echo $_smarty_tpl->tpl_vars['producto']->value["nombre_prod"];?>
<br><br>
                  <?php echo $_smarty_tpl->tpl_vars['producto']->value["descripcion"];?>
<br><br>
                  <?php echo $_smarty_tpl->tpl_vars['producto']->value["fk_id_cat"];?>


                </div>

              </li>

          </ul>

        </div>
    </div>
</div>
<?php }} ?>
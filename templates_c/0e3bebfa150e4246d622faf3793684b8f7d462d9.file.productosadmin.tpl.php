<?php /* Smarty version Smarty-3.1.14, created on 2015-09-30 06:03:57
         compiled from ".\templates\productosadmin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3410560b5f2da57980-99555998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e3bebfa150e4246d622faf3793684b8f7d462d9' => 
    array (
      0 => '.\\templates\\productosadmin.tpl',
      1 => 1443585702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3410560b5f2da57980-99555998',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'productos' => 0,
    'producto' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_560b5f2dab9428_96126120',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560b5f2dab9428_96126120')) {function content_560b5f2dab9428_96126120($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['producto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['producto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->key => $_smarty_tpl->tpl_vars['producto']->value){
$_smarty_tpl->tpl_vars['producto']->_loop = true;
?>
  <li class="list-group-item col-sm-12">

    <?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['producto']->value['imagenes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
?>
    <div  class="col-sm-1">
        <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value;?>
" alt="No cargo bien" id="imagenesAdmin" />
    </div>
    <?php } ?>

    <div class="col-sm-11 texto">
      <?php echo $_smarty_tpl->tpl_vars['producto']->value['id_prod'];?>

      <?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre_prod'];?>

      <?php echo $_smarty_tpl->tpl_vars['producto']->value['descripcion'];?>

      <?php echo $_smarty_tpl->tpl_vars['producto']->value['fk_id_cat'];?>

    </div>

  </li>
<?php } ?>
<?php }} ?>
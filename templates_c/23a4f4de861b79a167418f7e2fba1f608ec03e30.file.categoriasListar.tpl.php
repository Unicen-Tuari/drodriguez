<?php /* Smarty version Smarty-3.1.14, created on 2015-09-27 22:12:00
         compiled from ".\templates\categoriasListar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:973856084d90ad0f48-43985093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23a4f4de861b79a167418f7e2fba1f608ec03e30' => 
    array (
      0 => '.\\templates\\categoriasListar.tpl',
      1 => 1443384394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '973856084d90ad0f48-43985093',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56084d90b135d8_75586069',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56084d90b135d8_75586069')) {function content_56084d90b135d8_75586069($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value){
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
  <li class="list-group-item col-sm-12" >
    <div class="texto">
      <?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_cat'];?>

      <?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>

    </div>
  </li>
<?php } ?>
<?php }} ?>
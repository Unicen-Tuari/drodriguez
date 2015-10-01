<?php /* Smarty version Smarty-3.1.14, created on 2015-10-01 04:07:55
         compiled from ".\templates\categoriasListar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6789560c957bbff5e3-91594471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '6789560c957bbff5e3-91594471',
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
  'unifunc' => 'content_560c957bcf57a9_09602032',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560c957bcf57a9_09602032')) {function content_560c957bcf57a9_09602032($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
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
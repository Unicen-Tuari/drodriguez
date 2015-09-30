<?php /* Smarty version Smarty-3.1.14, created on 2015-09-29 02:13:49
         compiled from ".\templates\categoriasDrop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103065608482f9e15b6-67301250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f0cb530a909cd2cb86e8c350c64211c7968b730' => 
    array (
      0 => '.\\templates\\categoriasDrop.tpl',
      1 => 1443485624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103065608482f9e15b6-67301250',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5608482f9f4e46_71923860',
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5608482f9f4e46_71923860')) {function content_5608482f9f4e46_71923860($_smarty_tpl) {?>
  <!-- <?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value){
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
    <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
</a></li>
  <?php } ?> -->
  <?php if (!empty($_smarty_tpl->tpl_vars['categorias']->value)){?>
    <option value="0">Categorias</option>
    <?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value){
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['categoria']->key;
?>
      <option value="$categoria['id_cat']">
      <?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>

      </option>
    <?php } ?>
  <?php }else{ ?>
    <option value="0">No Existen Categorias</option>
  <?php }?>
<?php }} ?>
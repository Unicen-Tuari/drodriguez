<?php /* Smarty version Smarty-3.1.14, created on 2015-08-25 20:13:14
         compiled from ".\templates\home_lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2151055dcad051c8631-84394263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd97ff960e7a6ecd28cbcf2c2655cb518e716a00c' => 
    array (
      0 => '.\\templates\\home_lista.tpl',
      1 => 1440526333,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2151055dcad051c8631-84394263',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55dcad052223d2_52539680',
  'variables' => 
  array (
    'cars' => 0,
    'car' => 0,
    'propiedad' => 0,
    'clave' => 0,
    'valor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55dcad052223d2_52539680')) {function content_55dcad052223d2_52539680($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('index'=>1), 0);?>


<ul>
<?php  $_smarty_tpl->tpl_vars['propiedad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['propiedad']->_loop = false;
 $_smarty_tpl->tpl_vars['car'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['propiedad']->key => $_smarty_tpl->tpl_vars['propiedad']->value){
$_smarty_tpl->tpl_vars['propiedad']->_loop = true;
 $_smarty_tpl->tpl_vars['car']->value = $_smarty_tpl->tpl_vars['propiedad']->key;
?>
<li><?php echo $_smarty_tpl->tpl_vars['car']->value;?>
</li>
<ul>
  <?php  $_smarty_tpl->tpl_vars['valor'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['valor']->_loop = false;
 $_smarty_tpl->tpl_vars['clave'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['propiedad']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['valor']->key => $_smarty_tpl->tpl_vars['valor']->value){
$_smarty_tpl->tpl_vars['valor']->_loop = true;
 $_smarty_tpl->tpl_vars['clave']->value = $_smarty_tpl->tpl_vars['valor']->key;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['clave']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['valor']->value;?>
</li>
  <?php } ?>
</ul>
<?php } ?>

</ul>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
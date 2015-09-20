<?php /* Smarty version 3.1.27, created on 2015-08-26 01:03:16
         compiled from "C:\xampp\htdocs\Smarty\templates\autos.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:75555dcf4340f4396_39649730%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdf375b14e9c3848755984223a8d27c0b38917a3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Smarty\\templates\\autos.tpl',
      1 => 1440543786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75555dcf4340f4396_39649730',
  'variables' => 
  array (
    'titulo' => 0,
    'autos' => 0,
    'nombreauto' => 0,
    'propiedades' => 0,
    'propiedad' => 0,
    'valor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55dcf43418c939_35814964',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55dcf43418c939_35814964')) {
function content_55dcf43418c939_35814964 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '75555dcf4340f4396_39649730';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
  </head>
  <body>
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <ul>
      <?php
$_from = $_smarty_tpl->tpl_vars['autos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['propiedades'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['propiedades']->_loop = false;
$_smarty_tpl->tpl_vars['nombreauto'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['nombreauto']->value => $_smarty_tpl->tpl_vars['propiedades']->value) {
$_smarty_tpl->tpl_vars['propiedades']->_loop = true;
$foreach_propiedades_Sav = $_smarty_tpl->tpl_vars['propiedades'];
?>
        <li><?php echo $_smarty_tpl->tpl_vars['nombreauto']->value;?>
:
            <?php
$_from = $_smarty_tpl->tpl_vars['propiedades']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['valor'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['valor']->_loop = false;
$_smarty_tpl->tpl_vars['propiedad'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['propiedad']->value => $_smarty_tpl->tpl_vars['valor']->value) {
$_smarty_tpl->tpl_vars['valor']->_loop = true;
$foreach_valor_Sav = $_smarty_tpl->tpl_vars['valor'];
?>
              <?php if ($_smarty_tpl->tpl_vars['propiedad']->value == "Airbags") {?>
                <?php if ($_smarty_tpl->tpl_vars['valor']->value == true) {?>
                  Tiene Airbags
                <?php } else { ?>
                  No Tiene Airbags
                <?php }?>
              <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['valor']->value;?>
,
              <?php }?>
            <?php
$_smarty_tpl->tpl_vars['valor'] = $foreach_valor_Sav;
}
?>
        </li>
      <?php
$_smarty_tpl->tpl_vars['propiedades'] = $foreach_propiedades_Sav;
}
?>
    </ul>

  </body>
</html>
<?php }
}
?>
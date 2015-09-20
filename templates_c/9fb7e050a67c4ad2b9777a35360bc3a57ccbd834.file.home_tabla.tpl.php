<?php /* Smarty version Smarty-3.1.14, created on 2015-08-25 20:12:16
         compiled from ".\templates\home_tabla.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2667555dcaaf3712b55-78551710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fb7e050a67c4ad2b9777a35360bc3a57ccbd834' => 
    array (
      0 => '.\\templates\\home_tabla.tpl',
      1 => 1440526325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2667555dcaaf3712b55-78551710',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55dcaaf375cee2_02995683',
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
<?php if ($_valid && !is_callable('content_55dcaaf375cee2_02995683')) {function content_55dcaaf375cee2_02995683($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('index'=>2), 0);?>


<table class="table" style="width: 100%">
  <tr>
    <th>Marca</th>
    <th>Modelo</th>
    <th>Color</th>
    <th>Puertas</th>
    <th>Airbags</th>
  </tr>
<?php  $_smarty_tpl->tpl_vars['propiedad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['propiedad']->_loop = false;
 $_smarty_tpl->tpl_vars['car'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['propiedad']->key => $_smarty_tpl->tpl_vars['propiedad']->value){
$_smarty_tpl->tpl_vars['propiedad']->_loop = true;
 $_smarty_tpl->tpl_vars['car']->value = $_smarty_tpl->tpl_vars['propiedad']->key;
?>
<tr>
  <td><?php echo $_smarty_tpl->tpl_vars['car']->value;?>
</td>
  <?php  $_smarty_tpl->tpl_vars['valor'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['valor']->_loop = false;
 $_smarty_tpl->tpl_vars['clave'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['propiedad']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['valor']->key => $_smarty_tpl->tpl_vars['valor']->value){
$_smarty_tpl->tpl_vars['valor']->_loop = true;
 $_smarty_tpl->tpl_vars['clave']->value = $_smarty_tpl->tpl_vars['valor']->key;
?>
    <td>
    <?php if ($_smarty_tpl->tpl_vars['clave']->value=="Airbags"){?>
      <?php if ($_smarty_tpl->tpl_vars['valor']->value===true){?>
          <input type="checkbox" disabled="true" checked />
      <?php }else{ ?>
          <input type="checkbox" disabled="true" />
      <?php }?>
    <?php }else{ ?>
      <?php echo $_smarty_tpl->tpl_vars['valor']->value;?>

    <?php }?>
    </td>
  <?php } ?>
</tr>
<?php } ?>

</table>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
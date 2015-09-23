<?php /* Smarty version Smarty-3.1.14, created on 2015-09-23 21:27:21
         compiled from ".\templates\registro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207075602fd194d6bb9-27877771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e477e10e6ed894a35a7b91c16b02b68b21feaef' => 
    array (
      0 => '.\\templates\\registro.tpl',
      1 => 1442789065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207075602fd194d6bb9-27877771',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5602fd195c11e0_37285191',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5602fd195c11e0_37285191')) {function content_5602fd195c11e0_37285191($_smarty_tpl) {?><div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1 contenedor">
            <form role="form">
                <h2>Registro <small>Aproveche que aun anda el sistema</small></h2>
                <hr class="coloreo">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="nombre" id="name" class="form-control input-lg" placeholder="Nombre" tabindex="1"> <!-- salto en la tabulacion-->
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="apellido" id="last_name" class="form-control input-lg" placeholder="Apellido" tabindex="2">
                        </div>
                    </div>
                </div>
                <div class="form-group" >
                    <input type="text" name="nombre de usuario" id="display_name" class="form-control input-lg" placeholder="Nombre de Usuario" tabindex="3">
                </div>
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email" tabindex="4">
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Contraseña" tabindex="5">
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Repita Contraseña" tabindex="6">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-3 col-sm-3 col-md-3">
					<span class="button-checkbox">
						<button type="button" class="btn" data-color="info" tabindex="7">Enviar</button>
                        <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
					</span>
                    </div>
                    <div class="col-xs-9 col-sm-9 col-md-9">
                        Al Registrarse usted está de acuerdo con los <a href="#" data-toggle="modal" data-target="#t_and_c_m">Términos y Condiciones</a> establecidos por este sitio
                    </div>
                </div>

                <hr class="coloreo">
                <div class="row">
                    <div class="col-xs-6 col-md-6"><input type="submit" value="Registrar" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                    <div class="col-xs-6 col-md-6"><a href="#" class="btn btn-success btn-block btn-lg">Loguear</a></div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php }} ?>
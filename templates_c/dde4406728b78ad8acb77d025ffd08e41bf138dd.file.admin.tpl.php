<?php /* Smarty version Smarty-3.1.14, created on 2015-09-30 03:23:22
         compiled from ".\templates\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:297935606a6908291f2-28891100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dde4406728b78ad8acb77d025ffd08e41bf138dd' => 
    array (
      0 => '.\\templates\\admin.tpl',
      1 => 1443576185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '297935606a6908291f2-28891100',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5606a690903e28_65978729',
  'variables' => 
  array (
    'productos' => 0,
    'producto' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5606a690903e28_65978729')) {function content_5606a690903e28_65978729($_smarty_tpl) {?><html>
    <head>

    <link rel="stylesheet" href="css/bootstrap.css">
    <title>MTB</title>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">


      <!-- Bootstrap -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/miestilo.css">
      <link rel="stylesheet" href="css/animate.min.css">
       <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--  [if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      [endif]-->
  </head>

  <body>
    <header>
    </header>

    <div id="contenido"><!-- aca se ensambla con la seccion seleccionada por el usuario en el nav -->
      <div class="container">
          <div class="row">

              <div class="col-sm-7">
                <ul class="list-group">
                  <?php  $_smarty_tpl->tpl_vars['producto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['producto']->_loop = false;
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
                  </ul>

                  <form>
                    <div class="form-group">
                      <h4>Nombre del Producto</h4>
                      <input type="text" class="form-control" >
                    </div>
                    <div class="form-group">
                      <h4>Descripcion</h4>
                      <textarea class="form-control" rows="1"></textarea>
                      <!-- <input type="password" class="form-control"> -->
                    </div>
                    <!-- <div class="form-group">
                      <h4>Categoria</h4>
                      <input type="text" class="form-control" >
                    </div> -->
                    <!-- <div class="btn-group"> -->
                      <div class="form-group">
                        <select id="categorias" name="id_cat">

                        </select>
                      </div>
                    <!-- <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Categorias <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" id="categorias">
                       Listo las categorias en el dropdown
                    </ul> -->
                    <!-- </div> -->
                    <div class="form-group">
                      <br>
                      <label for="exampleInputFile">Imagen producto</label>
                      <input type="file" id="exampleInputFile" name="exampleInputFile[]">
                      <!-- <p class="help-block">Example block-level help text here.</p> -->
                    </div>
                    <button type="submit" class="btn btn-default">Cargar</button>
                  </form>

                </div>

                <div class="col-sm-5">
                  <ul class="list-group" id="categoriasList">
                    <!-- Listo las categorias-->
                  </ul>

                  <form id="formcategoria">
                    <div class="form-group">
                      <h4>Categoria</h4>
                      <input type="text" class="form-control" id="nombre_categoria" name="nombre_categoria">
                    </div>
                    <button type="submit" class="btn btn-default">Cargar</button>
                  </form>

                </div>

          </div>
      </div>
    </div> <!--  fin del contenedor -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins)-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Productos.js"></script>
    <script src="js/Categoria.js"></script>
  </body>
</html>
<?php }} ?>
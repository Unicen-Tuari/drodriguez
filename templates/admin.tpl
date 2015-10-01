<html>
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
                <ul class="list-group" id="productosList">
                  <!-- listo los productos de la base de datos -->
                </ul>

                  <form  id="formproducto">
                    <div class="form-group">
                      <h4>Nombre del Producto</h4>
                      <input type="text" class="form-control" id="nombreP" name="nombreP" >
                    </div>
                    <div class="form-group">
                      <h4>Descripcion</h4>
                      <textarea class="form-control" rows="1" id="descripcionP" name="descripcionP"></textarea>
                      <!-- <input type="password" class="form-control"> -->
                    </div>

                      <div class="form-group">
                        <select id="categoriasP" name="categoriasP">

                        </select>
                      </div>

                    <label>Imagen producto</label>
                    <input type="file" id="imagesToUpload" name="imagesToUpload[]" multiple/>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Productos.js"></script>
    <script src="js/Categoria.js"></script>
  </body>
</html>

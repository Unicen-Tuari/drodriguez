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
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    [endif]-->
</head>

  <body>
    <header>
      <div class="container">
        <div class="row">
            <div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-2">
                  <a href="#"><img src="images/logo.png" alt=""></a>
            </div>

            <div class="col-lg-2 col-lg-offset-4 col-md-2 col-md-offset-3 col-sm-2 col-sm-offset-4">
                <img class="imagensociales" src="images/facebook_logo-65x65.png" />
                <img class="imagensociales" src="images/twitter_h.png" />
                <img class="imagensociales" src="images/Youtube%20logo.png" />
                <img class="imagensociales" src="images/CDB%20logo.png" />
            </div>

            <div class="col-lg-2 col-lg-offset-0 col-md-2 col-md-offset-0 col-sm-2 col-sm-offset0">
                <form>
                    <p>Usuario: <br> <input type="text" name="Usuario"></p>
                    <p>Contraseña: <br> <input type="password" name="Contraseña"></p>
                    <a href="#">Registrate</a>
                </form>
              </div>
          </div>
      </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">MTBMonster</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a id="home" href="#">Home</a></li>
                                <li><a id="circuitos" href="#"> Circuitos </a></li><!--id="circuitos"-->
                                <li><a id="eventos" href="#"> Eventos </a></li>
                                <li><a id="productos" href="#"> Productos </a></li>
                                <li><a id="registro" href="#"> Registro </a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a id="juego" href="#"> Juego de Dados </a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </div>
    </div>

    <div id="contenido"><!-- aca se ensambla con la seccion seleccionada por el usuario en el nav -->

      <div class="container">
          <div class="row">
              <div class="col-md-10 col-md-offset-1 col-sm-12">
                  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                          <div class="item active">
                              <img src="images/Carousel/3.jpg" alt="...">
                          </div>
                          <div class="item">
                              <img src="images/Carousel/2.jpg" alt="...">
                          </div>
                          <div class="item">
                              <img src="images/Carousel/1.jpg" alt="...">
                          </div>
                      </div>

                      <!-- Controls -->
                      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                      </a>
                  </div>
              </div>
          </div>
      </div>


    </div> <!--  fin del contenedor -->

    <footer>
        <div>
            <ul>
                <li> Jose Hernandez 128 </li>
                <li> Tandil Bs As </li>
                <li> Codigo Postal: 7000 </li>
                <li> (0249) 4278322 </li>
            </ul>
        </div>
    </footer>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins)-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Ajax.js"></script>
  </body>
</html>

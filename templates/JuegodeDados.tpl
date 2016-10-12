<!DOCTYPE html>
<html lang="en">
<link href="images/Caja%20Logo.ico" rel="shortcut icon" />
<head>
    <title>MTB</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/miestilo.css">
    <!--<link rel="stylesheet" href="css/animate.min.css">-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    [endif]-->
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1 contenedor fondodados">
                <h1 class="textojuego">Juego de Dados</h1>
                    <div class="row">
                    <div class="col-lg-4 col-lg-offset-4">
                        <div><img src="" alt=""></div>
                        <div class="input-group">
                            <span class="input-group-btn">
                                <button class="btn btn-default" onclick="tirarVarios()" type="button">Go!</button>
                            </span>
                            <input id="cantDados" type="text" class="form-control" placeholder="Cantidad de Tiradas">
                        </div>
                    </div>
                </div>
                <div>
                    <h1 class="textojuego">Dados</h1>
                    <p>
                        <img id="dado1" src="images/dados/dado1.png"/>
                    </p>
                    <p>
                        <img id="dado2" src="images/dados/dado1.png"/>
                    </p>
                </div>
                <h3 class="textojuego">Valores de Tiradas:</h3>
                <input type="text" id="ValoresTiradas">
                <h3 class="textojuego">Suma Mayor:</h3>
                <div id="margenbot"><input type="text" id="SumaMayor"></div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
      <script src="js/Rest.js"></script>
</body>
</html>

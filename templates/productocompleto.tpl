<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1 contenedor">
          <ul class="list-group">

              <li class="list-group-item col-md-12">

                <div  class="col-md-4">

                    <img src="{$producto['imagenes']}" alt="hola mundo" id="imagenes" />

                </div>

                <div class="col-md-8 texto">
                  {$producto["nombre_prod"]}<br><br>
                  <h1>Producto completo</h1>
                  {$producto["descripcion"]}<br><br>
                  {$producto["fk_id_cat"]}

                </div>

              </li>

          </ul>

        </div>
    </div>
</div>

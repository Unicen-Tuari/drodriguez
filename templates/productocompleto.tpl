<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1 contenedor">
          <ul class="list-group">
            {foreach $productos as $producto}
              <li class="list-group-item col-md-12">

                <div  class="col-md-4">
                  {foreach $producto['imagenes'] as $imagen}
                    <img src="{$imagen}" alt="hola mundo" id="imagenes" />
                  {/foreach}
                </div>

                <div class="col-md-8 texto">
                  {$producto['nombre']}<br><br>
                  

                </div>

              </li>
            {/foreach}
          </ul>
        </div>
    </div>
</div>

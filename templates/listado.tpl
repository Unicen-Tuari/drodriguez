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
                  {$producto['nombre_prod']}<br><br>
                  {$producto['descripcion']}<br><br>
                  {$producto['fk_id_cat']}
                </div>

                <button class="verProducto" href="#" type="button" name="button" value={$producto['id_prod']}>Descripcion Completa</button>

              </li>
            {/foreach}
          </ul>
        </div>
    </div>
</div>

<script src="js/ProductoCompleto.js"></script>
<!-- <a href="#" class="marcasproductos col-lg-3 col-md-3 col-sm-4 col-xs-6"><img src="images/Productos/banner1.gif"/></a> -->

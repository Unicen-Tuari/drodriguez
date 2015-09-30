{foreach $productos as $producto}
  <li class="list-group-item col-sm-12">

    {foreach $producto['imagenes'] as $imagen}
    <div  class="col-sm-1">
        <img src="{$imagen}" alt="No cargo bien" id="imagenesAdmin" />
    </div>
    {/foreach}

    <div class="col-sm-11 texto">
      {$producto['id_prod']}
      {$producto['nombre_prod']}
      {$producto['descripcion']}
      {$producto['fk_id_cat']}
    </div>

  </li>
{/foreach}

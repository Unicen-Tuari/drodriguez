{foreach $categorias as $categoria}
  <li class="list-group-item col-sm-12" >
    <div class="texto">
      {$categoria['id_cat']}
      {$categoria['nombre']}
    </div>
  </li>
{/foreach}

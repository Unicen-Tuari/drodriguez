
  <!-- {foreach $categorias as $categoria}
    <li><a href="#">{$categoria['nombre']}</a></li>
  {/foreach} -->
  {if !empty($categorias)}
    <option value="0">Categorias</option>
    {foreach $categorias as $key=>$categoria}
      <option value="{$categoria['id_cat']}">
      {$categoria['nombre']}
      </option>
    {/foreach}
  {else}
    <option value="0">No Existen Categorias</option>
  {/if}

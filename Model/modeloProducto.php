<?php
include_once ('modelo.php');

class modeloProducto extends Model{

  private $productos;

  private function subirImagenes($imagenes){
    $carpeta = "uploads/imagenes/";
    $destinos_finales = array();
    foreach ($imagenes["tmp_name"] as $key => $value) {
      $destinos_finales[] = $carpeta.uniqid().$imagenes["name"][$key];
      move_uploaded_file($value, end($destinos_finales));
    }
    return $destinos_finales;
  }

  function getProductos(){
    $productos = array();
    $consulta = $this->db->prepare("SELECT * FROM producto");
    $consulta->execute();
  //Todas las productos
    while($producto = $consulta->fetch(PDO::FETCH_ASSOC)) {
      $consultaCategoria = $this->db->prepare("SELECT nombre FROM categoria where id_cat=?");
      $consultaCategoria->execute(array($producto['fk_id_cat']));
      $categoria_producto = $consultaCategoria->fetch();
      $producto['fk_id_cat'] = $categoria_producto['nombre'];
      $consultaImagenes = $this->db->prepare("SELECT * FROM imagen where fk_id_prod=?");
      $consultaImagenes->execute(array($producto['id_prod']));
      $imagenes_producto = $consultaImagenes->fetch();
      $producto['imagenes'] = $imagenes_producto['path'];
      $productos[]=$producto;
    }

    return $productos;
  }

  function getProducto($id){
    $producto= array();

    $consultaProducto = $this->db->prepare("SELECT * FROM producto WHERE id_prod=?");
    $consultaProducto->execute(array($id));
    $producto = $consultaProducto->fetch(PDO::FETCH_ASSOC);

    $consultaCategoria = $this->db->prepare("SELECT nombre FROM categoria where id_cat=?");
    $consultaCategoria->execute(array($producto['fk_id_cat']));
    $categoria_producto = $consultaCategoria->fetch();
    $producto['fk_id_cat'] = $categoria_producto['nombre'];

    $consultaImagen = $this->db->prepare("SELECT path FROM imagen WHERE fk_id_prod=?");
    $consultaImagen->execute(array($id));
    $imagenes_producto = $consultaImagen->fetchAll(PDO::FETCH_ASSOC)[0];
    $producto['imagenes'] = $imagenes_producto["path"];

  return $producto;
  }

  function addProducto($categoria, $nombre, $descripcion, $imagenes){
        try{
          $destinos_finales=$this->subirImagenes($imagenes);

          $this->db->beginTransaction();
          $consulta = $this->db->prepare('INSERT INTO producto(nombre_prod, descripcion, fk_id_cat) VALUES(?,?,?)');
          $consulta->execute(array($nombre, $descripcion, $categoria));
          $id_producto = $this->db->lastInsertId(); //ultimo id del elemento agregado

          foreach ($destinos_finales as $key => $value) {
            $consulta = $this->db->prepare('INSERT INTO imagen(fk_id_prod, path) VALUES(?,?)');
            $consulta->execute(array($id_producto, $value));
          }
          $this->db->commit();
        }
          catch(Exception $e){
            $this->db->rollBack();
        }
      }

}
?>

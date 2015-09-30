<?php
class ProductosModel {

  private $productos;
  private $db;

  function __construct() {
      $this->db = new PDO('mysql:host=localhost;dbname=base pagina web;charset=utf8', 'root', '');
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  // private function subirImagenes($imagenes){
  //   $carpeta = "uploads/imagenes/";
  //   $destinos_finales = array();
  //   foreach ($imagenes["tmp_name"] as $key => $value) {
  //     $destinos_finales[] = $carpeta.uniqid().$imagenes["name"][$key];
  //     move_uploaded_file($value, end($destinos_finales));
  //   }
  //
  //   return $destinos_finales;
  // }

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
      $consultaImagenes = $this->db->prepare("SELECT * FROM imagen where fk_id_producto=?");
      $consultaImagenes->execute(array($producto['id_prod']));
      $imagenes_producto = $consultaImagenes->fetchAll()[0];
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

    $consultaImagen = $this->db->prepare("SELECT path FROM imagen WHERE fk_id_producto=?");
    $consultaImagen->execute(array($id));
    $imagenes_producto = $consultaImagen->fetchAll(PDO::FETCH_ASSOC)[0];
    $producto['imagenes'] = $imagenes_producto["path"];

  return $producto;
}

  function getCategorias(){
    $categorias = array();
    $consulta = $this->db->prepare("SELECT * FROM categoria");
    $consulta->execute();
//Todas las productos
    while($categoria = $consulta->fetch(PDO::FETCH_ASSOC)) {
      $categorias[]=$categoria;
    }
    return $categorias;
  }

//   function agregarTarea($producto, $imagenes){
//
// try{
//
//   $destinos_finales=$this->subirImagenes($imagenes);
// //Inserto la tarea
//     $this->db->beginTransaction();
//     $consulta = $this->db->prepare('INSERT INTO tarea(tarea) VALUES(?)');
//     $consulta->execute(array($tarea));
//     $id_tarea = $this->db->lastInsertId();
// //Insertar las imagenes
//     foreach ($destinos_finales as $key => $value) {
//       $consulta = $this->db->prepare('INSERT INTO imagen(fk_id_tarea,path) VALUES(?,?)');
//       $consulta->execute(array($id_tarea, $value));
//     }
//     $this->db->commit();
//   }
//   catch(Exception $e){
//
//     $this->db->rollBack();
//   }
//   }
//
//   function borrarTarea($id_tarea){
//     $consulta = $this->db->prepare('DELETE FROM tarea WHERE id=?');
//     $consulta->execute(array($id_tarea));
//   }
//
//   function realizarTarea($id_tarea){
//     $consulta = $this->db->prepare('UPDATE tarea SET realizada=1 WHERE id=?');
//     $consulta->execute(array($id_tarea));
//   }
//
//   function actualizarTarea($id_tarea, $entity){
//     $consulta = $this->db->prepare('UPDATE tarea SET tarea=:tarea, realizada=:realizada WHERE id=:id');
//     $consulta->execute(array(
//       "tarea" => $entity->tarea,
//       "realizada" => $entity->realizada,
//       "id" => $id_tarea
//       )
//     );
//   }
//
//   private function subirImagenesAjax($imagenes){
//     $carpeta = "uploads/imagenes/";
//     $destinos_finales = array();
//     foreach ($imagenes as $imagen) {
//       $destino =  $carpeta.uniqid().$imagen["name"];
//       move_uploaded_file($imagen["tmp_name"], $destino);
//       $destinos_finales[] = $destino;
//     }
//     return $destinos_finales;
//   }
//
//
//   function agregarImagenes($id_tarea, $imagenes){
//     $rutas=$this->subirImagenesAjax($imagenes);
//     $consulta = $this->db->prepare('INSERT INTO imagen(fk_id_tarea,path) VALUES(?,?)');
//     foreach($rutas as $ruta){
//       $consulta->execute(array($id_tarea,$ruta));
//     }
//   }


}
?>

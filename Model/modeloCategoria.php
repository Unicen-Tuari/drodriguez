<?php
include_once ('modelo.php');

class modeloCaregoria extends Model{

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


  function addCategoria($categoria){
    if(strlen($categoria) > 4){
      try{
        $this->db->beginTransaction();
        $queryInsert = $this->db->prepare('INSERT INTO categoria(nombre) VALUES(?)');
        $queryInsert->execute(array($categoria));
        $this->db->commit();
      }
      catch(Exception $e)
      {
        $this->db->rollBack();
      }
    }
  }

}
?>

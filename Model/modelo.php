<?php
class Model{
  protected $db;

  function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=base pagina web;charset=utf8', 'root', '');
    $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
}
?>

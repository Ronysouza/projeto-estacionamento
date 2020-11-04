<?php

class Marcas_painel extends model{




 public function getMarcasPainel(){

   $array = array();


   $sql = $this->db->query("SELECT COUNT(*) FROM marcas");

      if($sql->rowCount() > 0){

      	$array = $sql->fetch();


      }

return $array;

 }








  public function getMarcasPainel_item(){

   $array = array();


   $sql = $this->db->query("SELECT * FROM marcas ORDER BY nome ASC ");

      if($sql->rowCount() > 0){

      	$array = $sql->fetchAll();


      }

return $array;

 }












}









?>
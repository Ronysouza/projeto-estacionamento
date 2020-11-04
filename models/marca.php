<?php

class marca extends model{




 public function getMarcas(){

   $array = array();


   $sql = $this->db->query("SELECT * FROM marcas");

      if($sql->rowCount() > 0){

      	$array = $sql->fetchAll();


      }

return $array;

 }











}









?>
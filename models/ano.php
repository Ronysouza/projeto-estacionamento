<?php


class ano extends model{

   

   public function getAno(){
          $array = array();


    $sql = $this->db->query('SELECT * FROM ano ORDER BY ano_do_veiculo DESC ');

      if($sql->rowCount() > 0){

      	$array = $sql->fetchAll();

  

      }
   


     return $array;







   }















}










?>
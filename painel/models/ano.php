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


   public function add_ano($ano){
        
         

   
     $array = array();


    $sql = $this->db->query("SELECT ano_do_veiculo FROM ano WHERE ano_do_veiculo = '$ano'");

      if($sql->rowCount() > 0){           
             
            return false;


      }else{

      	$this->db->query("INSERT INTO ano SET ano_do_veiculo = '$ano'");

      	return true;

      }
   

 
     









   }















}










?>
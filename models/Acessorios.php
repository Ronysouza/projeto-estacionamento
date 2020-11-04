<?php


class Acessorios extends model{

 
 public function getAcessorios($id_acessorio){
 	$array = array();

 	   $id = explode(',',$id_acessorio);


 	   foreach($id as $id_ac){


          $sql = $this->db->query("SELECT nome FROM acessorios WHERE id = $id_ac");
          
          if($sql->rowCount() > 0){

          	$array[ ]= $sql->fetch();

             

          }

           

 	   } 

 	   return $array;






 }














}//fim da classe














?>
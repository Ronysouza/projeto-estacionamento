<?php


class Acessorios extends model{

 
 public function getAcessorios(){
 	$array = array();

 	  


          $sql = $this->db->query("SELECT * FROM acessorios ORDER BY nome ASC ");
          
          if($sql->rowCount() > 0){

          	$array = $sql->fetchAll();

             

          }

           

 	  

 	   return $array;

 }








  public function getItemAcessorios_id($id){
 	$array = array();

 	  


          $sql = $this->db->query("SELECT * FROM acessorios WHERE id = '$id' ");
          
          if($sql->rowCount() > 0){

          	$array = $sql->fetchAll();

             

          }

           

 	  

 	   return $array;






 }














}//fim da classe














?>
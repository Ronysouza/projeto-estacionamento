<?php


class veiculos extends model{
  
  private $image;
  private $imagem_info;
  private $ano;

 public function getVeiculosDestaques(){

$array = array(
   'veiculos'=>array(),
   'imagens'=>array(),
   'ano'=>array()
);
$item= array();

  
   $sql = $this->db->query('SELECT * FROM veiculos_destaques ORDER BY RAND() LIMIT 6');
       
       if($sql->rowCount() > 0){

       	$array['veiculos'] = $sql->fetchAll();

      
         
         foreach($array['veiculos'] as $id){
              $idC = $id['id'];

               
                 
            $sql = $this->db->query("SELECT * FROM imagens WHERE id_veiculos = $idC  ");

                if($sql->rowCount() > 0){
                    
                    $this->image[] = $sql->fetchAll();
                          
                         

                                   
                       
                }   
                     
           
         }  

          
          foreach ($array['veiculos'] as $id_ano) {
              $id_a = $id_ano['id_ano'];
            
                $sql = $this->db->query("SELECT ano_do_veiculo FROM ano WHERE id = $id_a  ");

                if($sql->rowCount() > 0){
                    
                    $this->ano[] = $sql->fetch();
                          
                           
                           

                                   
                       
                }   










          }









 
               
            $array['imagens'][] = $this->image; 
            $array['ano'] = $this->ano;





         return $array;
          
           
       } 
 

 }


public function getVeiculoItem($id){

  $array = array(
    'veiculos_destaques'=>array(),
        'ano_item'=>array()
  );


     $sql = $this->db->query("SELECT * FROM veiculos_destaques INNER JOIN imagens ON imagens.id_veiculos = veiculos_destaques.id WHERE veiculos_destaques.id = $id ");
           
           if($sql->rowCount() > 0){

            $itens = $sql->fetchAll();
            
            $id_ano = $itens[0]['id_ano'];
             


           $sql = $this->db->query("SELECT ano_do_veiculo FROM ano WHERE id = '$id_ano'");

           if($sql->rowCount() > 0){
               

               $ano_v = $sql->fetch();

               

           }
  
              
             
             



           }


         $array['ano_item'] = $ano_v;
         $array['veiculos_destaques'] = $itens;


       

    return $array;
  







}



public function getVeiculoMarca($id_marca){

    

 $array = array();


   $sql = $this->db->query("SELECT * FROM veiculos_destaques WHERE id_marca = $id_marca ORDER BY id DESC");

      if($sql->rowCount() > 0){

        $array['veiculos_info'] = $sql->fetchAll();
          
           foreach($array['veiculos_info'] as $id){

              $id_c = $id['id'];

              $sql = $this->db->query("SELECT url_imagem FROM imagens WHERE id_veiculos =  $id_c ORDER BY id DESC"); 

                if($sql->rowCount() > 0){

                  $this->imagem_info[] = $sql->fetch();


                }


           }
  
      }

        $array['imagens_info'] = $this->imagem_info;

        

return $array;








}






public function buscaVeiculoAno($id_a){

      $array = array(
         'busca_ano'=>array(),
         'veiculos_d'=>array(),
         'busca_ano_imagens'=>array()
      );   
 

   $sql = $this->db->query("SELECT * FROM veiculos_destaques WHERE id_ano = $id_a");

   if($sql->rowCount() > 0){

       $array['veiculos_d'] = $sql->fetchAll();
       
          foreach($array['veiculos_d'] as $id_V){
             
             $id_veiculo = $id_V['id'];
              
               
              $sql = $this->db->query("SELECT url_imagem FROM imagens WHERE id_veiculos = '$id_veiculo' ");
                
                if($sql->rowCount() > 0){

                  $url_i[] = $sql->fetch();
                    

                }

          }


   }   
   if(isset($url_i) && !empty($url_i)){

$array['busca_ano_imagens'] = $url_i;
   }
              
         


return $array;

}





public function getVeiculoNome($nome_marca){

$array = array();
 


   $sql = $this->db->query("SELECT id,modelo FROM veiculos_destaques WHERE modelo LIKE '%$nome_marca%' ");

   if($sql->rowCount() > 0){

    $array = $sql->fetchAll();


   }

   return $array;




}


public function getVeiculoM($modelo){


$array = array(
  'imagem'=>array(),
  'veiculo_modelo'=>array()
    
 
);
 
 

   $sql = $this->db->query("SELECT * FROM veiculos_destaques WHERE  modelo = '$modelo' ");

   if($sql->rowCount() > 0){

    $array['veiculo_modelo'] = $sql->fetchAll();
       
       foreach ($array['veiculo_modelo'] as $item){
             
             $id_veiculo_m = $item['id'];
             $id_ano = $item['id_ano'];


          $sql = $this->db->query("SELECT url_imagem FROM imagens WHERE id_veiculos = '$id_veiculo_m' ");
                
                if($sql->rowCount() > 0){

                  $url_i[] = $sql->fetch();


                }



                  $sql = $this->db->query("SELECT ano_do_veiculo FROM ano WHERE id = '$id_ano'");

           if($sql->rowCount() > 0){
               

               $ano_v[] = $sql->fetch();

               

           }
  
          
            


       }


    


   }   

     $array['imagem'] = $url_i;
     $array['ano_item'] = $ano_v;
    
    
         


   return $array;

}





































}//fim da classe

?>
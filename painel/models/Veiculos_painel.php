<?php


class Veiculos_painel extends model{
  
  

 public function getVeiculosDestaques_painel(){
  $array = array();

  $sql = $this->db->query('SELECT COUNT(*) FROM Veiculos_destaques');

  if($sql->rowCount() > 0){

    $array = $sql->fetch();

  }

 return $array;

}





 public function getAnospainel(){
  $array = array();

  $sql = $this->db->query('SELECT COUNT(*) FROM ano');

  if($sql->rowCount() > 0){

    $array = $sql->fetch();

  }

 return $array;

}



public function addVeiculos($modelo,$km,$valor,$cor,$final_placa,$combustivel,$id_do_ano_do_carro,$id_da_marca_do_carro,$array_id_acessorios,$array_arquivo_imagem,$observacoes,$portas){          
 

      




   foreach ($array_id_acessorios as $key => $value) {
         
          $id_item[] = $key;
   }
           
 $id_item= implode(',',$id_item);
   
 


    $sql = "INSERT INTO veiculos_destaques SET modelo = '$modelo', observacoes = '$observacoes', combustivel = '$combustivel',km = '$km',valor = '$valor',portas = '$portas',cor = '$cor',final_placa = '$final_placa',id_marca='$id_da_marca_do_carro',id_ano='$id_do_ano_do_carro',id_acessorio=' $id_item'";
       $sql = $this->db->query($sql);

       $id = $this->db->query("SELECT MAX(ID) as maxId FROM veiculos_destaques ");
       $id_a = $id->fetch();

          $id_v = $id_a['maxId'];

          

 if(isset($array_arquivo_imagem)){

        
                 
                 foreach($array_arquivo_imagem['tmp_name'] as $key => $foto){
                    $nome_f = rand(0,9999).$array_arquivo_imagem['name'][$key];

                 move_uploaded_file($array_arquivo_imagem['tmp_name'][$key],"../assets/images/destaques/".$nome_f);

                 $sql = "INSERT INTO imagens SET url_imagem = '$nome_f', id_veiculos = '$id_v' ";
                    $sql = $this->db->query($sql);                       
                    
              }               
                            

           } 

}





public function getVeiculosPainel(){
    
    $array = array(
       'imagens'=>array(),
       'veiculos'=>array()


    );


 

  $sql = $this->db->query('SELECT * FROM veiculos_destaques ');

  if($sql->rowCount() > 0){

    $array['veiculos'] = $sql->fetchAll();
 
        foreach($array['veiculos'] as $id){
            $id_vi = $id['id'];

            $sql = $this->db->query("SELECT url_imagem FROM imagens WHERE id_veiculos = '$id_vi' ");
             
             $imagem[] = $sql->fetch();



       }    
  
  }
     
     $array['imagens'] = $imagem;
         
        
  

 return $array;
}


public function editVeiculosPainel($id){
 $array = array();

  $sql = $this->db->query("SELECT * FROM Veiculos_destaques WHERE id = '$id'");

  if($sql->rowCount() > 0){

    $array = $sql->fetchAll();

    

  }

 return $array;

}



public function editImagensPainel($id){



 $array = array();

  $sql = $this->db->query("SELECT * FROM imagens WHERE id_veiculos = '$id'");

  if($sql->rowCount() > 0){

    $array = $sql->fetchAll();

  

  }  



 return $array;
}





public function editAnoPainel($id){



 $array = array();

  $sql = $this->db->query("SELECT * FROM ano");

  if($sql->rowCount() > 0){

    $array = $sql->fetchAll();

  

  }  



 return $array;







}












public function editMarcasPainel(){

   $array = array();

  $sql = $this->db->query("SELECT * FROM marcas");

  if($sql->rowCount() > 0){

    $array = $sql->fetchAll();

    

  }  



 return $array;




}































}//fim da classe

?>
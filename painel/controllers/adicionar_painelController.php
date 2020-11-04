

<?php


class adicionar_painelController extends controller{

	public function index(){
	       
	       $dados = array(
	       	'qt_veiculos'=>array(),
          'ano_add'=>array(),
          'ano_nadd'=>array()
       

	       );

              $veiculos = new Veiculos_painel();
             $marcas = new Marcas_painel();
              $ano = new ano();
		     $ano = new ano();
		     $acessorios = new Acessorios();
	 
          $dados['qt_veiculos'] = $veiculos->getVeiculosDestaques_painel();
          $dados['dt_marcas'] = $marcas->getMarcasPainel();
          $dados['get_marcas'] = $marcas->getMarcasPainel_item();
          $dados['qt_ano'] = $veiculos->getAnospainel();
          $dados['ano_item'] = $ano->getAno();
          $dados['acessorios'] = $acessorios->getAcessorios();


         if(isset($_POST['modelo']) && !empty($_POST['modelo'])){

          $id_acessorios = array();
                
              $modelo = addslashes($_POST['modelo']);
              $km = addslashes($_POST['km']);
              $valor = addslashes($_POST['valor']);
              $cor = addslashes($_POST['cor']);
              $portas = addslashes($_POST['portas']);
              $final_placa = addslashes($_POST['final_placa']);
              $combustivel = addslashes($_POST['combustivel']);
              $id_do_ano_do_carro = addslashes($_POST['ano_do_carro']);
              $id_da_marca_do_carro = addslashes($_POST['item_marca']);
              $array_id_acessorios =  $_POST['id_acessorios'];
              $array_arquivo_imagem = $_FILES['arquivo_imagem'];
              $observacoes = $_POST['observacoes'];
                
                 $veiculos = new Veiculos_painel();
                
                 $veiculos->addVeiculos($modelo,$km,$valor,$cor,$final_placa,$combustivel,$id_do_ano_do_carro,$id_da_marca_do_carro,$array_id_acessorios,$array_arquivo_imagem,$observacoes,$portas);       
                  
         }

         if(isset($_POST['ano_add']) && !empty($_POST['ano_add'])){
            
            $ano_add = $_POST['ano_add'];
           
               

             
               if($ano->add_ano($ano_add)){

                      $dados['ano_add'] = 'adicionado com sucesso';  


             

              }else{
                 $dados['ano_nadd'] = 'já existe este mesmo ano adiconado no sistema';
              }







         }
    



		$this->loadTemplate('adicionar_painel',$dados);
		

	}


   public function getItemAcessorios($id){
           
          $acessorios = new Acessorios();


          $dados  = $acessorios->getItemAcessorios_id($id);
      

       echo json_encode($dados);



   }



   













	 







}
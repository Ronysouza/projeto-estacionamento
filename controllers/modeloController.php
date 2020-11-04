<?php

class modeloController extends controller{



public function index(){
	       
	       $dados = array(
      'categorias'=>array()

	       );


		
		$categorias = new Categorias();
		$veiculos = new veiculos();
		$marcas = new marca();

        $dados['categorias'] = $categorias->getCategorias();
        $dados['veiculos'] = $veiculos->getVeiculosDestaques(); 
        $dados['marcas'] = $marcas->getMarcas();
         
          

         

		$this->loadTemplate('modelo',$dados);
		

	}





public function getVeiculoModelo($id_modelo){




 
   $dados = array(
      'modelos'=>array()

	       );

           $veiculos = new veiculos();
           $marcas = new marca();




	      $dados['marcas'] = $marcas->getMarcas();
		  $dados['modelos'] = $veiculos->getVeiculoM($id_modelo);

       
        
         
         


         
          

         

		$this->loadTemplate('modelo',$dados);



















}






















}//fim classe







	?>
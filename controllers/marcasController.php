<?php

class marcasController extends controller{



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
         
          

         

		$this->loadTemplate('marcas',$dados);
		

	}

	public function getVeiculoMarcas($id_marca){

$dados = array(
      'categorias'=>array(),
      'marcas_veiculo'=>array()

	       );


		
		$categorias = new Categorias();
		 $veiculos = new veiculos();
		 $marcas = new marca();

        $dados['categorias'] = $categorias->getCategorias();
         $dados['marcas_veiculo'] = $veiculos->getVeiculoMarca($id_marca);
         $dados['marcas'] = $marcas->getMarcas();
         
   

         

		$this->loadTemplate('marcas',$dados);

	}







	public function marcasMenu(){




   $dados = array(
      'categorias'=>array()

	       );


		
		$categorias = new Categorias();
		$veiculos = new veiculos();
		$marcas = new marca();

        $dados['categorias'] = $categorias->getCategorias();
        $dados['veiculos'] = $veiculos->getVeiculosDestaques(); 
        $dados['marcas'] = $marcas->getMarcas();
         
          

         

		$this->loadTemplate('marcas_menu',$dados);







	}
















}










?>
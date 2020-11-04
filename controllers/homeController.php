<?php


class homeController extends controller{

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
         
          

         

		$this->loadTemplate('home',$dados);
		

	}


	public function getMenuCategoria($id){

 

		$dados = array(
            'categorias_menu'=>array()
		);

		$categorias = new Categorias();

         $dados['categorias_menu'] = $categorias->getMenuItem($id); 
         

               
               echo json_encode($dados['categorias_menu']);

	}



	public function getVeiculoMarca($nome_marca){

		$array = array(
             'nome_veiculo'=>array()
		);

         $veiculos = new veiculos();

         $b = $veiculos->getVeiculoNome($nome_marca);          
           
           
          


         
         echo json_encode($b);


	}









}
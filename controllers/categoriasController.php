<?php


class categoriasController extends controller{

	public function index(){
	 

		$dados = array(
            'categorias'=>array(),
            'veiculos'=>array()
		);

		$categorias = new Categorias();
		$veiculos = new veiculos();
		 $marcas = new marca();

        $dados['categorias'] = $categorias->getCategorias();
        $dados['veiculos'] = $veiculos->getVeiculos(); 
         $dados['marcas'] = $marcas->getMarcas();

	}






public function categorias_item($id){


$dados = array(
            'categorias'=>array(),
            'veiculo_item'=>array(),
            'acessorios'=>array()
		);

		$categorias = new Categorias();
		$veiculos = new veiculos();
		$acessorios = new Acessorios();
		 $marcas = new marca();

         $dados['categorias'] = $categorias->getCategorias(); 
          $dados['marcas'] = $marcas->getMarcas();
         $dados['veiculo_item'] = $veiculos->getVeiculoItem($id);
         $dados['acessorios'] = $acessorios->getAcessorios($dados['veiculo_item']['veiculos_destaques'][0]['id_acessorio']);
            
            
     

		$this->loadTemplate('categorias',$dados);
		




}

  














}//fim da classe



	?>
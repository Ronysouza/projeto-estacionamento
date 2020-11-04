
<?php    


class ano_filtroController extends controller{

public function index(){
	       
	       $dados = array(
      'categorias'=>array()

	       );


		
		$categorias = new Categorias();
		 
		$ano = new ano();
		$marcas = new marca();


        $dados['categorias'] = $categorias->getCategorias();
        $dados['ano'] = $ano->getAno();
        $dados['marcas'] = $marcas->getMarcas();
         
          

         

		$this->loadTemplate('ano_filtro',$dados);
		

	}




	public function buscaAno($id_ano){



		   $dados = array(
      'categorias'=>array()

	       );


		
		$categorias = new Categorias();
		 
		$ano = new ano();
		$veiculo = new veiculos();
		$marcas = new marca();

        $dados['categorias'] = $categorias->getCategorias();
        $dados['ano'] = $ano->getAno();
        $dados['busca_id_ano'] = $veiculo->buscaVeiculoAno($id_ano);
        $dados['marcas'] = $marcas->getMarcas();
         
          


		$this->loadTemplate('busca_ano',$dados);




	}



















}//fim da classe














?>
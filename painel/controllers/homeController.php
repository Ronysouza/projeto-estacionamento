<?php


class homeController extends controller{

	public function index(){
	       
	       $dados = array(
	       	'qt_veiculos'=>array()
       

	       );

              $veiculos = new Veiculos_painel();
             $marcas = new Marcas_painel();
		
	 
          $dados['qt_veiculos'] = $veiculos->getVeiculosDestaques_painel();
          $dados['dt_marcas'] = $marcas->getMarcasPainel();
          $dados['qt_ano'] = $veiculos->getAnospainel();
         

		$this->loadTemplate('home',$dados);
		

	}


	 







}
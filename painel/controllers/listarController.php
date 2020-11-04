<?php


class listarController extends controller{

	public function index(){
	       
	      $dados = array(
	       	'qt_veiculos'=>array()
       

	       );

              $veiculos = new Veiculos_painel();
             $marcas = new Marcas_painel();
             $ano = new ano();
		
	       

		         $dados['get_marcas'] = $marcas->getMarcasPainel_item();
		         $dados['listar_all'] = $veiculos->getVeiculosPainel();
		         $dados['ano_item'] = $ano->getAno();
	 
         
         

		$this->loadTemplate('listar',$dados);
		

	}



public function getEditar($id){

 $dados = array(
	       	'listar_all'=>array()
	       	 
       

	       );

              $veiculos = new Veiculos_painel();
               $marcas = new Marcas_painel();
		      
		     $dados['editar_veiculo'] = $veiculos->editVeiculosPainel($id);
		     $dados['editar_marca'] = $veiculos->editMarcasPainel();
		     $dados['editar_imagem'] = $veiculos->editImagensPainel($id);
		     $dados['edit_ano'] = $veiculos->editAnoPainel($id);
	    
         
         

		$this->loadTemplate('listar_edit',$dados);

}










	 







}
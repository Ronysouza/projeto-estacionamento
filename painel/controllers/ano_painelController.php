<?php


class ano_painelController extends controller{

	public function index(){
	       
	       $dados = array(

	       	'ano_listar'=>array()
	       	 
       

	       );

	       $ano = new ano();

	       $dados['ano_listar'] = $ano->getAno();

          
         

		$this->loadTemplate('ano_listar',$dados);
		

	}



}//fim da class
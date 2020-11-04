   
   <?php if(isset($marcas_veiculo['veiculos_info']) &&  !empty($marcas_veiculo)): ?>
     	<h1 class="banner-h1-marca" >Veículos da Marca - <strong style="color:  #022a4f;"><?php echo $marcas_veiculo['veiculos_info'][0]['marca'];  ?></strong></h1>

 <div style="width: 100%" class=" home-marcas">

  <div   class="home-marcas-info">
    <h2>Busque por Marcas</h2>
    <span class="underline-blue"></span><hr><br><br>
  </div>
  <div class="container-fluid variable-width">
   
  <?php foreach($marcas as $marca): ?>
        <a href="marcas/getVeiculoMarcas/<?php echo $marca['id']; ?>"><img class="img-fluid" src="assets/images/marcas/<?php echo $marca['url_imagem_marca']; ?>"></a>

  <?php endforeach;  ?>

    
     
    
    
  </div>
   

</div><hr><br><br>





  <div class="container">
  

     <?php foreach($marcas_veiculo['veiculos_info'] as $key => $item):  ?>


         <a href="categorias/categorias_item/<?php echo $item['id']; ?>"><div class="marcas-banner">
     
     <div class="row">
     	<div class="col-sm-4">
     		<img class="img-fluid" src="assets/images/destaques/<?php echo $marcas_veiculo['imagens_info'][$key][0]; ?>">

     	</div>
     	<div class="col-sm-8">
     	 <div class="info-banner">
     	 	<h1><?php echo $item['marca'];  ?> - <?php echo $item['modelo'];  ?></h1>
     	 	<P><strong>Modelo:</strong> <?php echo $item['modelo'];  ?></P>
            <P ><strong>Combustível:</strong> <?php echo $item['combustivel'];  ?></P>
           

     	 </div>	 
     	 <div class="info-banner">
     	 		<strong><h2><span>R$</span> <strong> <?php echo $item['valor'];  ?></strong></h2></strong>
     	  
            <P ><strong>Cor:</strong> <?php echo $item['cor'];  ?></P>
     	  

     	 </div>	  

     	</div> 
     </div> 
  	</div></a>


     <?php endforeach; ?>



  	
  </div>






 
























  	
  </div>

















   <?php else: ?>
          <div id="vazio" class="alert alert-warning" ><h1>ainda não contém veiculos desta marca na loja</h1></div>

   <?php endif; ?> 

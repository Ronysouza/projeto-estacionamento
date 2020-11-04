   
   

   <?php if(isset($modelos['veiculo_modelo']) &&  !empty($modelos['veiculo_modelo'])): ?>
      <h1 class="banner-h1-marca" >Veículos Modelo - <strong style="color:  #022a4f;"><?php  echo strtoupper($modelos['veiculo_modelo'][0]['modelo']);  ?></strong></h1>

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
  

     <?php foreach($modelos['veiculo_modelo'] as $key => $item):  ?>


         <a href="categorias/categorias_item/<?php echo $item['id']; ?>"><div class="marcas-banner">
     
     <div class="row">
      <div class="col-lg-4">
        <img class="img-fluid" src="assets/images/destaques/<?php echo $modelos['imagem'][$key][0]; ?>">

      </div>
      <div class="col-lg-8">
       <div class="info-banner">
        <h1><?php  echo strtoupper($item['marca']);  ?> - <?php  echo strtoupper($item['modelo']);  ?></h1>
        <P><strong>Modelo:</strong> <?php  echo strtoupper($item['modelo']);  ?></P>
        
        <P ><strong>Combustível:</strong> <?php echo $item['combustivel'];  ?></P>
           

       </div>  
       <div class="info-banner">
          <strong><h2><span>R$</span> <strong> <?php echo strtoupper($item['valor']);  ?></strong></h2></strong>
        <P><strong>Ano:</strong> <?php echo strtoupper($modelos['ano_item'][$key][0]);  ?></P>
            <P ><strong>Cor:</strong> <?php  echo strtoupper($item['cor']);  ?></P>
        

       </div>   

      </div> 
     </div> 
    </div></a>


     <?php endforeach; ?>



    
  </div>






 
























    
  </div>

















   <?php else: ?>

         

          <div id="vazio" class="alert alert-warning" ><h1>nao contem veiculos desta marca na loja</h1></div>

   <?php endif; ?> 
  
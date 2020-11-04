<div class="container home-marcas">
  <div class="home-marcas-info">
    <h2>Busque por Marcas</h2>
    <span class="underline-blue"></span><hr><br><br>
  </div>
   
    <div class="container">
    	
   

  	<div class="row banner-marcas-meu">

  		 <?php foreach($marcas as $marca): ?>
  		<div class="col-sm-4">
  			 <a href="marcas/getVeiculoMarcas/<?php echo $marca['id']; ?>"><div class="img-marca">
  				<img src="assets/images/marcas/<?php echo $marca['url_imagem_marca']; ?>">
  			</div> </a>
  			
  		</div>

  		  <?php endforeach;  ?>
  		
  	</div>
   
 

 </div>

      



    
     
    
    
  
<hr>
  

</div><br><br><br>
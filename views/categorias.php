
<div class="container">
	
  <div class="banner-categorias"><span><h1><?php  echo strtoupper($veiculo_item['veiculos_destaques'][0]['marca']);  ?> - <?php  echo strtoupper($veiculo_item['veiculos_destaques'][0]['modelo']);  ?></h1></span>
   <p><?php echo $veiculo_item['ano_item'][0];  ?> - <?php  echo strtoupper( $veiculo_item['veiculos_destaques'][0]['combustivel']);  ?> - <?php  echo strtoupper($veiculo_item['veiculos_destaques'][0]['portas']);  ?> PORTAS</p>
   <div class="banner-categorias-info">
   	<span><h1><span class="span-1">R$</span> <strong><?php echo $veiculo_item['veiculos_destaques'][0]['valor'];  ?></strong></h1></span>
   </div>
   

  </div><hr>

  





 <div class="row">
 	<div class="col-lg-8">
 		
 		<div class="slider-for banner_carrossel-categorias">
            <?php foreach($veiculo_item['veiculos_destaques'] as $image):  ?>

            	<img class="img-fluid" src="assets/images/destaques/<?php echo $image['url_imagem'];  ?>">

                 <?php endforeach; ?>


 		    
        

 		</div>
 		<br>
 		<div class="slider-nav">

         <?php foreach($veiculo_item['veiculos_destaques'] as $image):  ?>

            	<img class="img-fluid" src="assets/images/destaques/<?php echo $image['url_imagem'];  ?>">

                 <?php endforeach; ?>

 
 		</div>

  

 


 	</div>

    <div class="col-lg-4 categorias-item">

 <div class="row">
   	<div class="col-6">
   		<strong>Fabricação</strong>
   		<p><?php echo $veiculo_item['ano_item'][0]; ?></p>
   	</div>
   	<div class="col-6">
   		<strong>Modelo</strong>
   		<p><?php echo strtoupper($veiculo_item['veiculos_destaques'][0]['modelo']);  ?></p>
   	</div>
   	<div class="col-6">
   		<strong>final da Placa</strong>
   		<p><?php echo strtoupper($veiculo_item['veiculos_destaques'][0]['final_placa']);  ?></p>
   	</div>
   	<div class="col-6">
   		<strong>KM</strong>
   		<p><?php  echo strtoupper($veiculo_item['veiculos_destaques'][0]['km']);  ?></p>
   	</div>
    
    
   	<div class="col-6">
   		<strong>cor</strong>
   		<p><?php  echo strtoupper( $veiculo_item['veiculos_destaques'][0]['cor']);  ?></p>
   	</div>
   	<div class="col-6">
   		<strong>Marca</strong>
   		<p><?php  echo strtoupper($veiculo_item['veiculos_destaques'][0]['marca']);  ?></p>
   	</div>
   	<div class="col-6">
   		<strong>Portas</strong>
   		<p><?php  echo strtoupper($veiculo_item['veiculos_destaques'][0]['portas']);  ?></p>
   	</div>
   	<div class="col-6">
   		<strong>combustivel</strong>
   		<p><?php  echo strtoupper($veiculo_item['veiculos_destaques'][0]['combustivel']);  ?></p>
   	</div>
  
</div>



<div class="botao_contato">
      <a target="_blank" href="http://api.whatsapp.com/send?1=pt_BR&phone=5511950264230"> <button class="btn btn-success">Falar via whats</button></a>
    </div><br>
    
   
  
    <div class="botao_contato">
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Enviar E-mail
</button>
    </div>








 	 
 	</div>



 </div>
<hr>


<div class="banner-acessorios-info">
	<h1>Acessorios</h1>
   
  <div class="row">
     

   
  
  			
     <?php foreach($acessorios as $ac):  ?>

     		<div class="col-lg-4">
        <div class="acessorios-info">
                 
     	         <ul>
     	         	<li><?php  echo strtoupper($ac['nome']); ?> </li>
     	         </ul>
  				 
  				
   		 
   			</div>
   		</div>
     <?php endforeach;  ?>


  		
  		

  	 
 
  	 



  </div>
  



</div>





<hr> 

<div class="container banner-h1-info-categorias">
	<h1>Observações</h1>
	<p><?php echo utf8_encode($veiculo_item['veiculos_destaques'][0]['observacoes']);  ?></p>
	
</div>


<hr>
<br><br>


 
<br><br>
</div>





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











<div class="container ">
	<div class="mapa-info-banner">
		
	
	<div class="mapa-info">
		<h1>VER MAPA</h1>
	</div>
	</div>

</div>

<br><br>












<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contato</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
    	
   <form  class="formulario" method="POST">

<div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input name="contato" type="nate" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="seu nome*">
    <small id="emailHelp" class="form-text text-muted">Digite seu nome no campo acima</small>
  </div>


  <div class="form-group">
    <label  for="exampleInputEmail1">Email  </label>
    <input name="contato" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" email*">
    <small id="emailHelp" class="form-text text-muted">Digite seu E-mail no campo acima</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Fone</label>
    <input name="contato" type="number" class="form-control" id="exampleInputPassword1" placeholder="Telefone*">
    <small id="emailHelp" class="form-text text-muted">Digite seu Telefone no campo acima</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mensagem</label>
    <textarea class="form-control" id="exampleInputPassword1" placeholder="Mensagem *"></textarea>
    <small id="emailHelp" class="form-text text-muted">Digite sua Mensagem no campo acima</small>
  </div>

  
  <button type="submit" style="background-color:  #4B0082;border:#696969;color: #fff" class="btn  ">Enviar</button>
</form>










      </div>
     
    </div>
  </div>
</div>






 
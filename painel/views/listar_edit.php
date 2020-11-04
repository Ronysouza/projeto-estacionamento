 

<div class="container-fluid">
<br>
<h4>Editar</h4>
<form method="POST" enctype="multipart/form-data">
	<input type="file" name="imagem"><br><br>

	<input type="submit" class="btn-primary" value="Cadastrar Imagem">
	
</form>

<br><br>


   <div class="adicionar_info">
   	<form method="POST" enctype="multipart/form-data">  


    <div class="row">
    	

    	<div class="col-lg-4">
    		<div class="banner-input">
    			<div class="banner-input-info">
    				<span>Modelo</span><br>
   	          <input type="text" name="modelo" value="<?php echo $editar_veiculo[0]['modelo'] ?>">
    			</div>
    			    





    		</div>    		
    	</div>

    	<div class="col-lg-4">
    		<div class="banner-input">
    			<div class="banner-input-info">
    				<span>Valor</span><br>
   	            <input type="text" name="valor" value="<?php echo $editar_veiculo[0]['valor'] ?>">
    			</div>
    			
    			

    		</div>    		
    	</div>
 

 

    	<div class="col-lg-4">
    		<div class="banner-input">
    			<div class="banner-input-info">
    				<span>Ano do Veículo</span><br>
                <select name="ano_do_carro">
                	<option>- Selecione -</option>
                	   <?php foreach($edit_ano as $ano): ?>
                        <option <?php if($editar_veiculo[0]['id_ano'] == $ano['id'] ):?> selected  <?php endif;  ?> value="<?php echo $ano['id']; ?>" ><?php echo $ano['ano_do_veiculo']; ?></option>

                	   <?php endforeach;  ?>


                </select>
                 

   	           
    			</div>
    			 

    		</div>     		
    	</div>


   	<div class="col-lg-4">
    		<div class="banner-input">
    			<div class="banner-input-info">
    				<span>Marca</span><br>
                <select name="item_marca">
                	<option>- Selecione -</option>
                	   <?php foreach($editar_marca as $marca_item): ?>
                        <option value="<?php echo $marca_item['id']; ?> "
                         <?php if($editar_veiculo[0]['id_marca'] == $marca_item['id'] ):?> selected  <?php endif;  ?>  ><?php echo $marca_item['nome']; ?></option>

                	   <?php endforeach;  ?>


                </select>
                 

   	           
    			</div>
    			 

    		</div>     		
    	</div>
     
    </div>


   	  <input type="submit" class="btn btn-secondary" value="Enviar">
    
    	</form>
     </div>

</div>

</div><br><br>
<hr>

<div class="container-fluid">
	<br>
<h3>Fotos</h3>
<br>
   <div class="adicionar_info">
   	
    <div class="row">
    	      
    	      <?php foreach($editar_imagem as $img):  ?>

    	      	<div class="col-lg-4">
    		<form method="POST" enctype="multipart/form-data">  
    		<div class="banner-input imagen-listar">
    			 <img class="img-fluid" src="../assets/images/destaques/<?php echo $img['url_imagem'];  ?>"><br><br>
                     <input type="file" name="imagem"><br><br>
    			 <input type="submit" class="btn-primary" value="Editar Imagem">                

    		</div>  <br><br> 
    		</form> 		
    	</div>



    	      <?php endforeach;  ?>
       
    	


    
 

 

    




</div>
<div class="container-fluid">
	<br>
	<h2>Adicionar</h2>
	<br>
     
        <div class="">

            <div class="add_ano">
                <form method="POST">                   
               <?php if(isset($ano_add) && !empty($ano_add)):?>
              <div class="alert alert-success"><center><?php echo $ano_add ?></center></div>

              <?php elseif(isset($ano_nadd) && !empty($ano_nadd)):  ?>
               <div class="alert alert-warning"><center><?php echo $ano_nadd ?></center> </div>

              <?php endif;  ?>
              <input type="submit" class=" btn-primary" value="Adicionar ano"><input type="number" name="ano_add">

            <a href="ano_painel"><span class="add_ano_info">Listar</span></a>
             </form>
        </div>
</div>
<br><br>
        <div class="">

             <div class="add_ano">
                <form method="POST">                   
               
              <input type="submit" class="btn-success" value="Adicionar marca"><input  type="number" name="marca" placeholder="  nome da marca">

              <input style="padding: 2px;" type="file" name="name_marca">

            <a href=""><span class="add_ano_info">Listar marca</span></a>
             </form>
        </div>
        
    </div>
  
  
  </div><br>
   
  <br>
	<div class="container-fluid">
        
   
   <div class="adicionar_info">
   	<form method="POST" enctype="multipart/form-data">  
    <div class="row">
    	

    	<div class="col-lg-4">
    		<div class="banner-input">
    			<div class="banner-input-info">
    				<span>Modelo</span><br>
   	           <input type="text" name="modelo">
    			</div>
    			<div class="banner-input-info">
    				<span>Km</span><br>
   	           <input type="number" name="km">
    			</div>
    			

    		</div>    		
    	</div>

    	<div class="col-lg-4">
    		<div class="banner-input">
    			<div class="banner-input-info">
    				<span>Valor</span><br>
   	           <input type="number" name="valor">
    			</div>
    			<div class="banner-input-info">
    				<span>Cor</span><br>
   	           <input type="text" name="cor">
    			</div>
    			

    		</div>    		
    	</div>

    	<div class="col-lg-4">
    		<div class="banner-input">
    			<div class="banner-input-info">
    				<span>Final da Placa</span><br>
   	          <select name='final_placa'>
                	<option>- selecione -</option>
                	<option value="0">0</option>
                	<option value="1">1</option>
                	<option value="2">2</option>
                	<option value="3">3</option>
                	<option value="4">4</option>
                	<option value="5">5</option>
                	<option value="6">6</option>
                	<option value="7">7</option>
                	<option value="8">8</option>
                	<option value="9">9</option>
                </select>

    			</div>
    			 

    		</div>     		
    	</div>


    		<div class="col-lg-4">
    		<div class="banner-input">
    			<div class="banner-input-info">
    				<span>Combustível</span><br>
                <select name='combustivel'>
                	<option>- selecione -</option>
                	<option value="alcool">Alcool</option>
                	<option value="gasolina">Gasolina</option>
                	<option value="flex">Flex</option>
                </select>

   	           
    			</div>
    			 

    		</div>     		
    	</div>

    	<div class="col-lg-4">
    		<div class="banner-input">
    			<div class="banner-input-info">
    				<span>Ano do Veículo</span><br>
                <select name="ano_do_carro">
                	<option>- Selecione -</option>
                	   <?php foreach($ano_item as $ano): ?>
                        <option value="<?php echo $ano['id']; ?>" ><?php echo $ano['ano_do_veiculo']; ?></option>

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
                	   <?php foreach($get_marcas as $marca_item): ?>
                        <option value="<?php echo $marca_item['id']; ?>" ><?php echo $marca_item['nome']; ?></option>

                	   <?php endforeach;  ?>


                </select>
                 

   	           
    			</div>
    			 

    		</div>     		
    	</div>
 

    	<div class="col-lg-4">
    		<div class="banner-input">
    			<div class="banner-input-info">
    				<span>Imagem</span><br>
   	           <input type="file" name="arquivo_imagem[]" multiple="">
    			</div>   			 

    		</div>    		
    	</div>


<div class="col-lg-4">
    		<div class="banner-input">
    			<div class="banner-input-info">
    				<span >Acessórios</span><br>
                <select class="acessorios"  name="item_acessorios">
                	<option>- Selecione -</option>
                	   <?php foreach($acessorios as $acessorios_item): ?>
                        <option value="<?php echo $acessorios_item['id']; ?>" ><?php echo $acessorios_item['nome']; ?></option>


                	   <?php endforeach;  ?>


                </select>
                    
                    <div class="name_marca">
                    	 
                    </div>

                   

   	           
    			</div>

    			
    			 

    		</div>    


    	</div>



    	            <div class="col-lg-4">
    		<div class="banner-input">
    			<div class="banner-input-info">
    				<span>Observação</span><br>
   	           <input type="text" name="observacoes">
    			 </div>
    			</div>
    		</div>
     






       <div class="col-lg-4">
    		<div class="banner-input">
    			<div class="banner-input-info">
    				<span>Portas</span><br>
   	           <input type="text" name="portas">
    			 </div>
    			</div>
    		</div>
     


    
    	
    </div>


   	  <input type="submit" class="btn btn-secondary" value="Enviar">
    





    	</form>
   	 


   </div>







</div> </div>
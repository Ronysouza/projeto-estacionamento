

<div class="container-fluid">
	<br><br>

<h1>Listar todos</h1>
<BR>

<div class="banner-listar">
	
</div> 	

</div>

<table class="table table-striped table-listar">
   <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Imagem</th>
      <th scope="col">Modelo</th>
      <th scope="col">Ano</th>
      <th scope="col">Ações</th>
    </tr>
   </thead>
  <tbody>
     <?php foreach($listar_all['veiculos'] as $key => $v_item):?>
 <tr>
      <th scope="row"><?php echo $v_item['id'];  ?></th>
      <td><img height="40" width="80" src="../assets/images/destaques/<?php echo $listar_all['imagens'][$key][0]; ?>"></td>
      
      <td><?php echo $v_item['modelo'];  ?></td>
      <td><?php echo $v_item['id_ano'];  ?></td>
      <td>
           <a class="btn btn-sm btn-primary" href="listar/getEditar/<?php echo $v_item['id'];  ?>"><span   ></span> <img height="20" src="../assets/images/icones/edit-button.png"></a>
      	<a class="btn btn-sm btn-danger" href="listar/excluir/<?php echo $v_item['id'];  ?>"><span class=" "></span> <img height="20" src="../assets/images/icones/lixeira.png"></a>
           
      </td>
    </tr>


     <?php endforeach; ?>
 


   

    
  </tbody>
</table>
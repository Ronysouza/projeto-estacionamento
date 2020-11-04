

 




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
      <th scope="col">Ano</th>
      <th scope="col">Açoes</th>       
    </tr>
   </thead>
  <tbody>
     <?php foreach($ano_listar as $ano_item):?>
 <tr>
 	<td><?php echo $ano_item['id']; ?></td>
      <td><?php echo $ano_item['ano_do_veiculo']; ?></td>
      <td>
           <a class="btn btn-sm btn-primary" href=" "><span   ></span> <img height="20" src="../assets/images/icones/edit-button.png"></a>
      	<a class="btn btn-sm btn-danger" href=" "><span class=" "></span> <img height="20" src="../assets/images/icones/lixeira.png"></a>
           
      </td>
    </tr>


     <?php endforeach; ?>
 


   

    
  </tbody>
</table>
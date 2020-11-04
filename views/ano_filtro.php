<div class="container">
	<h1 class="banner-ano-h1">FILTRO POR ANO</h1>
	<div class="row">

		<?php foreach($ano as $a):  ?>

            <div class="col-lg-2 ">
            <a href="ano_filtro/buscaAno/<?php echo $a['id']; ?>">	<div class="ano-info">
            		
            	
            	<h2><?php echo $a['ano_do_veiculo']; ?></h2>
			</div></a>
		</div>
		<?php endforeach; ?>
		
		
	</div>
	
</div>
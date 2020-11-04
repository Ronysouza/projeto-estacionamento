<div id="carouselExampleControls" class="carousel slide banner-carrossel" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img   class="d-block w-100" src="<?php echo BASE_URL;?>assets/images/banner/banner-02.jpg" alt="First slide">

       <div  class="carousel-caption d-none d-md-block">
    <h1>Concenssionária LUXURY - motor club</h1>
    
  </div>
    </div>
    <div class="carousel-item">
      <img  class="d-block w-100" src="<?php echo BASE_URL;?>assets/images/banner/banner-01.jpg" alt="Second slide">
       <div class="carousel-caption d-none d-md-block">
    <h1>Vendas de carros Usados</h1>
    
  </div>
    </div>
    <div class="carousel-item">
      <img   class="d-block w-100" src="<?php echo BASE_URL;?>assets/images/banner/banner-03.jpg" alt="Third slide">
       <div class="carousel-caption d-none d-md-block">
     <h1>Estacionamento de carros na cidade de Guapiara</h1>
    
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><br><br>



<div  class="container-fluid home-info">
  <center><h1 >Veículos</h1></center><br>
  
     <h4>ESPECIAIS USADOS</h4>
 
    <hr>
 
<?php //var_dump($veiculos['imagens']);exit();   ?>



  <div class="row">   

    <?php foreach($veiculos['veiculos'] as $key => $veiculo_item):   ?>

          

    <div class="col-lg-4">

     <a href="<?php echo BASE_URL; ?>categorias/categorias_item/<?php echo $veiculo_item['id']; ?>"> <div class="home-carossel-info">
              <div class="autoplay">
                  <?php foreach($veiculos['imagens'] as $key_ano => $imagem_item): ?>

                    <?php foreach($imagem_item[$key] as $image): ?>

                          

                           <img class="img-fluid" src="<?php echo BASE_URL;?>assets/images/destaques/<?php echo $image['url_imagem']; ?>">
                      <?php endforeach;  ?>


                  
                  
                   

                   <?php endforeach;  ?>     
                
              </div>        
              <div class="banner-carrossel-destaques" >
               <div class="container-fluid">

                <div class="row">
                

                      <div class="col-lg-4 h3">
                        
                        <h3>Destaques</h3>

                        

                      </div>

                      <div class="col-lg-8 h2">
                          
                        <h2><strong>R$ <?php echo  $veiculo_item['valor']; ?></strong></h2>
                     
                      </div>

                    
                      </div>  
               

                </div>


              <br>
              <strong class="nome-car"><?php echo $veiculo_item['modelo']; ?></strong>

               <hr>

               <div class="info-desc-home">
                     <span><strong>KM</strong> <?php echo $veiculo_item['km']; ?></span>
                    <span><strong>ano</strong> <?php echo $veiculos['ano'][$key][0]; ?></span>
                   <span> <strong>combustivel</strong> <?php echo $veiculo_item['combustivel']; ?></span>

               </div> 
         </div>
             
       
      

      
    </div></a>

      </div>


   <?php endforeach;  ?>







    </div>
  </div>







  <div class="container meio-info-home">
    <h1>Concenssionária LUXURY - motor club </h1>
    
  <p>
      Em busca de uma concessionária em que você possa confiar, tanto por ótimos preços quanto por atendimento de alta qualidade? A LUXURY - motor club trata a necessidade de cada cliente individual com preocupação primordial. Sabemos que você tem grandes expectativas e é nosso objetivo atender e superar suas expectativas todas as vezes. Portanto, se você está procurando um revendedor confiável em São Paulo, a LUXURY - motor club está aqui para você. Permita-nos demonstrar nosso compromisso com a excelência! Nossa experiente equipe de vendas está ansiosa para compartilhar seu conhecimento e entusiasmo, mesmo depois que você sair do estacionamento. Estamos ansiosos para ser sua concessionária de automóveis!
    </p>

    

    
  </div>







<div style="border: 0;padding: 0;" class="container-fluid">
     
 
   <div class="baner-img-contraste">
    <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div style="cursor: pointer;" data-toggle="modal" data-target="#exampleModal" class="contraste-home b1">
          <div class="contraste-home-img"> <img height="60" src="assets/images/car.png"></div><br>
          <div class="contraste-home-img"><h1>Financiamento</h1><br>
            <p>Faça uma simulação de crédito agora!</p>
          </div>

          
        </div>
        
      </div>



 <div class="col-lg-6">
        <a target="_blank" href="https://www.mobiauto.com.br/tabela-fipe?utm_lp-google-cpc-SC_Considera%C3%A7%C3%A3o_Tabela_Fipe-search-fipe&gclid=CjwKCAjwlbr8BRA0EiwAnt4MTiB4ZrfckGXyXhWJ_4iIWTIPpnOW9PKKfb68E70Jkn82bocEGO82RBoCtWgQAvD_BwE"> <div class="contraste-home b2">
          <div class="contraste-home-img"> <img height="60" src="assets/images/sell-car.png"></div>
          <div class="contraste-home-img"><h1>Quanto Vale O Meu Carro?</h1><br>
            <p>Obtenha o True Market Value ® do seu veículo em menos de um minuto!</p>
          </div>

          
        </div></a>
        
      </div>


      
    </div>
  </div>  
</div>
</div>



<div class="container home-marcas">
  <div class="home-marcas-info">
    <h2>Busque por Marcas</h2>
    <span class="underline-blue"></span><hr><br><br>
  </div>
  <div class="variable-width">
   
  <?php foreach($marcas as $marca): ?>
        <a href="marcas/getVeiculoMarcas/<?php echo $marca['id']; ?>"><img src="assets/images/marcas/<?php echo $marca['url_imagem_marca']; ?>"></a>

  <?php endforeach;  ?>

    
     
    
    
  </div>
<hr>
  

</div>




  <div class="container meio-info-home">
    <h1>Concenssionária LUXURY - motor club </h1>
    
  <p>
      Recomendamos que você navegue em nosso inventário online, agende um test drive e investigue as opções de financiamento na LUXURY - motor club, sua concessionária local na área metropolitana de São Paulo. Você também pode solicitar mais informações sobre um veículo usando nosso formulário online ou ligando para (15)9 8785-9492. Se você não encontrar um veículo específico, use nosso Serviço de localização de veículos e preencha o formulário. Teremos o prazer de informá-lo quando um carro correspondente chegar. Se desejar ver um veículo pessoalmente, visite e entre em contato conosco para obter instruções passo a passo sobre como chegar ao nosso site ou ligue para nós. Estamos ansiosos para ser sua concessionária de veículos de escolha!
    </p>

    

    
  </div>









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
     <label for="exampleInputPassword1">RG</label>
    <input name="contato" type="number" class="form-control" id="exampleInputPassword1" placeholder="RG*">
    <small id="emailHelp" class="form-text text-muted">Digite seu RG no campo acima</small>
    
  </div>
   <div class="form-group">
 <label for="exampleInputPassword1">CPF</label>
    <input name="contato" type="number" class="form-control" id="exampleInputPassword1" placeholder="CPF*">
    <small id="emailHelp" class="form-text text-muted">Digite seu CPF no campo acima</small>
   </div>
   <div class="form-group">
 <label for="exampleInputPassword1">Endereço</label>
    <input name="contato" type="number" class="form-control" id="exampleInputPassword1" placeholder="Endereço*">
    <small id="emailHelp" class="form-text text-muted">Digite seu Endereço no campo acima</small>
  </div>

    <div class="form-group">
 <label for="exampleInputPassword1">Nascimento</label>
    <input name="contato" type="date" class="form-control" id="exampleInputPassword1" placeholder="nascimento*">
    <small id="emailHelp" class="form-text text-muted">Digite seu nascimento no campo acima</small>
  </div>






  <button type="submit" style="background-color:  #363636;border:#363636;color: #fff" class="btn  ">Enviar</button>
</form>










      </div>
     
    </div>
  </div>
</div>

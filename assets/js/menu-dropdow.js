var input = document.getElementById('input')


input.addEventListener('keyup',function(){

    var num = input.value;


  if(input.value == ''){

$('.modelo').slideUp();

  }else{

 $('.modelo').slideDown();
   
 $.ajax({
    
   url:'http://luxuryveiculos.ga/home/getVeiculoMarca/'+num,
   dataType:'json',
   success:function(json){
    
    var modelo = document.querySelector('.modelo')
    modelo.innerHTML ='';

    json.forEach(function(item){
                
       console.log(item.modelo)
       modelo.innerHTML += `<a href="modelo/getVeiculoModelo/${item.modelo}"><p>${item.modelo}</p></a>`



    })

      


   }
  



 })
 












  }


 




  
   
})


$('#collapse2').on('click',function(){
    
   var collapse2 = document.querySelector('.collapse2');

  if(collapse2.style.display == 'block'){

   $('.collapse2').slideUp();
    
  }else{

    $('.collapse2').slideDown();
  }

    



})

   
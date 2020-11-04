var name_marca = document.querySelector('.name_marca') 
 var acessorios = document.querySelector('.acessorios');
  var id = 0;
 

acessorios.addEventListener('click',function(){
     
    
     if(acessorios.value =='- Selecione -'){     
     }else{           
           if(id == acessorios.value ){        
           }else{
            id = acessorios.value
           
            $.ajax({

            url:'http://localhost/estacionamento/painel/adicionar_painel/getItemAcessorios/'+id,
            dataType:'json',
            success:function(json){
                json.forEach(function(item){
                      
                     
                    name_marca.innerHTML += `<input type="hidden" name="id_acessorios[${item.id}]" value="${item.nome}"  >
                    <input type="text"  value="${item.nome}" disabled >  `
                })
              
                 
            }


            })



           }
         
           
      
          

            
          
        


               
     }

    
        
        
    
   
    
})
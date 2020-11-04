 


 var rel1 = new Chart(document.getElementById('rel1'),{

   type:'pie',
   data:{
    labels:['QTD Veículos Cadastrados',"QTD Marcas Cadastrados","QTD Anos Cadastrados"],
    datasets:[{
      data:[qt_veiculos,qt_marca,qt_ano],
      backgroundColor:["#FF00FF","#FF4500","#00FF00"]
    }]
   }

   });


 var rel2 = new Chart(document.getElementById('rel2'),{

   type:'pie',
   data:{
    labels:['QTD Veículos Cadastrados',"QTD Marcas Cadastrados","QTD Anos Cadastrados"],
    datasets:[{
      data:[qt_veiculos,qt_marca,qt_ano],
      backgroundColor:["#B0E0E6","#D8BFD8","  #EEE8AA"]
    }]
   }

   });





$(document).ready(function(){
$('#button').on('click', function(e){
     
    e.preventDefault();
    
    var name = $('#names').val();
    
    var rg = $('#rg').val();  
    var cpf = $('#cpf').val(); 
    var dataNasc = $('#dataNasc').val();
    var endereco=  $('#endereco').val();
    var phone=  $('#phone').val();
    var email= $('#email').val();
    var dataConsulta=  $('#dataConsulta').val();
    var obj= $('#obj').val(); 
   
    e.preventDefault();

   $.ajax({ 
        url: "./db/create.php",
        data: "name, rg, cpf, dataNasc, endereco, phone, email, dataConsulta, obj",
        type: 'post',
        dataType:'json',
     success: function(response) {
                  alert(response);
              },
      error: function(request, status, error){
        alert("Error: Could not delete");
      }
    });
   

 });

});
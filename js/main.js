$(document).ready(function(){

    /* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
  }
  
  /* Set the width of the side navigation to 0 */
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
     document.body.style.backgroundColor = "white";
  }


    $('#button').on('click', function(e){
         
        e.preventDefault();
        
        var name = $('#name').val();

        var rg = $('#rg').val();  
        var cpf = $('#cpf').val(); 
        var dataNasc = $('#dataNasc').val();
        var endereco=  $('#endereco').val();
        var phone=  $('#phone').val();
        var email= $('#email').val();
        var dataConsulta=  $('#dataConsulta').val();
        var obj= $('#obj').val(); 
        //data: "name, rg, cpf, dataNasc, endereco, phone, email, dataConsulta, obj",
        
        e.preventDefault();
      // alert(name, rg, cpf, dataNasc, endereco, phone, email, dataConsulta, obj);
      


        $.ajax({
            method: "POST",
            url: "./db_php/create.php",
            data: { name },
            context: document.body
          }).done(function() {
            $( this ).addClass( "done" );
          });
       
    
     });
    
    });
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<link rel="stylesheet" href="/css/style.css">
<title>Title</title>
</head>
<body>
  
        <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="./schedule.php">Cadastro</a>
                <a href="#">Consultas</a>
                <a href="#">Orçamentos</a>
                <a href="index.html">Voltar</a>
              </div>
              
              <!-- Use any element to open the sidenav -->
              <span onclick="openNav()">open</span>
              
              <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
    <div id="main">
        

  <div class="container">          
   
  <div class="card">

   <div class="card-body">

   <form action="" method="post" >
     
    <label for="name">Nome Completo:</label>
    <input type="text" name="name" id="names" class="form-control"><br>

    <label for="rg">Rg:</label>
    <input type="text" name="rg" id="rg" class="form-control"><br>
     
    <label for="cpf">Cpf:</label>
    <input type="text" name="cpf" id="cpf" class="form-control"><br>
    
    <label for="data">Data de Nascimeto:</label>
     <input type="text" id="dataNasc" class="form-control"><br>

    <label for="endereco">Endereço:</label>
    <input type="text" name="endereco" id="endereco" class="form-control"><br>

    <label for="fone">Telefone:</label>
    <input type="text id="phone" class="form-control"><br>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email" class="form-control"><br>
     
     <label for="data">Data da consulta:</label>
     <input type="text" id="dataConsulta" class="form-control"> <br>

    <label for="observacoes">Motivo da Consulta:</label><br>
    <textarea name="observacoes" id="obj" cols="30" rows="10">  

    </textarea><br>
    <button class="btn btn-success mt-2" id="button">Enviar</button>
   

  </form> 

   </div>
  </div> 


  </div>


</div> 

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="/js/schedule.js" type="text/javascript"></script>
<script src="/js/create.js" type="text/javascript"></script>
</body>
</html>

  <!-- main code  -->
  <script>

    
</script>
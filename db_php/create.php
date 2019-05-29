<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);


try {
    $conn = new PDO("mysql:host=localhost;dbname=Clientes", 'fred', '121245Frederico*');
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    }
catch(PDOException $e)
    {
   // echo "Connection failed: " . $e->getMessage();
    }


  
    $data = $_POST;
    $name = $data['name'];
    echo $name;
  /*  $rg = $data['rg'];
    $cpf = $data['cpf'];
    $enereco = $data['endereco'];
    $phone = $data['phone'];
    $email = $data['email'];
    $dataConsulta = $data['dataConsulta'];
    $obj = $data['obj'];

  



 try{
 
    $stmt = $conn->prepare("INSERT INTO users(name, rg, cpf, dataNascimento, endereco, telefone, email, dataConsulta, motivo)
    VALUES(:name, :rg, :cpf, :dataNasc, :endereco, :phone, :email, :dataConsulta, :obj )");
     
     $stmt->execute(array(':name' => $name, ':rg' => $rg, ':cpf'=>$cpf ,':dataNasc'=>$dataNasc, 'endereco'=>$endereco,
      ':phone'=>$phone, ':email'=>$email, ':dataConsulta'=>$dataConsulta, ':obj'=>$obj));
    
       $res = "Dados cadastrados com sucesso!";
    }catch(PDOException $e)
    {
       echo "Connection failed: " . $e->getMessage();
    }
     
    echo json_encode($name);
*/
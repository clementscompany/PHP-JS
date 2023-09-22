<?php

 include_once "config.php";
 $idUser = $_POST['id'];
 $nomeUpload = $_POST['dataInputNome'];
 

 $sql1 = mysqli_query($conn, "SELECT * FROM users WHERE users.id = '{$idUser}'");
  
     $result = mysqli_fetch_assoc($sql1);
     extract($result);
     
        $resposta = array();
        $resposta['nome'] = $user;
        $resposta['pass'] = $pass;
        $resposta['nivel'] = $nivel;
        $resposta['obs'] = $obs;
        $resposta['data_validade'] = $data_validade;
        $resposta['id'] = $id;
     
       $env = json_encode($resposta);
     
       echo $env;
       
     
       
      
    //   if(!empty($nomeUpload)){
    //   $sql2 = mysqli_query($conn, "UPDATE users SET user = '{$nomeUpload}'");
    //   }
   
    

?>

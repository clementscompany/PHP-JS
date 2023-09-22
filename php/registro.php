<?php

$hostdb  = "localhost"; 
$userdb  = "diplo_sei"; 
$passdb  = "NCNhost#01062023$"; 
$tabledb = "diplo_sei";

$conn = mysqli_connect($hostdb, $userdb, $passdb, $tabledb);

// if($conn == true){
//     echo"sucesso!";
// }

$user = mysqli_real_escape_string($conn, $_POST['user']);
$pass = mysqli_real_escape_string($conn, $_POST['pass']);
$nivel = mysqli_real_escape_string($conn, $_POST['nivel']);
$obs = mysqli_real_escape_string($conn, $_POST['obs']);
$data_validade = mysqli_real_escape_string($conn, $_POST['data_validade']);




if(!empty($user) && !empty($pass) && !empty($nivel) && !empty($data_validade)){
    
 $sql = mysqli_query($conn, "INSERT INTO users (user,pass, nivel,obs,data_validade) VALUES ('{$user}','{$pass}','{$nivel}','{$obs}','{$data_validade}')");
 if($sql == true){
     echo "4881";
 }
 else{
     
     echo"4001";
 }
 
}
else{
    echo 0;
}


?>
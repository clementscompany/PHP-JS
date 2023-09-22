<?php

$idEliminar = $_POST['id'];

include_once "config.php";

$sql = mysqli_query($conn, "DELETE FROM users WHERE users.id = '{$idEliminar}'");
if($sql == true){
  echo '
   <span class="spamDelete">Excluido com Sucesso!</span>
 ';
}

?>
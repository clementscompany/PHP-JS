<?php
include_once "config.php";

$sql = mysqli_query($conn, "SELECT * FROM users");
if(mysqli_num_rows($sql) > 0){
  while($data = mysqli_fetch_assoc($sql)){
      extract($data);
      
     echo '

       <li class="listOption">
        <div class="listOrder">
            <h1>'.$user.'</h1> 
            <div class="buttonS">
            <button class="editar" onclick = "editar('.$id.')" >Editar</button> <button class="deletar" onclick = buscarID('.$id.')>Deletar</button>
            
            </div>
        </div>
       </li>

     ';
      
  }
}
else{
    echo "Nenhm usuario encontrado!";
}


?>
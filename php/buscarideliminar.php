<?php

$idEnv = $_POST['id'];


include_once "config.php";

$sql = mysqli_query($conn, "SELECT id FROM users WHERE users.id = '{$idEnv}'");
if(mysqli_num_rows($sql) > 0);
$result = mysqli_fetch_assoc($sql);
extract($result);

echo '

  <button class="eliminar" onclick="eliminar('.$id.')">Eliminar</button>
  <button class="cancelar" onclick="cancelar()">Cancelar</button>

';

?>
<?php

include_once "config.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$pass = $_POST['pass'];
$nivel = $_POST['nivel'];
$obs = $_POST['obs'];
$data_validade = $_POST['data_validade'];
$id = $_POST['id'];

$sql = mysqli_query($conn, "UPDATE users SET user = '{$nome}', pass = '{$pass}', nivel = '{$nivel}', obs = '{$obs}', data_validade = '{$data_validade}' WHERE id = '{$id}'");

if ($sql === true) {
    echo "Actualizado com sucesso!";
} else {
    echo "erro!";
}


?>
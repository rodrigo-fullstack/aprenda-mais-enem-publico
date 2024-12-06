<?php
require "db-conn.php";
// require_once "organize_form_data.php"; Fazer requisição do headern novamente gera um loop infinito
$formData = $_GET['form-data'];
$formData = explode(", ", $formData);

// Verificar depois função para dividir em variável
$formData = [
    "username" => $formData[3],
    "cpf" => $formData[1],
    "email" => $formData[0],
    "password" => $formData[2]
];

$username = $formData['username'];
$cpf = $formData['cpf'];
$email = $formData['email'];
$password = $formData['password'];

$sql = "INSERT INTO usuario (`username`, `cpf`, `email`, `password`)
 VALUES ('$username', '$cpf', '$email', '$password')";

echo $sql;

if($result = mysqli_query($conn, $sql)){
    header('Location: sign-up-verf.php');
} else{
    echo "Não cadastrado... ";
}

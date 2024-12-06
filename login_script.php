<?php
require "db-conn.php";

// echo isset($_POST['email']) ? $_POST['email'] : "Não existe email";
// echo isset($_POST['password']) ? $_POST['password'] : "Não existe senha";
if(isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])){
    $email = $_POST['email'];
    $password= $_POST['password'];
    
    // Precisa de aspas nos valores 
    $sql = "SELECT * FROM usuario where email = '$email'";

    $result = mysqli_query($conn, $sql);

    // Envia de volta para a tela de login se não encontrar o usuário
    if(!$result){
        header(NOT_AUTH_MESSAGE);

    } 

    // Recebe os dados da linha
    $user = mysqli_fetch_object($result);

    // Se não está a senha de acordo com o que está no banco, diz que o usuário não está autorizado.
    if(!password_verify($password, $user->password)) {
        header(NOT_AUTH_MESSAGE);
    }

    session_start();

    $_SESSION['id_usuario'] = $user->id_usuario;
    $_SESSION['username'] = $user->username;

    header("Location: protected/panel.php");
    
} else{
    header(NOT_AUTH_MESSAGE, true, 401);
}

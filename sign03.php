<?php
    // Arquivo contendo utilitários para PHP
    require "util.php";

    $formData = [
        'email' => $_POST['form-data'],
        'cpf' => $_POST['cpf']
    ];

    $formDataString = stringifyArray($formData);
    // $formDataString = "";
    // for($i = 0; $i < count($formData); $i++){
    //     if($i != count($formData) - 1){
    //         $formDataString .= $formData[$i] . ', ';
    //         continue;
    //     }

    //     $formDataString .= $formData[$i];
    // } Não funciona no PHP


    echo $formDataString
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPF</title>
    <!-- Root -->
    <link rel="stylesheet" href="assets/css/root.css">
    <link rel="stylesheet" href="assets/css/root__auth.css">
    <link rel="stylesheet" href="assets/css/scroll.css">

    
    <!-- Header -->
    <link rel="stylesheet" href="assets/css/header/header-auth.css">
    <link rel="stylesheet" href="assets/css/logo-container.css">
    <link rel="stylesheet" href="assets/css/sign-up/header__logo.css">

    

    <link rel="stylesheet" href="assets/css/main/main-content-auth.css">

    <!-- Auth-Container comum a cadastro e login -->
    <link rel="stylesheet" href="assets/css/auth-container.css">
    <link rel="stylesheet" href="assets/css/form-container.css">

    <!-- Inputs -->
    <link rel="stylesheet" href="assets/css/input.css">

    <!-- Footer -->
    <link rel="stylesheet" href="assets/css/footer/footer-auth.css">
    <link rel="stylesheet" href="assets/css/auth-container__footer.css">
    <link rel="stylesheet" href="assets/css/index/student-area.css">

    
    
    <!-- Botões -->
    <link rel="stylesheet" href="assets/css/btn.css">
    <link rel="stylesheet" href="assets/css/btn-container.css">
    <link rel="stylesheet" href="assets/css/btn-auth.css">
    <link rel="stylesheet" href="assets/css/login/alternative-login.css">
    <link rel="stylesheet" href="assets/css/sign-up/btn-container__sign-up.css">

</head>
<body>
    <header class="nav-header">

        <nav class="nav-bar-header">
            
            <ul class="nav-list-header">

                <li class="nav-item-header">
                    <a href="index.html" class="nav-link">
                        <div class="logo-container">
                            <img src="assets/img/logo.svg" alt="logo" class="logo">
                        </div>        
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="main-content">

        <article class="auth-container">

            <section class="auth-title-container">
              <h1>SENHA</h1>
              <p>Crie uma senha: </p>
            </section>

            <form class="form-container" action="sign06.php" method="POST">

                <fieldset class="input-group">
                    <div class="input-row">
                        <input placeholder="Senha" type="password" id="password" name="password" class="input-text password">
                    </div>
                </fieldset>

                <input type="hidden" name="form-data" id="form-data" value="<?= $formDataString ?>">

                <div class="btn-container">
                    <div class="btn-container">
                        <a class="btn auth return" href="sign02.php">
                            Voltar
                        </a>
    
                        <button class="btn auth next" type="submit">
                            Próximo
                        </button>
                    </div>
                </div>
            </form>

            <section class="auth-container__footer">
              <p>Já tem uma conta? 
                <a href="login.html"><strong>Faça login!</strong></a></p>
            </section>

          </article>
          
    </main>

    <footer class="footer">

        <nav class="nav-bar-footer">
            
            <ul class="nav-list-footer">

                <li class="nav-item-footer">
                    <a href="index.html" class="nav-link">
                        <div class="logo-container">
                            <img src="assets/img/logo-footer.svg" alt="logo Horizontal" class="logo">
                            <p class="logo-desc">Todos os direitos reservados</p>
                        </div>        
                    </a>
                </li>

                <div class="nav-item-container-footer">
                    
                    <li class="nav-item-footer">
                        <a href="index.html#home" class="nav-link">
                            Home
                        </a>
                    </li>
                    
                    <li class="nav-item-footer">
                        <a href="index.html#planos" class="nav-link">
                            Planos
                        </a>
                    </li>

                    <li class="nav-item-footer">
                        <a href="index.html#equipe" class="nav-link">
                            Equipe
                        </a>
                    </li>
                    
                    
                    <li class="nav-item">
                        <a href="index.html#contato" class="nav-link">
                            Contato
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="index.html" class="nav-link student-area">
                            Área do Estudante
                        </a>
                    </li>
                </div>

            </ul>
            
        </nav>

    </footer>
</body>
</html>
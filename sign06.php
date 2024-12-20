<?php
    require "util.php";

    $formData = $_POST['form-data'];
    $formData = explode(", ", $formData);

    $formData = [
        "email" => $formData[0],
        "cpf" => $formData[1],
        "password" => password_hash(
                $_POST['password'], 
                    PASSWORD_BCRYPT
        ),    
    ];
    var_dump($formData);

    $formDataString = stringifyArray($formData);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome de Usuário</title>

    <!-- Root -->
    <link rel="stylesheet" href="assets/css/root.css">
    <link rel="stylesheet" href="assets/css/root__auth.css">
    <link rel="stylesheet" href="assets/css/scroll.css">

    
    <!-- Header -->
    <link rel="stylesheet" href="assets/css/header/header-auth.css">
    <link rel="stylesheet" href="assets/css/logo-container.css">
    <link rel="stylesheet" href="assets/css/sign-up/header__logo.css">

    
    <!-- Main-Content -->
    <link rel="stylesheet" href="assets/css/main/main-content-auth.css">

    <!-- Auth-Container comum a cadastro e login -->
    <link rel="stylesheet" href="assets/css/auth-container.css">
    <link rel="stylesheet" href="assets/css/form-container.css">

    <!-- Inputs -->
    <link rel="stylesheet" href="assets/css/input.css">

    <!-- Footer -->
    <link rel="stylesheet" href="assets/css/footer/footer-auth.css">
    <link rel="stylesheet" href="assets/css/index/student-area.css">
    

    <!-- Botões -->
    <link rel="stylesheet" href="assets/css/btn.css">
    <link rel="stylesheet" href="assets/css/btn-container.css">
    <link rel="stylesheet" href="assets/css/btn-auth.css">
    <link rel="stylesheet" href="assets/css/sign-up/btn-container__sign-up.css">

    <link rel="stylesheet" href="assets/css/sign-up/payment-method-container.css">

    <link rel="stylesheet" href="assets/css/shadow.css">
    <link rel="stylesheet" href="assets/css/sign-up/form-container__sign-up05.css">
    <link rel="stylesheet" href="assets/css/auth-container__pm.css">
    

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
              <h1>Como quer ser chamado?</h1>
              <p>Digite seu nome de usuário></p>
            </section>

            
            <!-- Organiza para enviar os dados -->
            <form class="form-container" method="POST" action="organize_form_data.php">

                <fieldset class="input-group">
                    <div class="input-row">
                        <input placeholder="Nome de Usuário" type="text" id="username" name="username" class="input-text username">
                    </div>
                </fieldset>

                <input type="hidden" name="form-data" id="form-data" value="<?= $formDataString?>">

                <div class="btn-container">
                    <div class="btn-container">
                        <a class="btn auth return" href="sign03.php">
                            Voltar
                        </a>

                        <button class="btn auth next" type="submit">
                            Cadastrar
                        </button>
                    </div>
                </div>
            </form>
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
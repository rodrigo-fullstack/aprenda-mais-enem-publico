<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="icon" href="assets/img/Simbolo.svg" type="image/png">
    
    <!-- Root -->
    <link rel="stylesheet" href="assets/css/root.css">
    <link rel="stylesheet" href="assets/css/root__auth.css">

    <link rel="stylesheet" href="assets/css/scroll.css">

    <link rel="stylesheet" href="assets/css/header/header-auth.css">
    <link rel="stylesheet" href="assets/css/logo-container.css">

    <!-- Footer Login -->
    <link rel="stylesheet" href="assets/css/footer/footer-auth.css">
    <link rel="stylesheet" href="assets/css/index/student-area.css">


    <!-- Main  -->
    <link rel="stylesheet" href="assets/css/main/main-content-auth.css">
    
    <!-- Container da Autenticação comum a cadastro e login -->
    <link rel="stylesheet" href="assets/css/auth-container.css">
    <link rel="stylesheet" href="assets/css/form-container.css">
    <link rel="stylesheet" href="assets/css/login/login.css">
    <link rel="stylesheet" href="assets/css/Login/line.css">
    <link rel="stylesheet" href="assets/css/auth-container__footer.css">
    <link rel="stylesheet" href="assets/css/login/auth-container__login.css">
    
    
    <!-- Botões -->
    <link rel="stylesheet" href="assets/css/btn.css">
    <link rel="stylesheet" href="assets/css/btn-container.css">
    <link rel="stylesheet" href="assets/css/btn-auth.css">
    <link rel="stylesheet" href="assets/css/login/alternative-login.css">

    <!-- Inputs -->
    <link rel="stylesheet" href="assets/css/input.css">
    <link rel="stylesheet" href="assets/css/panel/scale.css">
    
    
    
</head>

<body>
    <header class="nav-header">

        <nav class="nav-bar-header">
            
            <ul class="nav-list-header">

                <li class="nav-item-header">
                    <a href="index.html" class="nav-link">
                        <div class="logo-container">
                            <img src="assets/img/logo.svg" alt="logo" class="logo__header">
                        </div>        
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="main-content">

        <!-- Container comum a cadastro e login -->
        <article class="auth-container">

            <section class="auth-title-container">
              <h1>LOGIN</h1>
              <hr class="line">
            </section>

            <form class="form-container" action="login_script.php" method="POST">
                
                <!-- Fieldset denota um conjunto de campos, layout está em display flex-->
                <fieldset class="input-group">
                    <!-- Linha de input -->
                    <div class="input-row">
                        <input placeholder="Email" type="email" id="email" name="email" class="input-text email">
                    </div>
                    

                    <div class="input-row">
                        <input placeholder="Senha" type="password" id="password" name="password" class="input-text password">
                        
                        <!-- Lembrar de colocar o Ícone de olho para mostrar/ocultar senha -->
                    </div>
                </fieldset>
                
                <div class="btn-container">
                    <button type="submit" class="btn auth next">
                        Entrar                    
                    </button>
                </div>
                
            </form>

            <section class="alternative-login">
                <p>Outras formas de login:</p>
                    <a href="#">
                        <img class="imgs" src="assets/img/Google Icon.svg" alt="">
                    </a>
                    <a href="#">
                        <img class="imgs" src="assets/img/Facebook Icon.svg" alt="">
                    </a>
            </section>

            <footer class="auth-container__footer">
              <p>
                <a href="forget-password.html">
                    <b>Esqueceu a senha?</b>
                </a>
            </p>

              <p>Não tem uma conta? 
                <a href="sign-up.php"><b>Crie agora!</b></a></p>
            </footer>

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
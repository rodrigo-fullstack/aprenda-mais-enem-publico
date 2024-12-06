<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Aprenda+ENEM</title>

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
              <h1>CADASTRO</h1>
              <p>Bem-vindo ao Aprenda+ ENEM: Digite a seguir seus dados.</p>
            </section>

            <form class="form-container" method="POST" action="sign02.php">

                <fieldset class="input-group">
                    <div class="input-row">
                        <input placeholder="Email" type="email" id="email" name="email" class="input-text email">
                    </div>
                </fieldset>

                <div class="btn-container">
                    <button class="btn auth next" type="submit">
                        Próximo
                    </button>
                </div>
            </form>
            <section class="alternative-login">
                <p>Cadastrar-se de outra maneira: </p>
                    <a href="#">
                        <img class="imgs" src="assets/img/Google Icon.svg" alt="">
                    </a>
                    <a href="#">
                        <img class="imgs" src="assets/img/Facebook Icon.svg" alt="">
                    </a>
            </section>

            <section class="auth-container__footer">
              <p>Já tem uma conta? 
                <a href="login.php"><strong>Faça login!</strong></a></p>
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
<?php
    require "../auth.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Geral</title>

    <link rel="icon" href="../assets/img/Simbolo.svg" type="image/png">

    <link rel="stylesheet" href="../assets/css/panel/root.css">
    <link rel="stylesheet" href="../assets/css/header/header-panel.css">
    <link rel="stylesheet" href="../assets/css/header">
    <!-- <link rel="stylesheet" href="../assets/css/footer/footer-panel.css"> -->
    <link rel="stylesheet" href="../assets/css/main/main-content-panel.css">

    <link rel="stylesheet" href="../assets/css/panel/subject-menu__panel.css">
    <link rel="stylesheet" href="../assets/css/panel/matters-container.css">
    <link rel="stylesheet" href="../assets/css/panel/subjects-container__subject-item__panel.css">
    <link rel="stylesheet" href="../assets/css/panel/icon-container__panel.css">
    <link rel="stylesheet" href="../assets/css/panel/subject-colors__panel.css">
    <link rel="stylesheet" href="../assets/css/panel/data-container__panel.css">
    <link rel="stylesheet" href="../assets/css/panel/side-box-panel.css">
    <link rel="stylesheet" href="../assets/css/scroll.css">
    <link rel="stylesheet" href="../assets/css/panel/scale.css">
    <link rel="stylesheet" href="../assets/css/panel/menu-colap-exp-panel.css">
    <link rel="stylesheet" href="../assets/css/header/account-menu.css">
    <link rel="stylesheet" href="../assets/css/events.css">
    <link rel="stylesheet" href="../assets/css/shadow.css">

    <link rel="stylesheet" href="../assets/css/logo-container.css">

    <link rel="stylesheet" href="../assets/css/footer/footer.css">
    <link rel="stylesheet" href="../assets/css/panel/icon__puppy.css">
    
</head>
<body>
    
    <header class="nav-header-panel">

        <nav class="nav-bar-panel">
            
            <ul class="nav-list-panel">

                <li class="nav-item-panel">
                    <a href="index.php" class="nav-link">
                        <div class="logo-container">
                            <img src="../assets/img/logo.svg" alt="" class="logo">
                        </div>        
                    </a>
                </li>

                <div class="nav-item-container-panel">
                    
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Painel
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Ranking
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Loja
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Tarefas
                        </a>
                    </li>
                    
                    <li class="nav-item account-item">
                        <div class="icon-container account-btn">
                            <img src="../assets/img/mdi--account 2.svg" alt="Botão de conta" class="icon">
                        </div>

                        <nav class="account-menu-container hidden">
                            <div class="icon-container account-btn">
                                <img src="../assets/img/mdi--account 2.svg" alt="" class="shadow-img">
                            </div>
                
                            <ul class="account-menu-list">
                
                                <li class="account-menu-item">
                                    <a href="" class="nav-link account-link">Minha Conta</a>
                                </li>
                                
                                <hr>

                                <li class="account-menu-item">
                                    <a href="" class="nav-link account-link">Personalização</a>
                                </li>
                                
                                <hr>

                                <li class="account-menu-item">
                                    <a href="" class="nav-link account-link">Configurações</a>
                                </li>
                                
                                <hr>

                                <li class="account-menu-item">
                                    <a href="" class="nav-link account-link">Seja Premium!</a>
                                </li>
                                
                                <hr>

                                <li class="account-menu-item">
                                    <a href="sair.php" class="nav-link account-link">Sair</a>
                                </li>
                                
                            </ul>
                        </nav>
                    </li>
                </div>

            </ul>
            
        </nav>

    </header>

    <main class="main-content-panel">
        <article class="panel-container">
            <article class="data-container data-container--expanded items-container">
                <section class="coin-container">
                    <div class="icon-container">
                        <img src="../assets/img/Coin.svg" alt="Moeda" class="icon coin">
                    </div>
                    <h1 class="number-coins">300</h1>
                </section>
    
                <section class="exam-container">
                    <div class="icon-container">
                        <img src="../assets/img/exam.svg" alt="Ícone de Prova" class="icon">
                    </div>
                    <h1 class="exam-title">Mini-Simulado do Dia</h1>
                    <h1 class="exp">350Xp</h1>
                    <div class="coin-container">
                        <div class="icon-container">
                            <img src="../assets/img/Coin.svg" alt="Moeda" class="icon coin">
                        </div>
                        <h1 class="number-coins">120</h1>
                    </div>
                </section>
    
                <section class="heart-container">
                    <div class="icon-container">
                        <img src="../assets/img/heart.svg" alt="Coração">
                    </div>
                    <h1 class="heart-number">5</h1>
                </section>
            </article>
    
            <article class="subjects-container">
                <section class="subject-container">
                    <section class="matters-container--expanded matters-container">
                        <a class="subject-item" href="math-selected.php">
                            <div class="icon-container exact-science">
                                <img class="icon puppy math" alt="Icone" src="../assets/img/puppy-math.svg">
                            </div>
                            <p class="subject-purple">Matemática</p>
                        </a>
    
                        <a class="subject-item">
                            <div class="icon-container human-science">
                                <img class="icon puppy" alt="Icone" src="../assets/img/livro-roxo.svg">
                            </div>
                            <p class="subject-orange">Linguagens</p>
                        </a>
    
                        <a class="subject-item" href="human-selected.php">
                            <div class="icon-container human-science">
                                <img class="icon" alt="Icone" src="../assets/img/puppy-human.svg">
                            </div>
                            <p class="subject-orange">Humanas</p>
                        </a>
    
                        <a class="subject-item">
                            <div class="icon-container exact-science">
                                <img class="icon" alt="Icone" src="../assets/img/puppy-nature.svg">
                            </div>
                            <p class="subject-purple">Natureza</p>
                        </a>
                    </section>
                </section>
    
                <div id="menu" class="side-box-panel" style="display: none;">
                    <ul class="menu-list">
                         <img src="../assets/img/Nível.svg" class="nivel" alt="nivel">
                         <img src="../assets/img/Gráfico Questões.svg" alt="graficos">
                         <img src="../assets/img/Ranking Liderança.svg" alt="ranking">
                    </ul>
                </div>
            </article>
    
            <nav class="subject-menu">
                <button onclick="showPage('menu')" class="statistics-bar-btn">
                    <img src="../assets/img/menu.svg" alt="Menu de Hambúrguer" class="menu-icon">
                </button>
            </nav>
        </article>
    </main>

    <footer class="footer">

        <section class="footer-section">

            <div class="logo-container">
                <img src="../assets/img/logo-rodape.svg" alt="" class="logo">
            </div>    

            <div class="social-media-container">
                <span class="social-media-icon">
                    <img src="../assets/img/skill-icons--instagram 1.svg" alt="" class="icon">
                </span>
                <span class="social-media-icon">
                    <img src="../assets/img/logos--linkedin-icon 2.svg" alt="" class="icon">
                </span>
            </div>
            
        </section>

        <section id="contato" class="footer-section">

            <section class="footer-section__internal-sect">

                <h1 class="footer-section__title">Informações da Plataforma</h1>
                
                <ul class="footer-section__list">
                    <li class="footer-list__item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="footer-list__item">
                        <a class="nav-link" href="#planos">Planos</a>
                    </li>
                    <li class="footer-list__item">
                        <a class="nav-link" href="#equipe">Equipe</a>
                    </li>
                </ul>
                
            </section>
            
            <section class="footer-section__internal-sect">
                
                <h1 class="footer-section__title">Termos de Segurança</h1>

                <ul class="footer-section__list">
                    <li class="footer-list__item">Termos de Adesão</li>
                    <li class="footer-list__item">Termos de Privacidade</li>
                    <li class="footer-list__item">LGPD</li> <!--Mudar para algo melhor depois-->
                </ul>

            </section>

        </section>
        
        <section class="footer-section">
            
            <section class="footer-section__internal-sect">
                <h1 class="footer-section__title">
                    Dúvidas
                </h1>
                <ul class="footer-section__list">
                    <li class="footer-section__item">Suporte</li>
                    <li class="footer-section__item">FAQ</li>
                </ul>
            </section>

            <section class="footer-section__internal-sect">
                <h1 class="footer-section__title">
                    Contato
                </h1>
                
                <ul class="footer-section__list">
                    <li class="footer-section__item">Telefone: 71992772390</li>
                    <li class="footer-section__item">Email: aprendamaisenem02@gmail.com</li>
                    <li class="footer-section__item">Endereço: Rua do x e y e 4</li>
                    <li class="footer-section__item">Ouvidoria</li>
                </ul>
            </section>
            
        </section>

    </footer>

    <script src="../assets/js/panel/menu-colap-exp-painel.js"></script>
    <script src="../assets/js/header/account-btn.js"></script>
</body>
</html>
<?php
    require "../auth.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprenda+ ENEM - Humanas</title>

    <link rel="icon" href="../assets/img/Simbolo.svg" type="image/png">

    <link rel="stylesheet" href="../assets/css/human-selected/root.css"> <!--feito-->
    <link rel="stylesheet" href="../assets/css/header/header-human-selected.css"> <!--feito-->
    <link rel="stylesheet" href="../assets/css/footer/footer.css"> <!--feito-->
    <link rel="stylesheet" href="../assets/css/main/main-content-human-selected.css"> <!--feito-->
    <link rel="stylesheet" href="../assets/css/human-selected/social-media-human-selected.css"> <!--feito-->
    <link rel="stylesheet" href="../assets/css/human-selected/subject-menu-human-selected.css"> <!--feito-->
    <link rel="stylesheet" href="../assets/css/human-selected/subject-elements-order-human.css"> <!--feito-->
    <link rel="stylesheet" href="../assets/css/human-selected/subjects-container-human-selected.css"> <!--feito-->
    <link rel="stylesheet" href="../assets/css/human-selected/scroll-horizontal-container-human.css"> <!--feito-->
    <link rel="stylesheet" href="../assets/css/human-selected/subjects-container__subject-item-human.css"> <!--feito-->
    <link rel="stylesheet" href="../assets/css/human-selected/icon-container-human.css"> <!--feito-->
    <link rel="stylesheet" href="../assets/css/human-selected/icon-container__subject-human.css"> <!--feito-->
    <link rel="stylesheet" href="../assets/css/human-selected/subject-colors-human-selected.css"> <!--feito-->
    <link rel="stylesheet" href="../assets/css/human-selected/data-container-human.css"> <!--feito-->
    <link rel="stylesheet" href="../assets/css/scroll.css">
    <link rel="stylesheet" href="../assets/css/human-selected/scale.css">

    <link rel="stylesheet" href="../assets/css/header/account-menu.css">
    <link rel="stylesheet" href="../assets/css/events.css">
    <link rel="stylesheet" href="../assets/css/shadow.css">
</head>

<body>
    <header class="nav-header">

        <nav class="nav-bar">
            
            <ul class="nav-list">

                <li class="nav-item">
                    <a href="panel.php" class="nav-link">
                        <div class="logo-container">
                            <img src="../assets/img/logo.svg" alt="" class="logo">
                        </div>        
                    </a>
                </li>

                <div class="nav-item-container">
                    
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

    <main class="main-content">
        <article class="data-container">

            <section class="coin-container">

                <div class="icon-container">
                    <img src="../assets/img/Coin.svg" alt="Moeda" class="icon coin">
                </div>

                <h1 class="number-coins">300</h1>
                
            </section>

            <section class="exam-container">
                <div class="icon-container">
                    <img src="../assets/img/exam.svg" alt="´Ícone de Prova" class="icon">
                </div>
                
                <h1 class="exam-title">Mini-Simulado do Dia</h1>
                
                <h1 class="exp">250Xp</h1>
                <div class="coin-container">

                    <div class="icon-container">
                        <img src="../assets/img/Coin.svg" alt="Moeda" class="icon coin">
                    </div>
    
                    <h1 class="number-coins">50</h1>
                    
                </div>
            </section>

            <section class="heart-container">
                <div class="icon-container">
                    <img src="../assets/img/heart.svg" alt="Coração">
                </div>
                <h1 class="heart-number">5</h1>
            </section>
        </article>

        <nav class="subject-menu">
            
            <button class="statistics-bar-btn">
                <img src="../assets/img/menu.svg" alt="Menu de Hambúrguer" class="menu-icon">
            </button>

            <ul class="subject-menu-list">
                
                <li class="subject-menu-item first">
                    <a href="panel.php" class="subject-menu-link return">
                        <img src="../assets/img/return-icon.svg" alt="">
                    </a>
                </li>

                <li class="subject-menu-item second exact-science selected">
                    <a href="math-selected.php" class="subject-menu-link"><h1 class="subject-title">Matemática</h1></a>
                </li>

                <li class="subject-menu-item third human-science">
                    <a href="ling-selected.php" class="subject-menu-link"><h1 class="subject-title">Linguagens</h1></a>
                </li>

                <li class="subject-menu-item forth exact-science">
                    <a href="natu-selected.php" class="subject-menu-link"><h1 class="subject-title">C. Natureza</h1></a>
                </li>
                
                <li class="subject-menu-item fifth human-science">
                    <a href="" class="subject-menu-link"><h1 class="subject-title">C. Humanas</h1></a>
                </li>

            </ul>
        </nav>

        <article class="subjects-container">

            <section class="subject-container">
                <h1 class="subject-title">
                    História - Povos Antigos
                </h1>

                <section class="scroll-horizontal-container">
                    
                    <a class="subject-item" href="human-theory.php">
                        <div class="icon-container human-science">
                            <img class="icon" alt="Icone" src="../assets/img/hum-icon.svg">
                        </div>
                
                        <p class="subject-desc desc-large">Povos Mesopotâmia</p>
                    </a>
                
                    <div class="subject-item">
                        <div class="icon-container human-science">
                            <img class="icon" alt="Icone" src="../assets/img/hum-icon.svg">
                        </div>
                
                        <p class="subject-desc desc-large">Sumérios e Babilônios</p>
                    </div>
                
                    <div class="subject-item">
                        <div class="icon-container human-science">
                            <img class="icon" alt="Icone" src="../assets/img/hum-icon.svg">
                        </div>
                
                        <p class="subject-desc">Grécia Antiga</p>
                    </div>
                    
                    <div class="subject-item">
                        <div class="icon-container human-science">
                            <img class="icon" alt="Icone" src="../assets/img/hum-icon.svg">
                        </div>
                
                        <p class="subject-desc">Pérsia Antiga</p>
                    </div>
                
                </section>
            </section>

            <section class="subject-container">
                <h1 class="subject-title">
                    História - Brasil
                </h1>
            
                <section class="scroll-horizontal-container">
                    
                    <div class="subject-item">
                        <div class="icon-container human-science">
                            <img class="icon" alt="Icone" src="../assets/img/hum-icon.svg">
                        </div>
            
                        <p class="subject-desc">Pré-Colônia</p>
                    </div>
            
                    <div class="subject-item">
                        <div class="icon-container human-science">
                            <img class="icon" alt="Icone" src="../assets/img/hum-icon.svg">
                        </div>
            
                        <p class="subject-desc">"Descoberta"</p>
                    </div>
            
                    <div class="subject-item">
                        <div class="icon-container human-science">
                            <img class="icon" alt="Icone" src="../assets/img/hum-icon.svg">
                        </div>
            
                        <p class="subject-desc desc-large">Capitanias Hereditárias</p>
                    </div>
                    
                    <div class="subject-item">
                        <div class="icon-container human-science">
                            <img class="icon" alt="Icone" src="../assets/img/hum-icon.svg">
                        </div>
            
                        <p class="subject-desc">Era Vargas</p>
                    </div>
            
                </section>
            </section>
            
            <section class="subject-container">
                <h1 class="subject-title">
                    Geografia - Física
                </h1>
            
                <section class="scroll-horizontal-container">
                    
                    <div class="subject-item">
                        <div class="icon-container human-science">
                            <img class="icon" alt="Icone" src="../assets/img/hum-icon.svg">
                        </div>
            
                        <p class="subject-desc">Geologia</p>
                    </div>
            
                    <div class="subject-item">
                        <div class="icon-container human-science">
                            <img class="icon" alt="Icone" src="../assets/img/hum-icon.svg">
                        </div>
            
                        <p class="subject-desc">Hidrografia</p>
                    </div>
            
                    <div class="subject-item">
                        <div class="icon-container human-science">
                            <img class="icon" alt="Icone" src="../assets/img/hum-icon.svg">
                        </div>
            
                        <p class="subject-desc">Cartografia</p>
                    </div>
                    
                    <div class="subject-item">
                        <div class="icon-container human-science">
                            <img class="icon" alt="Icone" src="../assets/img/hum-icon.svg">
                        </div>
            
                        <p class="subject-desc">Climatologia</p>
                    </div>
            
                    <div class="subject-item">
                        <div class="icon-container human-science">
                            <img class="icon" alt="Icone" src="../assets/img/hum-icon.svg">
                        </div>
            
                        <p class="subject-desc desc-large">Conceitos Primitivos</p>
                    </div>
            
                </section>
            </section>
            
            <section class="subject-container">
                <h1 class="subject-title">
                    Geografia - Humana
                </h1>
            
                <section class="scroll-horizontal-container">
                    
                    <div class="subject-item">
                        <div class="icon-container human-science">
                            <img class="icon" alt="Icone" src="../assets/img/hum-icon.svg">
                        </div>
            
                        <p class="subject-desc desc-large">Revoluções Industriais</p>
                    </div>
            
                    <div class="subject-item">
                        <div class="icon-container human-science">
                            <img class="icon" alt="Icone" src="../assets/img/hum-icon.svg">
                        </div>
            
                        <p class="subject-desc">Economia</p>
                    </div>
            
                    <div class="subject-item">
                        <div class="icon-container human-science">
                            <img class="icon" alt="Icone" src="../assets/img/hum-icon.svg">
                        </div>
            
                        <p class="subject-desc desc-large">Conflitos Teritoriais</p>
                    </div>
                    
                    <div class="subject-item">
                        <div class="icon-container human-science">
                            <img class="icon" alt="Icone" src="../assets/img/hum-icon.svg">
                        </div>
            
                        <p class="subject-desc">Cultura</p>
                    </div>
            
                    <div class="subject-item">
                        <div class="icon-container human-science">
                            <img class="icon" alt="Icone" src="../assets/img/hum-icon.svg">
                        </div>
            
                        <p class="subject-desc desc-large">Conceitos Primitivos</p>
                    </div>
            
                </section>
            </section>
            
            <section class="subject-container">
                <h1 class="subject-title">
                        Filosofia
                    </h1>
            
                    <section class="scroll-horizontal-container">
                        
                        <div class="subject-item">
                            <div class="icon-container human-science">
                                <img class="icon" alt="Icone" src="../assets/img/hum-icon.svg">
                            </div>
            
                            <p class="subject-desc desc-large">Surgimento da Filosofia</p>
                        </div>
            
                        <div class="subject-item">
                            <div class="icon-container human-science">
                                <img class="icon" alt="Icone" src="../assets/img/hum-icon.svg">
                            </div>
                            
                            <p class="subject-desc desc-large">Filósofos Socráticos</p>
                        </div>
            
                        <div class="subject-item">
                            <div class="icon-container human-science">
                                <img class="icon" alt="Icone" src="../assets/img/hum-icon.svg">
                            </div>
                            
                            <p class="subject-desc desc-large">Filósofos Medievais</p>
                        </div>
                        
                        <div class="subject-item">
                            <div class="icon-container human-science">
                                <img class="icon" alt="Icone" src="../assets/img/hum-icon.svg">
                            </div>
                            
                            <p class="subject-desc desc-large">Filósofos Modernos</p>
                        </div>
            
                        <div class="subject-item">
                            <div class="icon-container human-science">
                                <img class="icon" alt="Icone" src="../assets/img/hum-icon.svg">
                            </div>
                            
                            <p class="subject-desc desc-large">Conceitos Primitivos</p>
                        </div>
            
                    </section>
            </section>
            
            <section class="subject-container">
                    <h1 class="subject-title">
                        Sociologia
                    </h1>
            
                    <section class="scroll-horizontal-container">
                        
                        <div class="subject-item">
                            <div class="icon-container human-science">
                                <img class="icon" alt="Icone" src="../assets/img/hum-icon.svg">
                            </div>
            
                            <p class="subject-desc desc-large">Organização da Sociedade</p>
                        </div>
            
                        <div class="subject-item">
                            <div class="icon-container human-science">
                                <img class="icon" alt="Icone" src="../assets/img/hum-icon.svg">
                            </div>
            
                            <p class="subject-desc">Classes Sociais</p>
                        </div>
            
                        <div class="subject-item">
                            <div class="icon-container human-science">
                                <img class="icon" alt="Icone" src="../assets/img/hum-icon.svg">
                            </div>
            
                            <p class="subject-desc">Karl Marx</p>
                        </div>
                        
                        <div class="subject-item">
                            <div class="icon-container human-science">
                                <img class="icon" alt="Icone" src="../assets/img/hum-icon.svg">
                            </div>
            
                            <p class="subject-desc">Marx Durkeim</p>
                        </div>

                        <div class="subject-item">
                            <div class="icon-container human-science">
                                <img class="icon" alt="Icone" src="../assets/img/hum-icon.svg">
                            </div>
            
                            <p class="subject-desc desc-large">Conceitos Primitivos</p>
                        </div>
            
                </section>
            </section>
                
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

    <script src="../assets/js/header/account-btn.js"></script>
</body>
</html>
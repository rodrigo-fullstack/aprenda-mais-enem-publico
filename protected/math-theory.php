<?php
    require "../auth.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações Básicas</title>

    <link rel="stylesheet" href="../assets/css/root.css">

    <link rel="stylesheet" href="../assets/css/header/header-auth.css">
    <link rel="stylesheet" href="../assets/css/header/header-question.css">

    <link rel="stylesheet" href="../assets/css/main/main-content-index.css">
    <link rel="stylesheet" href="../assets/css/main/main-content-question.css">
    <link rel="stylesheet" href="../assets/css/img-container.css">
    <link rel="stylesheet" href="../assets/css/question/progress-bar.css">
    <link rel="stylesheet" href="../assets/css/question/theory-container.css">
    <link rel="stylesheet" href="../assets/css/question/img-container__question.css">
    <link rel="stylesheet" href="../assets/css/footer/footer-question.css">
    <link rel="stylesheet" href="../assets/css/btn.css">
    <link rel="stylesheet" href="../assets/css/question/btn__question.css">
    <link rel="stylesheet" href="../assets/css/question/question-colors.css">
    <link rel="stylesheet" href="../assets/css/scroll.css">
</head>
<body>

    <!-- Criar ideia posterior de funcionalidade de caderno para acessar e anotar conteúdos para serem compartilhados em comunidade. -->

    <header class="nav-header">

        <nav class="nav-bar-header">
            
            <ul class="nav-list-header">

                <li class="nav-item-header">
                    <a href="math-selected.php" class="nav-link">
                        <div class="logo-container">
                            <img src="../assets/img/logo.svg" alt="logo">
                        </div>        
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="main-content">
        <header class="progress-bar-container">
            <a href="" class="progress-bar-link btn return">
                <img src="../assets/img/return-icon.svg" alt="Ícone de voltar" class="btn-icon return-icon">
            </a>

            <section class="progress-bar">
                <div class="progress-bar-full">
                    <div class="progress-bar-actual"></div>
                </div>
            </section>
        </header>

        <article class="theory-container exact-science">
            <div class="theory-paragraph-container">
                <p class="theory-paragraph">As operações básicas da aritmética incluem a adição, subtração, multiplicação e divisão.</p>
                <p class="theory-paragraph">Elas são essenciais para resolver problemas matemáticos e são utilizadas em diversas áreas do conhecimento.</p>
                <p class="theory-paragraph">A adição combina valores, a subtração encontra diferenças, a multiplicação representa somas repetidas e a divisão distribui quantidades em partes iguais.</p>
            </div>

            <div class="img-container">
                <img src="../assets/img/math-img.svg" alt="Imagem do conteúdo" class="img">
            </div>

        </article>

<!-- Criar ideia para páginas maiores de teoria ou questão em que por meio do JS quando a tela é muito grande coloca esse elemento como fixed na tela com sombreamento e uma cor de fundo diferente -->
        <footer class="footer-question">
            <button class="notebook-btn btn">
                <img src="../assets/img/notebook.svg" alt="Botão de Caderno para Anotações" class="btn-icon">
            </button>

            <a href="math-question.php" class="next btn">
                <img src="../assets/img/next.svg" alt="Próximo" class="btn-icon">
            </a>
        </footer>

    </main>
</body>
</html>
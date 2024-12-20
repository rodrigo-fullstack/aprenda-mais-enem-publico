<?php
    require "../auth.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão de Matemática ENEM</title>

    <link rel="stylesheet" href="assets/css/root.css">
    <link rel="stylesheet" href="assets/css/header/header-auth.css">
    <link rel="stylesheet" href="assets/css/header/header-question.css">
    <link rel="stylesheet" href="assets/css/main/main-content-index.css">
    <link rel="stylesheet" href="assets/css/main/main-content-question.css">
    <link rel="stylesheet" href="assets/css/btn.css">
    <link rel="stylesheet" href="assets/css/question/question-container.css">
    <link rel="stylesheet" href="assets/css/question/btn__question.css">
    <link rel="stylesheet" href="assets/css/question/progress-bar.css">
    <link rel="stylesheet" href="assets/css/footer/footer-question.css">
    <link rel="stylesheet" href="assets/css/question/alternatives.css">
    <link rel="stylesheet" href="assets/css/question/question-colors.css">
    <link rel="stylesheet" href="assets/css/scroll.css">

    <link rel="stylesheet" href="assets/css/question/alternative__select.css">
    <link rel="stylesheet" href="assets/css/question/alternative__select-human.css">



</head>
<body>
    <header class="nav-header">

        <nav class="nav-bar-header">
            
            <ul class="nav-list-header">

                <li class="nav-item-header">
                    <a href="human-selected.php" class="nav-link">
                        <div class="logo-container">
                            <img src="assets/img/logo.svg" alt="logo">
                        </div>        
                    </a>
                </li>
            </ul>
        </nav>
    </header>   

    <main class="main-content">

        <header class="progress-bar-container">
            <a href="human-theory.php" class="progress-bar-link btn return">
                <img src="assets/img/return-icon.svg" alt="Ícone de voltar" class="btn-icon return-icon">
            </a>

            <section class="progress-bar">
                <div class="progress-bar-full">
                    <div class="progress-bar-actual"></div>
                </div>
            </section>
        </header>

        <article class="question-container human-science">
            <section class="question-paragraph-container">
                <p class="question-paragraph">Qual era a principal característica geográfica da Mesopotâmia que favoreceu o desenvolvimento das civilizações na região?</p>
            </section>

            <!-- <div class="img-container">
                <img src="assets/img/math-img.svg" alt="Imagem do conteúdo" class="img">
            </div> -->

            <section class="alternatives-container human-science">
                <ol class="alternative-list" type="a">
                    <li class="alternative">
                        <span class="alternative-item">
                            A
                        </span>
                        A presença de desertos férteis
                    </li>

                    <li class="alternative">
                        <span class="alternative-item">
                            B
                        </span>
                        A proximidade com o Mar Mediterrâneo
                    </li>

                    <li class="alternative">
                        <span class="alternative-item">
                            C
                        </span>
                        A localização entre os rios Tigre e Eufrates
                    </li>

                    <li class="alternative">
                        <span class="alternative-item">
                            D
                        </span>
                        A presença de cadeias montanhosas ao redor
                    </li>

                    <li class="alternative">
                        <span class="alternative-item">
                            E
                        </span>
                        A abundância de recursos minerais
                    </li>

                </ol>
            </section>

        </article>

        <footer class="footer-question">
            <button class="notebook-btn btn">
                <img src="assets/img/notebook.svg" alt="Botão de Caderno para Anotações" class="btn-icon">
            </button>

            <a href="math-question.php" class="next btn">
                <img src="assets/img/next.svg" alt="Próximo" class="btn-icon">
            </a>
        </footer>
    </main>

    <script src="assets/js/question-alternatives/alternative__select.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streaming de Filmes</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

</head>
<body>
    <header>
        <div class="container">
            <h1>Streaming de Filmes</h1>
            <nav>
                <ul>
                    <li><a href="#">Início</a></li>
                    <li><a href="#">Filmes</a></li>
                    <li><a href="#">Séries</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="equipe.html">Equipe do Trabalho</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main>
        <section class="destaque">
            <div class="container">
                <h2>Assista aos melhores filmes em streaming!</h2>
                <p>Combo de Pipoca<span>R$ 39,90</span></p>
                <p>Encontre seus filmes favoritos e descubra novas pérolas do cinema.</p>
                <a href="#" class="btn">Comece a explorar</a>
            </div>
        </section>

        <section class="filmes-em-destaque">
            <div class="container">
                <h2>Filmes em Destaque</h2>
                <!-- Coloque os filmes em destaque aqui -->
                <div class="filme-card">
                    <img src="aranha.png" alt="Homem Aranha">
                    <div class="filme-info">
                        <h3 class="filme-titulo">Homem Aranha</h3>
                        <p class="filme-descricao">Conheça Peter Parker e suas aventuras.</p>
                        <p class="filme-preco">R$ 19,90</p>
                    </div>
                </div>

                <div class="filme-card">
                    <img src="thor.png" alt="Thor">
                    <div class="filme-info">
                        <h3 class="filme-titulo">Thor</h3>
                        <p class="filme-descricao">O Deus do Trovão vai enfrentar um dos maiores desafios da sua vida.</p>
                        <p class="filme-preco">R$ 24,90</p>
                    </div>
                </div>
                <!-- Aqui a gente adicione mais cards se quiser so copiar o de cima e replicar -->
            </div>
        </section>

        <section class="carrossel">

            <div class="container">

                <h2>Nossos Melhores Filmes</h2>
                <div class="swiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="project-img">
                                <img src="./imagens/cassino-1280x720.jpg">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="project-img">
                                <img src="./imagens/oppenheimer-1280x720.jpg">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="project-img">
                                <img src="./imagens/terminator-2-1280x720.jpg">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="project-img">
                                <img src="./imagens/the-godfather-1280x720.jpg">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="project-img">
                                <img src="./imagens/the-thing-1280x720.jpg">
                            </div>
                        </div>

                    </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>

    <footer>
        <div class="container">
            <p>&copy; 2024 Streaming de Filmes</p>
        </div>
    </footer>
</body>
</html>

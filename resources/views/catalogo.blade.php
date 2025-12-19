<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="shortcut icon" href="{{ asset('images/Vibe roxo sem fundo.png') }}" type="image/x-icon">
    @vite([
    'resources/css/catalogo.css',
    'resources/js/profile-menu.js',
    'resources/js/tmdb-movies.js',
    'resources/js/tvmaze-series.js'
])

    <title>Document</title>
</head>
<body>
   <header class="vibe-header">

    <!-- Linha superior: logo | busca | perfil -->
    <div class="header-top">

        <!-- Logo -->
        <div class="header-logo">
            <a href="#" class="logo"><img src="{{ asset('images/VibeNomeLadoSemFundo.png') }}" alt="">
        </a>
        </div>

        <!-- Barra de pesquisa -->
        <div class="header-search">
            <form action="#" method="get" class="search-form">
                <input
                    type="search"
                    id="search"
                    name="q"
                    placeholder="Buscar..."
                    autocomplete="off"
                >
            <button type="submit"><svg xmlns="http://www.w3.org/2000/svg"   width="20"    height="20"      viewBox="0 0 24 24"   fill="none"       stroke="currentColor"   stroke-width="2"      stroke-linecap="round"     stroke-linejoin="round" ><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg></button>
            </form>
        </div>

        <!-- Perfil do usuário -->
        <div class="header-user">
            <div class="user-profile">

                <button class="profile-button" aria-label="Menu do usuário">
                    <img
                        src="https://via.placeholder.com/40"
                        alt="Foto do perfil"
                    >
                </button>

                <div class="profile-menu">
                    <ul>
                        <li><a href="#">Meu perfil</a></li>
                        <li><a href="#">Minhas listas</a></li>
                        <li><a href="#">Avaliações</a></li>
                        <li><a href="#">Configurações</a></li>
                        <li><form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">Sair</button>
                         </form></li>
                    </ul>
                </div>

            </div>
        </div>

    </div>

    <!-- Linha inferior: navegação principal -->
    <div class="header-bottom">
        <nav class="main-nav">
            <ul>
                <li><a href="#">Explorar</a></li>
                <li><a href="#">Filmes</a></li>
                <li><a href="#">Séries</a></li>
                <li><a href="#">Músicas</a></li>
                <li><a href="#">Jogos</a></li>
                <li><a href="#">Animes</a></li>
                <li><a href="#">Listas</a></li>
            </ul>
        </nav>
    </div>

    </header>

    <main>
    <div class="catalogo">
            <h2>Nosso catalogo</h2>
        <div class="carousel-wrapper">
    <button class="carousel-btn prev">‹</button>

    <div class="cards-midias">
        <ul>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            
        </ul>
    </div>

    <button class="carousel-btn next">›</button>
        </div>
    </div>

    <div class="catalogo">
            <h2>Nossos Filmes</h2>
        <div class="carousel-wrapper">
    <button class="carousel-btn prev">‹</button>

    <div class="cards-midias">
        <ul id="movies-list">
            
            
        </ul>
    </div>

    <button class="carousel-btn next">›</button>
        </div>
    </div>

    <div class="catalogo">
            <h2>Nossas Series</h2>
        <div class="carousel-wrapper">
    <button class="carousel-btn prev">‹</button>

    <div class="cards-midias">
        <ul id="series-list">
            
        </ul>
    </div>

    <button class="carousel-btn next">›</button>
        </div>
    </div>

     <div class="catalogo">
            <h2>Nossas Musicas</h2>
        <div class="carousel-wrapper">
    <button class="carousel-btn prev">‹</button>

    <div class="cards-midias">
        <ul>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            
        </ul>
    </div>

    <button class="carousel-btn next">›</button>
        </div>
    </div>

    <div class="catalogo">
            <h2>Nossos Jogos</h2>
        <div class="carousel-wrapper">
    <button class="carousel-btn prev">‹</button>

    <div class="cards-midias">
        <ul>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            
        </ul>
    </div>

    <button class="carousel-btn next">›</button>
        </div>
    </div>
    
    <div class="catalogo">
            <h2>Nossos Animes</h2>
        <div class="carousel-wrapper">
    <button class="carousel-btn prev">‹</button>

    <div class="cards-midias">
        <ul>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/VibeNomeEmbaixo.png') }}" alt=""></a></li>
            
        </ul>
    </div>

    <button class="carousel-btn next">›</button>
        </div>
    </div>
    </main>


    <footer class="site-footer">
        <div class="footer-container">
            
            <div class="footer-top">
                <nav class="footer-links">
                    <a href="#">Sobre nós</a>
                    <a href="#">Contato</a>
                    <a href="#">Política de Privacidade</a>
                    <a href="#">Termos</a>
                    <a href="#">Ajuda</a>
                </nav>

                <div class="footer-social">
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a> 
                    <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>

            <div class="footer-bottom">
                <p>
                    &copy; 2025 VIBE. Todos os direitos reservados. 
                    <span class="separator">|</span> 
                    Feito por fãs para fãs.
                </p>
            </div>

        </div>
    </footer>
    

</body>
</html>

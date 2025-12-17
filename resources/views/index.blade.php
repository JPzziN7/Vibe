<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="shortcut icon" href="{{ asset('images/Vibe roxo sem fundo.png') }}" type="image/x-icon">
    <title>VIBE</title>
    @vite('resources/css/style.css')
</head>
<body>
    <header>
        <div id="logo"> <a href="#main"><img src="{{ asset('images/Vibe roxo sem fundo.png') }}" alt=""></a></div>
        <nav>
            <ul>
                <li><a href="#about">Sobre</a></li>
                <li><a href="#rodape">Contato</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#">Cadastro</a></li>
            </ul>
        </nav>
    </header>

    <div id="main">
        <div class="principal">
            <div>
        <img src="{{ asset('images/VibeNomeLadoSemFundo.png') }}" alt="">
        <h2>Seu gosto cultural em um só Lugar.</h2>
        </div>
        <a href="#">Começar</a>
        </div>
        <div class="imagem"><img src="{{ asset('images/personagemSemFundo.png') }}" alt=""></div>    
    </div>
    <div id="about">
        <h1>Sobre</h1>
        <p>O VIBE é um espaço criado para quem acredita que filmes, séries e músicas vão além do entretenimento e fazem parte da forma como nos expressamos. Aqui, você pode avaliar produções, criar listas, organizar seus favoritos e descobrir novas obras com base no seu gosto pessoal. Mais do que notas ou rankings, o VIBE valoriza opiniões, sentimentos e experiências, permitindo que cada perfil reflita a identidade de quem está por trás dele. Também é um lugar de conexão, onde pessoas com diferentes vivências culturais podem se acompanhar, trocar ideias e se inspirar mutuamente, tudo em um ambiente simples, acolhedor e pensado para que você se sinta à vontade para expressar sua vibe cultural.</p>
    </div>
    <div class="exemplos">
        <h1>Conheça o Catalogo</h1>
    <div class="cards">
        <div class="card"> <img src="{{ asset('images/albumBlonde.jpg') }}" alt=""> <a href="#">Começar</a></div>
        <div class="card"> <img src="{{ asset('images/JawsPoster.jpg') }}" alt=""> <a href="#">Começar</a></div>
        <div class="card"> <img src="{{ asset('images/DevoltaparaOfuturoPoster.jpg') }}" alt=""> <a href="#">Começar</a></div>
        <div class="card"> <img src="{{ asset('images/SupermanPoster.jpg') }}" alt=""> <a href="#">Começar</a></div>
        <div class="card"> <img src="{{ asset('images/StrangerThingsPoster.jpg') }}" alt=""> <a href="#">Começar</a></div>
    </div>
    </div>

    <div class="patrocinios">
    <h1>Nossos Patrocinadores</h1>

    <div class="cards">
        <div class="card">
            <a href="#">
                <img src="{{ asset('images/sem-resultados.png') }}" alt="">
            </a>
        </div>

        <div class="card">
            <a href="#">
                <img src="{{ asset('images/sem-resultados.png') }}" alt="">
            </a>
        </div>

        <div class="card">
            <a href="#">
                <img src="{{ asset('images/sem-resultados.png') }}" alt="">
            </a>
        </div>

        <div class="card">
            <a href="#">
                <img src="{{ asset('images/sem-resultados.png') }}" alt="">
            </a>
        </div>
    </div>
</div>
    






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
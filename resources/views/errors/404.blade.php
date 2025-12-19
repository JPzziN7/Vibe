<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>404 — Página não encontrada | Vibe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   @vite('resources/css/404.css')
   <link rel="shortcut icon" href="{{ asset('images/Vibe roxo sem fundo.png') }}" type="image/x-icon">
</head>
<body>
    <main class="error-container">
        <h1>404</h1>

        <p class="error-title">
            Essa produção não foi encontrada 🎬
        </p>

        <p class="error-text">
            Parece que você tentou acessar algo que não está no catálogo do Vibe.
        </p>

        <a href="/" class="btn-home">
            Voltar para o Vibe
        </a>
    </main>
</body>
</html>
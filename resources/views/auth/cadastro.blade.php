<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   @vite(['resources/css/cadastro.css', 'resources/js/cadastro.js'])
  <title>Cadastro | VIBE</title>
  <link rel="shortcut icon" href="{{ asset('images/Vibe roxo sem fundo.png') }}" type="image/x-icon">
</head>
<body>
  <div class="main">
  <h1>Criar conta</h1>
  <p>Entre e comece a expressar sua <span><a href="{{ route('home') }}">VIBE</a></span></p>
  

  <form method="POST" action="{{ route('cadastro.store') }}" method="post">
     @csrf
    <div class="inputBox">
      <input type="text" id="name" name="name" required class="inputUser"  placeholder="">
      <label for="name" class="labelInput">Nome de usuário:</label>
    </div>

    <div class="inputBox">
      <input type="email" id="email" name="email" required class="inputUser" placeholder="">
      <label for="email" class="labelInput">Email:</label>
      <span class="errorMsg" id="emailError">Digite um email válido</span>
    </div>

    <div class="inputBox">
      <input type="password" id="password" name="password" required class="inputUser" placeholder="">
      <label for="password" class="labelInput">Senha:</label>
      <span class="errorMsg" id="passwordError">A senha deve ter pelo menos 8 caracteres</span>

    </div>

    <div class="inputBox">
      <input type="password" id="password_confirmation" name="password_confirmation" required class="inputUser"  placeholder="">
       <label for="password_confirmation" class="labelInput">Confirmar senha:</label>
       <span class="errorMsg" id="confirmError">As senhas não coincidem</span>
    </div>

    <button type="submit">Criar conta</button>
    <div class="social-icons">
  <!-- Google -->
  <a href="#" class="social-icon google">
    <svg viewBox="0 0 533.5 544.3">
      <path fill="#DB4437" d="M533.5 278.4c0-18.7-1.5-37-4.5-54.7H272v103.6h146.9c-6.3 34-25.2 62.8-53.6 82v68.2h86.6c50.7-46.8 79.6-115.5 79.6-199.1z"/>
      <path fill="#0F9D58" d="M272 544.3c72.6 0 133.7-24 178.3-65.1l-86.6-68.2c-24.1 16.1-55 25.5-91.7 25.5-70.6 0-130.5-47.7-151.8-111.5H32.1v69.9c44.5 88.1 136 149.4 239.9 149.4z"/>
      <path fill="#F4B400" d="M120.2 325.4c-11.5-34-11.5-70.9 0-104.9v-69.9H32.1c-44.4 88.1-44.4 193.7 0 281.8l88.1-69z"/>
      <path fill="#4285F4" d="M272 107.3c37.6-.6 73.3 13 100.7 37.5l75.2-75.2C404.4 24 343.3 0 272 0 168.1 0 76.6 61.3 32.1 149.4l88.1 69c21.3-63.8 81.2-111.5 151.8-111.1z"/>
    </svg>
  </a>

  <!-- Facebook -->
  <a href="#" class="social-icon facebook">
    <svg viewBox="0 0 96.1 96.1">
      <path fill="#4267B2" d="M72.1 0H24C10.8 0 0 10.8 0 24v48.1c0 13.2 10.8 24 24 24h24.9V58.9H41.4V45.7h7.5v-8.6c0-7.4 4.5-11.4 11-11.4 3.1 0 5.8.2 6.6.3v7.7h-4.6c-3.6 0-4.3 1.7-4.3 4.2v5.5h8.6l-1.1 13.2h-7.5V96H72c13.2 0 24-10.8 24-24V24c0-13.2-10.8-24-24-24z"/>
    </svg>
  </a>
</div>


  </form>

  <p>Já tem uma conta? <a href="{{ route('login') }}">Entrar</a></p>
  </div>
  <script src="assets/js/cadastro.js"></script>
</body>
</html>
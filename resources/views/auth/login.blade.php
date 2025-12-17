<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/cadastro.css', 'resources/js/login.js'])
  <link rel="shortcut icon" href="{{ asset('images/Vibe roxo sem fundo.png') }}" type="image/x-icon">
  <title>Login | VIBE</title>
</head>
<body>
  
  <div class="main">
  <h1>Entrar</h1>
  <p>Bem-vindo de volta! Entre e continue expressando sua <span><a href="{{ route('home') }}">VIBE</a></span></p>

  @if(session('status'))
    <div class="statusMsg">
        {{ session('status') }}
    </div>
  @endif

    @if ($errors->any())
    <div class="laravelErrorMsg show">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

  <form action="{{ route('login.store') }}" method="POST">
    
    @csrf
    
    <div class="inputBox">
      <input type="email" id="email" name="email" placeholder="" required class="inputUser" value="{{ old('email') }}">
      <label for="email" class="labelInput">Email</label>
       <span class="errorMsg" id="emailError">Digite um email válido</span>
    </div>

    <div class="inputBox">
      <input type="password" id="password" name="password" placeholder="" required class="inputUser">
      <label for="password" class="labelInput">Senha</label>
    </div>

    <button type="submit">Entrar</button>
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
  
</div>
  </form>

  <p>
    Não tem uma conta? <a href="{{ route('cadastro') }}">Criar conta</a><br> <br>
    Esqueceu a senha? <a href="{{ route('password.request') }}">Recuperar senha</a>
  </p>
</div>
  <script src="assets/js/login.js"></script>
</body>
</html>
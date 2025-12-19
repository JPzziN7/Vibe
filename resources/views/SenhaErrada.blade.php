<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/cadastro.css', 'resources/js/recovery.js'])
  <link rel="shortcut icon" href="{{ asset('images/Vibe roxo sem fundo.png') }}" type="image/x-icon">
  <title>Recuperar senha | VIBE</title>
</head>
<body>
  <div class="main">
    <h1>Recuperar senha</h1>
    <p>Digite seu e-mail e enviaremos um link para redefinir sua senha.</p>

    <form method="POST" action="{{ route('password.email') }}">
    @csrf

    @if (session('status'))
        <div class="status">{{ session('status') }}</div>
    @endif

    <div class="inputBox">
        <input type="email" id="recoveryEmail" name="email" required class="inputUser" placeholder="">
        <label for="recoveryEmail" class="labelInput">E-mail cadastrado</label>
        <span class="errorMsg" id="emailError">Digite um e-mail válido</span>
    </div>

    @error('email')
        <div class="error">{{ $message }}</div>
    @enderror

    <button type="submit">Enviar link</button>
</form>

    <p>Já tem uma conta? <a href="{{ route('login') }}">Entrar</a></p>
    <p>Não tem conta? <a href="{{ route('cadastro') }}">Criar conta</a></p>
  </div>

  <script src="assets/js/recovery.js"></script>
</body>
</html>

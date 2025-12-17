<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/cadastro.css', 'resources/js/resetPassword.js'])
  <title>Redefinir senha | VIBE</title>
  <link rel="shortcut icon" href="{{ asset('images/Vibe roxo sem fundo.png') }}" type="image/x-icon">
</head>
<body>
  <div class="main">
    <h1>Redefinir senha</h1>
    <p>Digite sua nova senha abaixo e confirme para atualizar.</p>

    <!-- Formulário de redefinição de senha -->
    <form method="POST" action="{{ route('password.update') }}">
      @csrf
      <input type="hidden" name="token" value="{{ $token }}">
      <input type="hidden" name="email" value="{{ $email ?? old('email') }}">

      <div class="inputBox">
        <input type="password" id="newPassword" name="password" required class="inputUser" placeholder="">
        <label for="newPassword" class="labelInput">Nova senha</label>
        <span class="errorMsg" id="passwordError">A senha deve ter pelo menos 8 caracteres</span>
      </div>

      <div class="inputBox">
        <input type="password" id="confirmPassword" name="password_confirmation" required class="inputUser" placeholder="">
        <label for="confirmPassword" class="labelInput">Confirmar nova senha</label>
        <span class="errorMsg" id="confirmError">As senhas não coincidem</span>
      </div>

      <!-- Mensagens de erro do Laravel -->
      @error('password')
          <div class="error">{{ $message }}</div>
      @enderror

      <button type="submit">Redefinir senha</button>
    </form>

    <p>Voltar para <a href="{{ route('login') }}">Entrar</a></p>
  </div>

  <script src="assets/js/resetPassword.js"></script>
</body>
</html>
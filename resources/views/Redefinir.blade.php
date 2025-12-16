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

    <form action="#" method="post">
      <div class="inputBox">
        <input type="password" id="newPassword" name="newPassword" required class="inputUser" placeholder="">
        <label for="newPassword" class="labelInput">Nova senha</label>
        <span class="errorMsg" id="passwordError">A senha deve ter pelo menos 8 caracteres</span>
      </div>

      <div class="inputBox">
        <input type="password" id="confirmPassword" name="confirmPassword" required class="inputUser" placeholder="">
        <label for="confirmPassword" class="labelInput">Confirmar nova senha</label>
        <span class="errorMsg" id="confirmError">As senhas não coincidem</span>
      </div>

      <button type="submit">Redefinir senha</button>
    </form>

    <p>Voltar para <a href="#">Entrar</a></p>
  </div>

  <script src="assets/js/resetPassword.js"></script>
</body>
</html>

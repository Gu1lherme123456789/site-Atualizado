<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Contato</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/contato.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/inicialPage.css') }}" rel="stylesheet" type="text/css" />

</head>
<body>
  <div class="navegacao">
    <!-- Ícone de seta de voltar -->
    <a href="javascript:history.back()" class="back-arrow">
        <i class="fas fa-arrow-left"></i> Voltar
    </a>
    <h1>Entre em Contato</h1>
  </div>
  <div class="cont">
    <div class="cabecalho">
    <img class="imgPremium" src="img/conhecimento.png" alt="" />
        <button class="toggle-btn" onclick="toggleMode()" id="btn">Alterar fundo</button>
    </div>

  <div class="containerr">
    <form>
      <h2>Form de Contato</h2>
      <div class="form-group">
        <label for="name">Insira seu nome:</label>
        <input type="text" id="name" name="name" placeholder="Digite seu nome" required>
      </div>
      <div class="form-group">
        <label for="email">Insira seu e-mail:</label>
        <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
      </div>
      <div class="form-group">
        <label for="message">Insira sua mensagem:</label>
        <textarea id="message" name="message" placeholder="Digite sua mensagem" required></textarea>
      </div>
      <button onclick="enviarContato()" type="submit" class="btnContato">Enviar</button>
    </form>
    <h1>Nos encontre nessas redes sociais:</h1>
<div class="social-icons">
  <i class="fab fa-facebook-f"></i>
  <i class="fab fa-instagram"></i>
  <i class="fab fa-linkedin-in"></i>
</div>
  </div>
  <a class="usos" href="/TermosdeUso">Termos de Uso</a>
  <footer>
        <div class="container">
            <p>&copy; 2024 Conhecimento Premium. Todos os direitos reservados.</p>
            <div class="social-links">
                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
            </div>
        </div>
  </footer>
  <script src="{{ asset('js/contato.js') }}"></script>
</body>
</html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Contato</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/contato.css') }}" rel="stylesheet" type="text/css"/>
  </head>
<body>
  <link href="{{ asset('css/contato.css') }}" rel="stylesheet" type="text/css"/>
</head>
<body>
  <div class="navegacao">
    <a href="/Comentarios">Comente algo</a>
    <a href="/Materias"> Matérias </a>
    <a href="/Duvidas">Informe sua dúvida para nós</a>
    <a href="/Avaliacao">Avalie-nos</a>
    <a href="/Sobre">Sobre Nós</a>
  </div>
  <div class="cabecalho">
    <h1 id="cabecalho">CONHECIMENTOPREMIUM</h1>
    <button class="toggle-btn" onclick="toggleMode()" id="btn">Alterar fundo</button>
  </div>
  <div class="container">
    <form id="contactForm" class="contact-form">
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
      <button type="submit" class="btnContato">Enviar</button>
    </form>
    <h1 class="nrr">Nos encontre nessas redes sociais:</h1>
<div class="social-icons">
  <i class="fab fa-facebook-f"></i>
  <i class="fab fa-instagram"></i>
  <i class="fab fa-linkedin-in"></i>
</div>
  </div>
  <a class="usos" href="/TermosdeUso">Termos de Uso</a>
  <script src="{{ asset('js/contato.js') }}"></script>
</body>
</html>

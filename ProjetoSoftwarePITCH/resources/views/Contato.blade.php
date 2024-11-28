<html lang="pt-br">
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Página de Contato</title>
            <link href="{{ asset('css/contato.css') }}" rel="stylesheet" type="text/css"/>
            <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        </head>

        <body class="container">
            <header>
                <!-- Botão do menu hambúrguer -->
                <div class="menu-toggle" id="menuToggle">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
                <!-- Botão de voltar -->
                <div class="menu-back" id="menuBack">Voltar</div>

                <img class="imgPremium" src="img/conhecimento.png" alt="Conhecimento Premium" />
                <button class="toggle-btn" onclick="toggleMode()" id="btn">Alterar fundo</button>
            </header>

          <!-- Menu Lateral -->
          <nav id="menu" class="menu">
            <ul>
                <li><a href="/Comentarios">💬Comentarios</a></li>
                <li><a href="/Professores">👨‍🏫Professores</a></li>
                <li><a href="/Materias">📝Matérias</a></li>
                <li><a href="/Favoritas"> 📙Matérias Favoritas</a></li>
                <li><a href="/Calendario">👑VIP: Aulas ao vivo</a></li>
                <li><a href="/Duvidas">❓Informe sua dúvida</a></li>
                <li><a href="/Avaliacao">✅Avalie-nos</a></li>
                <li><a href="/Sobre">👁️Sobre Nós</a></li>
              </ul>
            </ul>
          </nav>

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
  </div>

  <a class="usos" href="/TermosdeUso">Termos de Uso</a>
  <footer>
      <div class="container">
          <p>&copy; 2024 Conhecimento Premium. Todos os direitos reservados.</p>
      </div>
  </footer>
</div>

<script src="{{ asset('js/contato.js') }}"></script>

</body>
</html>

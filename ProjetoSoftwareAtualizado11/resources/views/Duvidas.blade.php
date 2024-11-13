<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página de Dúvidas</title>
  <link href="{{ asset('css/duvidas.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/inicialPage.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/materias.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
<header>
    <!-- Botão do menu hambúrguer -->
    <div class="menu-toggle" id="menuToggle">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </div>
    <img class="imgPremium" src="img/conhecimento.png" alt="Conhecimento Premium" />
    <button class="toggle-btn" onclick="toggleMode()" id="btn">Alterar fundo</button>
  </header>

  <!-- Menu Lateral -->
  <nav id="menu" class="menu">
    <ul>
      <li><a href="/Comentarios">💬Comentarios</a></li>
      <li><a href="/Professores">👨‍🏫Professores</a></li>
      <li><a href="/Favoritas"> 📙Matérias Favoritas</a></li>
      <li><a href="/Calendario">👑VIP: Aulas ao vivo</a></li>
      <li><a href="/Duvidas">❓Informe sua dúvida</a></li>
      <li><a href="/Avaliacao">✔️Avalie-nos</a></li>
      <li><a href="/Contato">📞Contatos</a></li>
      <li><a href="/Sobre">Sobre Nós</a></li>
    </ul>
  </nav>

    <div class="container">
      <div class="duvidas-container">
        <div id="cabecalhoLogin">
          <h1 id="cabecalhoLogin1">Escreva sua(s) Dúvida(s) aqui</h1>
          <form action="" class="form-duvidas" onsubmit="adicionarDuvida(event)">
            <div class="form-group">
              <input type="text" id="duvida-input"  required="required">
                    </div>
            <button type="submit" class="btnDuvidas">Enviar</button>
          </form>
        </div>

        <div id="duvidas">
          <!-- Dúvidas serão exibidas aqui -->
        </div>
      </div>
    </div>

    <a class="usos" href="/TermosdeUso"> Termos de Uso </a>
      <footer>
          <div class="container">
              <p>&copy; 2024 Conhecimento Premium. Todos os direitos reservados.</p>
              <div class="social-links">
                  <a href="#">Facebook</a>
                  <a href="#">Instagram</a>
              </div>
          </div>
      </footer>
    <script src="{{ asset('js/duvidas.js') }}"></script>
    <script src="{{ asset('js/materias.js') }}"></script>
</body>

</html>
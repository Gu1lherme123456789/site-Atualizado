<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página de Dúvidas</title>
        <link href="{{ asset('css/duvidas.css') }}" rel="stylesheet" type="text/css"/>
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
            <li><a href="/Avaliacao">✅Avalie-nos</a></li>
            <li><a href="/Contato">📞Contatos</a></li>
            <li><a href="/Sobre">👁️Sobre Nós</a></li>
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

    <a class="usos" href="/TermosdeUso">Termos de Uso</a>
    <footer style="  bottom: 0;
        position: fixed;
        width: 100%;
        text-align: center;">
        <div class="container">
            <p>&copy; 2024 Conhecimento Premium. Todos os direitos reservados.</p>
        </div>
    </footer>
  </div>

  <script src="{{ asset('js/duvidas.js') }}"></script>

</body>
</html>

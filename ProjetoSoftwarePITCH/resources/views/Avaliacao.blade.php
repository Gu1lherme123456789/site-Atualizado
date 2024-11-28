<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página de Avaliação</title>
        <link href="{{ asset('css/avaliacao.css') }}" rel="stylesheet" type="text/css"/>
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
            <li><a href="/Contato">📞Contatos</a></li>
            <li><a href="/Sobre">👁️Sobre Nós</a></li>
          </ul>
          </ul>
        </ul>
      </nav>

      <!-- Formulario -->
    <div class="form-container">
      <div class="form-group">
        <label for="professor">Digite o nome do professor:</label>
        <input type="text" id="professor" name="professor">
      </div>

      <div class="form-group">
        <label for="materia">Digite a matéria que ele ensina:</label>
        <input type="text" id="materia" name="materia">
      </div>


      <!-- forms de estrelas -->
      <div class="avaliacao">
        <h2>Avalie nosso site:</h2>
        <div class="estrelas">
          <span class="star-icon" data-avaliacao="1">&#9734;</span>
          <span class="star-icon" data-avaliacao="2">&#9734;</span>
          <span class="star-icon" data-avaliacao="3">&#9734;</span>
          <span class="star-icon" data-avaliacao="4">&#9734;</span>
          <span class="star-icon" data-avaliacao="5">&#9734;</span>
        </div>
        <button id="enviar-avaliacao" class="btnAvaliacao">Enviar avaliação</button>
        <p id="resultado-avaliacao" class="resultAvaliacao"></p>
      </div>
    </div>
  </div>


      <!-- footer e termos de uso -->
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


<!-- link pro javascript -->
<script src="{{ asset('js/avaliacao.js') }}"></script>


</body>
</html>

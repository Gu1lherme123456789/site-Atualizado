<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Espanhol</title>
    <link href="{{ asset('css/espanhol.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <!-- Botão do menu hambúrguer -->
        <div class="menu-toggle" id="menuToggle">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
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
        <li><a href="/Contato">📞Contatos</a></li>
        <li><a href="/Sobre">👁️Sobre Nós</a></li>
    </ul>
</nav>

    <div class="title">
        <h1>ESPAÑOL</h1>
    </div>

    <div id="centro">
        <div class="div">
            <img src="https://www.shutterstock.com/image-vector/spanish-espanol-hablas-hallotranslation-do-260nw-2391002103.jpg" alt="Imagem de Espanhol" class="hover-image">
        </div>
    </div>

    <div class="box-materials">
        <h1>Enlaces a los temas más relevantes para ENEM</h1>
        <a href="https://youtu.be/b4bAuswvMWg?si=FtLnkB-akHEoVke-">Interpretación y comprensión textual</a> <br>
        <a href="https://youtu.be/ajllxqY24zU?si=v8bD2kme3YdnI5Ku">Semántica y léxico</a> <br>
        <a href="https://youtu.be/tNhBbIkX1Uc?si=8nPcNEsF8PJ9uL3W">Funciones de texto</a> <br>
        <a href="https://youtu.be/JGygQBPQXIQ?si=kzJUkBnvHZHPEjhg">Tirinhas e charge</a> <br>
        <a href="https://www.youtube.com/live/0bT97cQPO74?si=83LRr8r9c7ui29jL">Figuras da linguagem</a> <br>
        <a href="https://www.youtube.com/live/sgKF4qA8zJI?si=Qz6KywbowP7qqxSa">Géneros textuales</a> <br>
        <a href="https://youtu.be/1ps7SCk2QfM?si=-3DwQu0rrzsave0m">Cultura Hispana</a>
    </div>

    <a class="usos" href="/TermosdeUso">Termos de Uso</a>
    <footer>
        <div class="container">
            <p>&copy; 2024 Conhecimento Premium. Todos os direitos reservados.</p>
        </div>
    </footer>
  </div>

  <script src="{{ asset('js/espanhol.js') }}"></script>

</body>
</html>

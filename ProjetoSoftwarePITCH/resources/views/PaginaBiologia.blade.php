<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Biologia</title>
    <link href="{{ asset('css/biologia.css') }}" rel="stylesheet" type="text/css"/>
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
    </ul>
</nav>

        <div class="title">
            <h1>Biologia</h1>
        </div>

        <div id="centro">
            <div class="div">
                <img  src="https://quizizz.com/media/resource/gs/quizizz-media/quizzes/33a85b12-e2c8-46bf-9845-023ebdafba3b?w=200&h=200" alt="" class="hover-image">
            </div>
        </div>

        <div class="box-materials">
            <h2>Links de matérias mais relevantes para o ENEM</h2>
            <a href="https://youtu.be/rjH2xzCwNx0?si=mluLvfVzUsxKjN9n">Citologia</a> <br>
            <a href="https://youtu.be/-Vv3USW7iRU?si=sB9up8AqTto_hsot">Genética</a> <br>
            <a href="https://youtu.be/EzaSQku5Ev0?si=HB9M0WiK3TpaHahd">Fisiologia</a> <br>
            <a href="https://youtu.be/UevIrigBobM?si=5dLpdhXda5L-_2JF">Ecologia</a> <br>
            <a href="https://youtu.be/4WO-A_GaA1o?si=VuZztMXRY0CnoU5e">Evolução</a> <br>
            <a href="https://youtu.be/1E8EOECv4mY?si=yXJjjWlC30J9yLSV">Fisiologia</a> <br>
            <a href="https://youtu.be/w4kCRLP5_dQ?si=GOczfHjAXCkabOMf">Sistema Digestório</a>
        </div>

        <a class="usos" href="/TermosdeUso">Termos de Uso</a>
        <footer>
            <div class="container">
                <p>&copy; 2024 Conhecimento Premium. Todos os direitos reservados.</p>
            </div>
        </footer>
      </div>

      <script src="{{ asset('js/biologia.js') }}"></script>

</body>
</html>

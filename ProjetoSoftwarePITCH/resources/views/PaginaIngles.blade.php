<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inglês</title>
    <link href="{{ asset('css/ingles.css') }}" rel="stylesheet" type="text/css"/>
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
            <h1>Inglês</h1>
        </div>

        <div id="centro">
            <div class="div">
                <img src="https://img.freepik.com/vetores-gratis/fundo-de-escola-de-ingles-desenhado-a-mao_23-2149483339.jpg" alt="" class="hover-image">
            </div>
        </div>

        <div class="box-materials">
            <h2>Links para os tópicos mais relevantes para o ENEM</h2>
            <a href="https://youtu.be/rfPw-_wRxyY?si=wtDnUuCqhAAbe1v5">Simple Present</a> <br>
            <a href="https://youtu.be/jalQ1_7jOqA?si=yskmeFqXVI00x6Fi">Present Continuous</a> <br>
            <a href="https://youtu.be/7fOuyZiydHY?si=6-2evj0vjafJ08C0">Simple Past</a> <br>
            <a href="https://youtu.be/Qv7K2YneVfY?si=Pgd6IrDP2e7mywcN">Past Continuous</a> <br>
            <a href="https://youtu.be/Nq8-vzfajXU?si=qIUy9-Qwjt_W62ZA">Simple Future</a> <br>
            <a href="https://youtu.be/bZllYpm7S5k?si=XvkVndMO2kbgxeRD">Present Perfect Simple</a> <br>
            <a href="https://youtu.be/SK88dcFOyw4?si=exQlqt-kU6XSj0aX">Future Perfect Continuous</a>
        </div>

        <a class="usos" href="/TermosdeUso">Termos de Uso</a>
        <footer>
            <div class="container">
                <p>&copy; 2024 Conhecimento Premium. Todos os direitos reservados.</p>
            </div>
        </footer>
      </div>

      <script src="{{ asset('js/ingles.js') }}"></script>

</body>
</html>

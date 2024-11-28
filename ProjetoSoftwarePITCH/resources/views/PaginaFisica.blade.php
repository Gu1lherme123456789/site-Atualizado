<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Física</title>
    <link href="{{ asset('css/fisica.css') }}" rel="stylesheet" type="text/css"/>
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
    <h1>FÍSICA</h1>
</div>

    <div id="centro">
        <div class="div">
            <img src="https://s1.static.brasilescola.uol.com.br/be/conteudo/images/a-fisica-uma-ciencia-basica-que-explica-as-diversas-formas-interacao-entre-materia-energia-5bf84b0fbba71.jpg" alt="" class="hover-image">
        </div>
    </div>
    <div class="box-materials">
        <h1>Links de matérias mais relevantes para o ENEM</h1>
        <a href="https://youtu.be/f1prnafhQtE?feature=shared">Mecânica</a> <br>
        <a href="https://youtu.be/BP0lo1zroXM?feature=shared">Eletricidade</a> <br>
        <a href="https://youtu.be/Rmgqv8ETn6o?feature=shared">Ondas</a> <br>
        <a href="https://youtu.be/QUvmXOY2WvI?si=s1SoqI4ERNlMvuOU">Termologia</a> <br>
        <a href="https://youtu.be/QHeTTyk6lBE?si=nLb3Vs7tIWcRGkEC">Eletrodinâmica</a> <br>
        <a href="https://youtu.be/oJFhz7jt3S8?si=Ia-zwJa0fBHgMOjp">Cinemática</a> <br>
        <a href="https://youtu.be/CslkVQMKaqU?si=amcUv_iwj9rzdaro">Leis de Newton</a>
    </div>
</div>

<a class="usos" href="/TermosdeUso">Termos de Uso</a>
<footer>
    <div class="container">
        <p>&copy; 2024 Conhecimento Premium. Todos os direitos reservados.</p>
    </div>
</footer>
</div>

<script src="{{ asset('js/fisica.js') }}"></script>

</body>
</html>

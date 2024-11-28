<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Matemática</title>
    <link href="{{ asset('css/matematica.css') }}" rel="stylesheet" type="text/css"/>
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

<div class="container1">
    <div class="title">
        <h1>MATEMÁTICA</h1>
    </div>

    <div id="centro">
        <div class="div">
            <img src="https://www.youtz.com.br/wp-content/uploads/2019/10/YOUTZ-MATEMATICA-ENEM.jpg" alt="Imagem Matemática" class="hover-image">
        </div>
    </div>

    <div class="box-materials">
        <h2>Links de matérias mais relevantes para o ENEM</h2>
        <a href="https://youtu.be/uIulBEk8gcM?feature=shared">Razão e proporção</a> <br>
        <a href="https://youtu.be/XAK7m6SRLPw?feature=shared">Geometria plana</a> <br>
        <a href="https://youtu.be/Y_gD7S6OkC4?feature=shared">Geometria espacial</a> <br>
        <a href="https://youtu.be/rSgs9YD9ns0?si=bRyGeidUynjISwbC">Análise Combinatória</a> <br>
        <a href="https://youtu.be/nYWKUkzmmAE?si=k99ffap0kbFCz0eZ">Porcentagem</a> <br>
        <a href="https://youtu.be/DcYfiXwUFEQ?si=BrHKFnxwHxduTq2x">Equações e funções</a> <br>
        <a href="https://youtu.be/iNCkGogNtKI?si=qOdxkdOuVNPt12Kz">Probabilidade</a>
    </div>

    <a class="usos" href="/TermosdeUso">Termos de Uso</a>
    <footer>
        <div class="container">
            <p>&copy; 2024 Conhecimento Premium. Todos os direitos reservados.</p>
        </div>
    </footer>
</div>

<script src="{{ asset('js/matematica.js') }}"></script>
</body>
</html>

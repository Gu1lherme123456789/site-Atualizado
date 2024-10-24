<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Física</title>
    <link href="{{ asset('css/fisica.css') }}" rel="stylesheet" type="text/css"/>
</head>
<body>

    <div class="navegacao">
        <a href="/Comentarios">  Comente algo  </a>
        <a href="/Materias"> Matérias </a>
        <a href="/Duvidas"> Informe sua dúvida para nós </a>
        <a href="/Avaliacao"> Avalie-nos </a>
        <a href="/Contato"> Entre em Contato </a>
    </div>

<div class="container">
    <div class="cabecalho">
        <h1>CONHECIMENTOPREMIUM</h1>
        <button class="toggle-btn" onclick="toggleMode()" id="btn">Alterar fundo</button>
    </div>
    <div>
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
    <a class="usos" href="/TermosdeUso">Termos de Uso</a>
    <script src="{{ asset('js/fisica.js') }}"></script>
</div>
</body>
</html>

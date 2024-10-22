<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Matmática</title>
    <link href="{{ asset('css/matematica.css') }}" rel="stylesheet" type="text/css"/>
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
        <h1>MATEMÁTICA</h1>
    </div>
    <div id="centro">
    <div class="div">
            <img  src="https://www.youtz.com.br/wp-content/uploads/2019/10/YOUTZ-MATEMATICA-ENEM.jpg" alt="" class="hover-image" >
    </div>
    </div>
    <div class="box-materials">
        <h1>Links de matérias mais relevantes para o ENEM</h1>
        <a href="https://youtu.be/uIulBEk8gcM?feature=shared">Razão e proporção</a> <br>
        <a href="https://youtu.be/XAK7m6SRLPw?feature=shared">Geometria plana </a> <br>
        <a href="https://youtu.be/Y_gD7S6OkC4?feature=shared">Geometria espacial</a> <br>
        <a href="https://youtu.be/rSgs9YD9ns0?si=bRyGeidUynjISwbC">Análise Combinatória</a> <br>
        <a href="https://youtu.be/nYWKUkzmmAE?si=k99ffap0kbFCz0eZ">Porcentagem</a> <br>
        <a href="https://youtu.be/DcYfiXwUFEQ?si=BrHKFnxwHxduTq2x">Equações e funções</a> <br>
        <a href="https://youtu.be/iNCkGogNtKI?si=qOdxkdOuVNPt12Kz">Probabilidade</a>
    </div>
    <a class="usos" href="/TermosdeUso">Termos de Uso</a>
    <script src="{{ asset('js/matematica.js') }}"></script>
  </body>
  </html>

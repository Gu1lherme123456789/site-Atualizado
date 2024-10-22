<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Biologia</title>
    <link href="{{ asset('css/biologia.css') }}" rel="stylesheet" type="text/css"/>
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
        <h1>BIOLOGIA</h1>
    </div>
    <div id="centro">
        <div class="div">
                <img  src="https://quizizz.com/media/resource/gs/quizizz-media/quizzes/33a85b12-e2c8-46bf-9845-023ebdafba3b?w=200&h=200" alt="" class="hover-image" >
        </div>
    </div>
    <div class="box-materials">
        <h1>Links de matérias mais relevantes para o ENEM</h1>
        <a href="https://youtu.be/rjH2xzCwNx0?si=mluLvfVzUsxKjN9n">Citologia</a> <br>
        <a href="https://youtu.be/-Vv3USW7iRU?si=sB9up8AqTto_hsot">Genética</a> <br>
        <a href="https://youtu.be/EzaSQku5Ev0?si=HB9M0WiK3TpaHahd">Fisiologia</a> <br>
        <a href="https://youtu.be/UevIrigBobM?si=5dLpdhXda5L-_2JF">Ecologia</a> <br>
        <a href="https://youtu.be/4WO-A_GaA1o?si=VuZztMXRY0CnoU5e">Evolução</a> <br>
        <a href="https://youtu.be/1E8EOECv4mY?si=yXJjjWlC30J9yLSV">Fisiologia</a> <br>
        <a href="https://youtu.be/w4kCRLP5_dQ?si=GOczfHjAXCkabOMf">Sistema Digestório</a>
    </div>
    <a class="usos" href="/TermosdeUso">Termos de Uso</a>
    <script src="{{ asset('js/biologia.js') }}"></script>
  </body>
  </html>

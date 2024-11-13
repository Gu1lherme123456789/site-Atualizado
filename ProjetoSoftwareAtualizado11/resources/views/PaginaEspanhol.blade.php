<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Espanhol</title>
    <link href="{{ asset('css/espanhol.css') }}" rel="stylesheet" type="text/css"/>
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
        <h1>CONOCIMIENTO PREMIUM</h1>
        <button class="toggle-btn" onclick="toggleMode()" id="btn">Cambiar fondo</button>
    </div>

    <div>
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
    <script src="{{ asset('js/espanhol.js') }}"></script>
</div>

</body>
</html>

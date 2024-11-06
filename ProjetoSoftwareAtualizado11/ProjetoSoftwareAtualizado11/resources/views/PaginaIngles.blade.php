<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inglês</title>
    <link href="{{ asset('css/ingles.css') }}" rel="stylesheet" type="text/css"/>
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
        <h1>PREMIUM KNOWLEDGE</h1>
        <button class="toggle-btn" onclick="toggleMode()" id="btn">Change background</button>
    </div>
    
    <div>
        <h1>ENGLISH</h1>
    </div>

    <div id="centro">
        <div class="div">
            <img src="https://img.freepik.com/vetores-gratis/fundo-de-escola-de-ingles-desenhado-a-mao_23-2149483339.jpg" alt="" class="hover-image">
        </div>
    </div>

    <div class="box-materials">
        <h1>Links to the most relevant subjects for ENEM</h1>
        <a href="https://youtu.be/rfPw-_wRxyY?si=wtDnUuCqhAAbe1v5">Simple Present</a> <br>
        <a href="https://youtu.be/jalQ1_7jOqA?si=yskmeFqXVI00x6Fi">Present Continuous</a> <br>
        <a href="https://youtu.be/7fOuyZiydHY?si=6-2evj0vjafJ08C0">Simple Past</a> <br>
        <a href="https://youtu.be/Qv7K2YneVfY?si=Pgd6IrDP2e7mywcN">Past Continuous</a> <br>
        <a href="https://youtu.be/Nq8-vzfajXU?si=qIUy9-Qwjt_W62ZA">Simple Future</a> <br>
        <a href="https://youtu.be/bZllYpm7S5k?si=XvkVndMO2kbgxeRD">Present Perfect Simple</a> <br>
        <a href="https://youtu.be/SK88dcFOyw4?si=exQlqt-kU6XSj0aX">Future Perfect Continuous</a>
    </div>

    <a class="usos" href="/TermosdeUso">Termos de Uso</a>
    <script src="{{ asset('js/ingles.js') }}"></script>
</div>

</body>
</html>

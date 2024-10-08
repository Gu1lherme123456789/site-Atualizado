
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Comentários</title>
    <link href="{{ asset('css/comentarios.css') }}" rel="stylesheet" type="text/css"/>

</head>
<body>
    <div class="navegacao">
        <a href="/Materias"> Matérias </a>
        <a href="/Duvidas"> Informe sua dúvida para nós </a>
        <a href="/Avaliacao"> Avalie-nos </a>
        <a href="/Contato"> Entre em Contato </a>
        <a href="/Sobre"> Sobre Nós </a>
    </div>

    <div class="container">
            <div class="cabecalho">
            <div class="title-container">
                <h1 id="cabecalho">CONHECIMENTOPREMIUM</h1>
            </div>
                <button class="toggle-btn" onclick="toggleMode()" id="btn">Alterar fundo</button>
            </div>
    <div class="comentarios-container">
        <h1>Comentários</h1>

        <div id="novo-comentario">
            <textarea id="texto-comentario" rows="4" placeholder="Digite seu comentário..."></textarea>
            <button onclick="adicionarComentario()">Postar Comentário</button>
        </div>

        <div id="comentarios">
            <!-- Comentários serão exibidos aqui -->
        </div>
    </div>
    <script src="{{ asset('js/comentarios.js') }}"></script>
    <a class="usos" href="/TermosdeUso"> Termos de Uso </a>
</body>
</html>


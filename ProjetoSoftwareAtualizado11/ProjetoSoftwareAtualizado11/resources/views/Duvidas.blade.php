<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Dúvidas</title>
    <link href="{{ asset('css/duvidas.css') }}" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="navegacao">
        <a href="/Comentarios"> Comente algo </a>
        <a href="/Materias"> Matérias </a>
        <a href="/Avaliacao"> Avalie-nos </a>
        <a href="/Contato"> Entre em Contato </a>
        <a href="/Sobre"> Sobre Nós </a>
    </div>

    <div class="cont">
        <div class="cabecalho">
            <h1>CONHECIMENTOPREMIUM</h1>
            <button class="toggle-btn" onclick="toggleMode()" id="btn">Alterar fundo</button>
        </div>

    <div class="container">
        <div class="duvidas-container">
            <div id="cabecalhoLogin">
                <h1 id="cabecalhoLogin1">Escreva sua(s) Dúvida(s) aqui</h1>
                <form action="" class="form-duvidas" onsubmit="adicionarDuvida(event)">
                    <div class="form-group">
                        <input type="text" id="duvida-input"  required="required">
                    </div>
                    <button type="submit" class="btnDuvidas">Enviar</button>
                </form>
            </div>

            <div id="duvidas">
                <!-- Dúvidas serão exibidas aqui -->
            </div>
        </div>
    </div>

    <a class="usos" href="/TermosdeUso"> Termos de Uso </a>
    <script src="{{ asset('js/duvidas.js') }}"></script>
</body>
</html>

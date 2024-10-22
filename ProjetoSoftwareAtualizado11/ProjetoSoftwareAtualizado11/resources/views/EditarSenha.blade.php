<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Edição de senha</title>
    <link href="{{ asset('css/editarsenha.css') }}" rel="stylesheet" type="text/css"/>
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
        <div>
            <h1 id="cabecalho">CONHECIMENTOPREMIUM</h1>
            <button class="toggle-btn" onclick="toggleMode()" id="btn">Alterar fundo</button>
        </div>

    </div>
    <div id="cabecalhoLogin">

        <form id="editarSenhaForm">
            <h1>Edite sua Senha</h1>
            <label for="email">Digite seu email:</label>
            <input type="email" id="email" name="email" placeholder="Seu email" required>

            <label for="senhaAntiga">Digite sua senha antiga:</label>
            <div class="password-container">
                <input type="password" id="senhaAntiga" name="senhaAntiga" placeholder="Sua senha antiga" required>
                <span class="toggle-password" onclick="togglePassword('senhaAntiga', this)">&#128065;</span>
            </div>

            <div class="senha-reset">
                <span class="esqueci-senha-btn">Não lembra sua senha? <br> Clique aqui e iremos enviar <br> um código pro seu email para resetar a senha </span>
            </div>

            <label for="novaSenha">Digite sua nova senha:</label>
            <div class="password-container">
                <input type="password" id="novaSenha" name="novaSenha" placeholder="Sua nova senha" required>
                <span class="toggle-password" onclick="togglePassword('novaSenha', this)">&#128065;</span>
            </div>

            <div class="password-container">
                <input type="password" id="confirmeSenha" name="confirmeSenha" placeholder="Confirme sua nova senha" required>
                <span class="toggle-password" onclick="togglePassword('confirmeSenha', this)">&#128065;</span>
            </div>
            <button type="submit" onclick="editeSenha(event)" class="salvar-btn">Salvar</button>
        </form>
    </div>
</div>
<a class="usos" href="/TermosdeUso"> Termos de Uso </a>
<script src="{{ asset('js/editarsenha.js') }}"></script>
</body>
</html>

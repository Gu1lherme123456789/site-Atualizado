<!DOCTYPE html>
<html lang="pt-br">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Página de Edição de Senha</title>
<link href="{{ asset('css/editarsenha.css') }}" rel="stylesheet" type="text/css"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body class="container">
<header>
    <!-- Botão do menu hambúrguer -->
    <div class="menu-toggle" id="menuToggle">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </div>
    <!-- Botão de voltar -->
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
</ul>
</nav>
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

<a class="usos" href="/TermosdeUso">Termos de Uso</a>
<footer>
    <div class="container">
        <p>&copy; 2024 Conhecimento Premium. Todos os direitos reservados.</p>
    </div>
</footer>
</div>

<script src="{{ asset('js/editarsenha.js') }}"></script>


</body>
</html>

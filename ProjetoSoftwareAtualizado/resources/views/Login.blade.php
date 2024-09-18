<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css"/>

</head>
<body>
<div class="navegacao">       
        <a href="/Contato">  Entre em Contato </a>
      
        <a href="/Sobre">  Sobre Nós </a>
    </div>

<div class="container">
    <div class="cabecalho">
     <div class="title-container">
        <h1 id="cabecalho">CONHECIMENTOPREMIUM</h1>
     </div>
        <button class="toggle-btn" onclick="toggleMode()" id="btn">Alterar fundo</button>
    </div>
    <div id="cabecalhoLogin">

        <form  id="registro-form" name="f1" action="/Conteudos" >
        <h1 id="cabcalhoLogin1">Pagina de login</h1>
            <div>
             <h2>Por favor insira email:</h2>
                <input type="text" id="email" name="email" onblur="validacaoEmail(f1.email)" placeholder="Digite seu email" maxlength="60" size='65' class="email" required="required">
                <div id="msgemail"></div>
            </div>
            <div class="password-container">
            <h2>Por favor insira senha:</h2>
                <input type="password" id="passwordField" placeholder="Digite sua senha" maxlength="60" size='65' class="senha" required="required">
                <span class="toggle-password" onclick="togglePassword()">&#128065;</span>
            </div>
            <button type="submit" onclick="login()" class="botao">fazer login</button>
             <br>
             <br>
            <a class="calo" href="/Cadastro">Cadastre-se</a>
        </form>
    </div>
</div>
<a class="usos" href="/TermosdeUso"> Termos de Uso </a>
<script src="{{ asset('js/telaLogin.js') }}"></script>   
</body>
</html>



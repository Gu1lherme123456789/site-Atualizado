@extends('layouts.app')

@section('conteudo')
<div class="navegacao">
        <a href="/Comentarios"> < Faça seu comentario > </a>
        <a href="/Conteudos"> < Nossos conteudos > </a>
        <a href="/Favoritas "> < Favoritas > </a>
        <a href="/Duvidas"> < Tem alguma duvida? clique aqui> </a>
        <a href="/Avaliacao"> < Avalie-nos> </a>
        <a href="/Contato"> < Entre em Contato> </a>
    </div>

<div class="container">
    <div class="cabecalho">
        <h1 id="cabecalho">CONHECIMENTOPREMIUM</h1>
        <button class="toggle-btn" onclick="toggleMode()" id="btn">Alterar fundo</button>
    </div>
    <div id="cabecalhoLogin">

        <form  id="registro-form" name="f1" action="/Comentarios" >
        <h1 id="cabcalhoLogin1">Pagina de login</h1>
            <div>
             <h2>Por favor insira email:</h2>
                <input type="text" name="email" onblur="validacaoEmail(f1.email)" placeholder="Digite seu email" maxlength="60" size='65' class="email" required="required">
                <div id="msgemail"></div>
            </div>
            <div class="password-container">
            <h2>Por favor insira senha:</h2>
                <input type="password" id="passwordField" placeholder="Digite sua senha" maxlength="60" size='65' class="senha" required="required">
                <span class="toggle-password" onclick="togglePassword()">&#128065;</span>
            </div>
            <button type="submit" onclick="login()" class="botao">fazer login</button>
             <br>
            <a class="calo" href="/Cadastro">Cadastre-se</a>
        </form>
    </div>
</div>
@endsection

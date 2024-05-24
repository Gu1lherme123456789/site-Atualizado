@extends('layouts.app')

@section('conteudo')

<div class="container">
    <div class="cabecalho">
        <h1 id="cabecalho">CONHECIMENTOPREMIUM</h1>
        <button class="toggle-btn" onclick="toggleMode()" id="btn">Alterar plano de fundo</button>

    </div>
    <div id="cabecalhoLogin">
        
        <form  id="registro-form" name="f1" action="/Comentarios" >
        <h1 id="cabcalhoLogin1">Pagina de login</h1>
            <div>
             <h2>Por favor insira email:</h2>
                <input type="text" name="email" onblur="validacaoEmail(f1.email)"  maxlength="60" size='65' class="email">
                <div id="msgemail"></div>
            </div>
            <div class="password-container">
            <h2>Por favor insira senha:</h2>
                <input type="password" id="passwordField" placeholder="Digite sua senha" maxlength="60" size='65' class="senha">
                <span class="toggle-password" onclick="togglePassword()">&#128065;</span>
            </div>
            <button onclick="login()" class="botao">fazer login</button>
             <br>
            <a href="/Cadastro">Cadastre-se</a>
        </form>
    </div>
</div>


@endsection

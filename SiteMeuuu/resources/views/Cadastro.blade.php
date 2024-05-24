@extends('layouts.app')

@section('conteudo')
<div class="container">
    <div class="cabecalho">
        <h1 id="cabecalho">CONHECIMENTOPREMIUM</h1>
        <button class="toggle-btn" onclick="toggleMode()" id="btn">Alterar plano de fundo</button>
    </div>
    <div id="cabecalhoLogin">

       
        <form  id="registro-form" action="/Comentarios">
        <h1 id="cabcalhoLogin1">Pagina de Cadastro</h1>
            <h2>Por favor insira email:</h2>
            <input type="text" name="email" onblur="validacaoEmail(f1.email)"  maxlength="60" size='65' class="email">
                <div id="msgemail"></div>
            <h2>Por favor insira senha:</h2>
            <div class="password-container">
            <input type="password" id="passwordField" placeholder="Digite sua senha" maxlength="60" size='65' class="senha">
                <span class="toggle-password" onclick="togglePassword()">&#128065;</span>
            </div>
            <button onclick="login()" class="botao">fazer login</button>
            <br>
            <a href="/" >Login</a>
        </form>
    </div>
   
</div>
@endsection

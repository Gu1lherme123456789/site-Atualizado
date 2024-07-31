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
                <h1 id="cabecalhoLogin1">Pagina de Dúvidas</h1>
                <form action="" class="form-duvidas">
                    <h2>Informe sua dúvida</h2>
                    <input type="text" id="duvida-input" placeholder="DIGITE SUA DÚVIDA" required="required">
                    <button type="submit" onclick="enviarDuvida()">Enviar</button>
                </form>
            </div>
        </div>
@endsection

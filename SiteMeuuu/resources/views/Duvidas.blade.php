@extends('layouts.app')

@section('conteudo')
<div class="navegacao">
        <a href="/Comentarios"> < Faça seu comentario</a>
        <a href="/Conteudos"> < Nossos conteudos ></a>
        <a href="/Duvidas">Tem alguma duvida? clique aqui ></a>        
</div>
<div id="cabecalhoLogin">
        <h1 id="cabcalhoLogin1">Pagina de Dúvidas</h1>
        <form action="" class="form-duvidas">
        <h2>Informe sua dúvida</h2>
        <input type="text" id="email-input" placeholder="DIGITE SUA DÚVIDA">    
        <button onclick="alert('Sua duvida ja foi enviada')">enviar</button>
</div>
@endsection
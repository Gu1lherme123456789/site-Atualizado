@extends('layouts.app')

@section('conteudo')
<div id="cabecalhoLogin">
        <h1 id="cabcalhoLogin1">Pagina de Dúvidas</h1>
        <form action="">
        <h2>Informe sua dúvida</h2>
        <input type="text" id="email-input" placeholder="DIGITE SUA DÚVIDA">    
        <button onclick="alert('Sua duvida ja foi enviada')">enviar</button>
</div>
@endsection
@extends('layouts.app')

@section('conteudo')
<div class="navegacao">
        <a href="/Comentarios"> < Faça seu comentario > </a>
        <a href="/Conteudos"> < Nossos conteudos > </a>
        <a href="/Favoritas "> < Favoritas > </a>
        <a href="/Duvidas"> < Tem alguma duvida? clique aqui> </a>
        <a href="/Avaliacao"> < Avalie-nos> </a>
        <a href="/Contato"> < Entre em Contato> </a>
        <a href="/Calendario"> < (VIP: Agende sua aula ao vivo) > </a>
        <a href="/Sobre"> < Sobre Nós> </a>
    </div>

    <div class="container">
      <div class="cabecalho">
          <h1 id="cabecalho">CONHECIMENTOPREMIUM</h1>
          <button class="toggle-btn" onclick="toggleMode()" id="btn">Alterar fundo</button>
      </div>

    <div class="form-container">
    <div class="form-group">
      <label for="professor">Digite o nome do professor:</label>
      <input type="text" id="professor" name="professor">
    </div>

    <div class="form-group">
      <label for="materia">Digite a matéria que ele ensina:</label>
      <input type="text" id="materia" name="materia">
    </div>
   <body>
    <ul class="avaliacao">
      <li class="star-icon" data-avaliacao="1"></li>
      <li class="star-icon" data-avaliacao="2"></li>
      <li class="star-icon" data-avaliacao="3"></li>
      <li class="star-icon" data-avaliacao="4"></li>
      <li class="star-icon" data-avaliacao="5"></li>
    </ul>
  </body>

    <div class="button-container">
      <button type="button" onclick="submitForm()"> Avalie o conteúdo das matérias </button>
    </div>


@endsection

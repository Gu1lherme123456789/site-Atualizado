@extends('layouts.app')

@section('conteudo')
<div class="navegacao">
    <a href="/Comentarios"> < Faça seu comentario > </a>
    <a href="/Conteudos"> < Nossos conteudos > </a>
    <a href="/Favoritas"> < Favoritas > </a>
    <a href="/Duvidas"> < Tem alguma duvida? clique aqui> </a>
    <a href="/Avaliacao"> < Avalie-nos> </a>
    <a href="/Contato"> < Entre em Contato> </a>
</div>

<div class="container">
    <div class="cabecalho">
        <h1 id="cabecalho">CONHECIMENTOPREMIUM</h1>
        <button class="toggle-btn" onclick="toggleMode()" id="btn">Alterar fundo</button>
    </div>

    <div>
        <h1>Minhas matérias favoritas são:</h1>
        <div id="listaFavoritas"></div>
    </div>
</div>

<script>
    // Obter as matérias favoritas do localStorage
    const favoritas = JSON.parse(localStorage.getItem('materiasFavoritas')) || [];

    // Selecionar o elemento onde as matérias favoritas serão exibidas
    const listaFavoritas = document.getElementById('listaFavoritas');

    // Verificar se há matérias favoritas
    if (favoritas.length > 0) {
        // Criar uma lista de matérias favoritas
        const ul = document.createElement('ul');
        favoritas.forEach(materia => {
            const li = document.createElement('li');
            li.textContent = materia;
            ul.appendChild(li);
        });
        listaFavoritas.appendChild(ul);
    } else {
        // Exibir uma mensagem caso não haja matérias favoritas
        listaFavoritas.textContent = 'Nenhuma matéria favoritada ainda.';
    }
</script>
@endsection

<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pàgina de Matérias Favoritas</title>
    <link href="{{ asset('css/favoritas.css') }}" rel="stylesheet" type="text/css"/>
</head>
<body>

<div class="navegacao">
    <a href="/Comentarios"> Comente algo </a>
    <a href="/Materias"> Matérias </a>
    <a href="/Professores"> Professores </a>
    <a href="/Calendario"> VIP: Agende sua aula ao vivo </a>
    <a href="/Duvidas"> Informe sua dúvida para nós </a>
    <a href="/Avaliacao"> Avalie-nos </a>
    <a href="/Contato"> Entre em Contato </a>
    <a href="/Sobre"> Sobre Nós </a>
</div>

<div class="container">
    <div class="cabecalho">
        <h1>CONHECIMENTOPREMIUM</h1>
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

<a class="usos" href="/TermosdeUso"> Termos de Uso </a>
<script src="{{ asset('js/favoritas.js') }}"></script>
</body>
</html>


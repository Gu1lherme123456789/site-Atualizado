<!DOCTYPE html>
<html lang="pt=br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página de Matérias Favoritas</title>
        <link href="{{ asset('css/favoritas.css') }}" rel="stylesheet" type="text/css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </head>

    <body class="container">
        <header>
            <!-- Botão do menu hambúrguer -->
            <div class="menu-toggle" id="menuToggle">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <!-- Botão de voltar -->
            <div class="menu-back" id="menuBack">Voltar</div>

            <img class="imgPremium" src="img/conhecimento.png" alt="Conhecimento Premium" />
            <button class="toggle-btn" onclick="toggleMode()" id="btn">Alterar fundo</button>
        </header>

      <!-- Menu Lateral -->
      <nav id="menu" class="menu">
        <ul>
            <li><a href="/Comentarios">💬Comentarios</a></li>
        <li><a href="/Professores">👨‍🏫Professores</a></li>
        <li><a href="/Materias">📝Matérias</a></li>
        <li><a href="/Calendario">👑VIP: Aulas ao vivo</a></li>
        <li><a href="/Duvidas">❓Informe sua dúvida</a></li>
        <li><a href="/Avaliacao">✅Avalie-nos</a></li>
        <li><a href="/Contato">📞Contatos</a></li>
        <li><a href="/Sobre">👁️Sobre Nós</a></li>
          </ul>
        </ul>
      </nav>

    <div class="matfav">
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

<a class="usos" href="/TermosdeUso">Termos de Uso</a>
<footer style="  bottom: 0;
        position: fixed;
        width: 100%;
        text-align: center;">
    <div class="container">
        <p>&copy; 2024 Conhecimento Premium. Todos os direitos reservados.</p>
    </div>
</footer>
</div>

<script src="{{ asset('js/favoritas.js') }}"></script>

</body>
</html>


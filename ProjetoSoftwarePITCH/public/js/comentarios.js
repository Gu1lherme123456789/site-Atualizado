function toggleMode() {
    const body = document.body;
    const currentMode = body.classList.contains('dark-mode') ? 'dark' : 'light';

    if (currentMode === 'dark') {
      body.classList.remove('dark-mode');
    } else {
      body.classList.add('dark-mode');
    }
}

function adicionarComentario() {
    // Obtém o texto do comentário
    const textoComentario = document.getElementById('texto-comentario').value.trim();

    if (textoComentario === '') {
        alert('Por favor, digite um comentário.');
        return;
    }

    // Obtém o elemento onde os comentários serão exibidos
    const comentariosDiv = document.getElementById('comentarios');

    // Cria um novo elemento de comentário
    const novoComentario = document.createElement('div');
    novoComentario.className = 'comentario';

    // Adiciona o texto ao novo elemento
    novoComentario.innerHTML = `
        <p>${textoComentario}</p>
        <button onclick="editarComentario(this)">Editar</button>
        <button class="excluir" onclick="excluirComentario(this)">Excluir</button>
    `;

    // Adiciona o novo elemento à div de comentários
    comentariosDiv.appendChild(novoComentario);

    // Limpa o textarea após adicionar o comentário
    document.getElementById('texto-comentario').value = '';
}

function editarComentario(botao) {
    // Obtém o elemento de comentário pai
    const comentarioDiv = botao.parentElement;

    // Obtém o parágrafo do comentário
    const paragrafo = comentarioDiv.querySelector('p');

    // Permite a edição do texto
    const novoTexto = prompt('Edite seu comentário:', paragrafo.textContent);

    if (novoTexto !== null) {
        paragrafo.textContent = novoTexto;
    }
}

function excluirComentario(botao) {
    // Obtém o elemento de comentário pai
    const comentarioDiv = botao.parentElement;

    // Remove o comentário da página
    comentarioDiv.remove();
}


document.getElementById('menuToggle').addEventListener('click', function () {
    const menu = document.getElementById('menu');
    const backButton = document.getElementById('menuBack');

    // Alterna o menu e o botão "voltar"
    menu.classList.toggle('open');
    backButton.classList.toggle('visible');
});

// Evento para fechar o menu ao clicar no botão "voltar"
document.getElementById('menuBack').addEventListener('click', function () {
    const menu = document.getElementById('menu');
    const backButton = document.getElementById('menuBack');

    // Remove as classes que abrem o menu e mostram o botão
    menu.classList.remove('open');
    backButton.classList.remove('visible');
});



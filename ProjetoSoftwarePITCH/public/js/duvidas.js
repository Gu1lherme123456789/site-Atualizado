function toggleMode() {
    const body = document.body;
    const currentMode = body.classList.contains('dark-mode') ? 'dark' : 'light';

    if (currentMode === 'dark') {
      body.classList.remove('dark-mode');
    } else {
      body.classList.add('dark-mode');
    }
}


function adicionarDuvida(event) {
    // Evita que a página seja recarregada
    event.preventDefault();

    // Obtém o texto da dúvida
    const textoDuvida = document.getElementById('duvida-input').value.trim();

    if (textoDuvida === '') {
        alert('Por favor, digite uma dúvida.');
        return;
    }

    // Obtém o elemento onde as dúvidas serão exibidas
    const duvidasDiv = document.getElementById('duvidas');

    // Cria um novo elemento de dúvida
    const novaDuvida = document.createElement('div');
    novaDuvida.className = 'duvida';

    // Adiciona o texto ao novo elemento
    novaDuvida.innerHTML = `
        <p>${textoDuvida}</p>
        <button onclick="editarDuvida(this)">Editar</button>
        <button class="excluir" onclick="excluirDuvida(this)">Excluir</button>
    `;

    // Adiciona a nova dúvida à div de dúvidas
    duvidasDiv.appendChild(novaDuvida);

    // Limpa o input após adicionar a dúvida
    document.getElementById('duvida-input').value = '';

    // Exibe mensagem de confirmação
    alert("Sua dúvida foi enviada, retornaremos com uma resposta em breve!");
}

function editarDuvida(botao) {
    const duvidaDiv = botao.parentElement;
    const paragrafo = duvidaDiv.querySelector('p');
    const novoTexto = prompt('Edite sua dúvida:', paragrafo.textContent);
    if (novoTexto !== null) {
        paragrafo.textContent = novoTexto;
    }
}

function excluirDuvida(botao) {
    const duvidaDiv = botao.parentElement;
    duvidaDiv.remove();
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

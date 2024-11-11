  // Função para alternar o fundo (modo claro / modo escuro)
  function toggleMode() {
    const body = document.body;
    const currentMode = body.classList.contains('dark-mode') ? 'dark' : 'light';

    if (currentMode === 'dark') {
        body.classList.remove('dark-mode');
    } else {
        body.classList.add('dark-mode');
    }
}

// Armazenar as inscrições e as aulas
let aulasAgendadas = [];

// Função para adicionar uma aula ao painel de controle
function adicionarAula(nome, email, dataHora, materia) {
    // Verificar se já existe uma aula no mesmo horário
    const horarioConflito = aulasAgendadas.some(aula => aula.dataHora === dataHora);

    if (horarioConflito) {
        // Se já houver aula no mesmo horário, exibe uma mensagem de erro
        alert("Erro: Já existe uma aula agendada para este horário.");
        return; // Não adiciona a aula se houver conflito
    }

    // Se não houver conflito, adiciona a aula ao array
    const aula = {
        nome: nome,
        email: email,
        dataHora: dataHora,
        materia: materia
    };
    aulasAgendadas.push(aula);
    atualizarPainel();
}

// Atualizar o painel de controle
function atualizarPainel() {
    const aulaList = document.getElementById("aulaList");
    aulaList.innerHTML = ""; // Limpar a lista antes de adicionar as novas aulas

    aulasAgendadas.forEach(aula => {
        const aulaItem = document.createElement("li");
        aulaItem.classList.add("aula-item");
        aulaItem.innerHTML = `
            <p><strong>Aluno:</strong> ${aula.nome}</p>
            <p><strong>Email:</strong> ${aula.email}</p>
            <p><strong>Matéria:</strong> ${aula.materia}</p>
            <p><strong>Data e Hora:</strong> ${new Date(aula.dataHora).toLocaleString()}</p>
        `;
        aulaList.appendChild(aulaItem);
    });
}

// Manipular o envio do formulário de inscrição
document.getElementById("formInscricao").addEventListener("submit", function (event) {
    event.preventDefault();

    const nome = document.getElementById("nome").value;
    const email = document.getElementById("email").value;
    const dataHora = document.getElementById("dataHora").value;
    const materiaSelecionada = document.querySelector('input[name="materia"]:checked');

    if (nome && email && dataHora && materiaSelecionada) {
        const materia = materiaSelecionada.value;
        adicionarAula(nome, email, dataHora, materia);
        document.getElementById("formInscricao").reset();
        document.getElementById("successMessage").style.display = "block";
        setTimeout(function() {
            document.getElementById("successMessage").style.display = "none";
        }, 5000); // Ocultar a mensagem após 5 segundos
    } else {
        alert("Por favor, preencha todos os campos, incluindo a seleção de uma matéria.");
    }
});
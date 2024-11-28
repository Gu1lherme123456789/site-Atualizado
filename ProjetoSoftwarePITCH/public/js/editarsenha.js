function toggleMode() {
    const body = document.body;
    const currentMode = body.classList.contains('dark-mode') ? 'dark' : 'light';

    if (currentMode === 'dark') {
        body.classList.remove('dark-mode');
    } else {
        body.classList.add('dark-mode');
    }
}

function togglePassword(fieldId, toggleIcon) {
    const passwordField = document.getElementById(fieldId);

    if (passwordField.type === "password") {
        passwordField.type = "text"; // Muda para texto
        toggleIcon.innerHTML = "&#128064;"; // Ícone de olho aberto
    } else {
        passwordField.type = "password"; // Muda para senha
        toggleIcon.innerHTML = "&#128065;"; // Ícone de olho fechado
    }
}

function editeSenha(event) {
    event.preventDefault(); // Impede o envio do formulário
    alert("Sua senha foi alterada com sucesso.");
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

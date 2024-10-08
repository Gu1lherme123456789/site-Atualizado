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

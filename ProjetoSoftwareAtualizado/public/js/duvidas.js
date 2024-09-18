function enviarDuvida() {
    alert("Sua dúvida foi enviada, retornaremos com uma resposta em breve!.");
}

function toggleMode() {
    const body = document.body;
    const currentMode = body.classList.contains('dark-mode') ? 'dark' : 'light';

    if (currentMode === 'dark') {
      body.classList.remove('dark-mode');
    } else {
      body.classList.add('dark-mode');
    }
}

function toggleMode() {
    const body = document.body;
    const currentMode = body.classList.contains('dark-mode') ? 'dark' : 'light';

    if (currentMode === 'dark') {
      body.classList.remove('dark-mode');
    } else {
      body.classList.add('dark-mode');
    }
  }

function enviarContato() {
    alert("Sua solicitação de contato foi enviada com sucesso! Retornaremos com uma resposta em breve!");
}

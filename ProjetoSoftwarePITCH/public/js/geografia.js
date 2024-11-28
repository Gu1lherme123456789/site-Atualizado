function toggleMode() {
    const body = document.body;
    const currentMode = body.classList.contains('dark-mode') ? 'dark' : 'light';

    if (currentMode === 'dark') {
      body.classList.remove('dark-mode');
    } else {
      body.classList.add('dark-mode');
    }
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

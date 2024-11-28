function toggleMode() {
    const body = document.body;
    const currentMode = body.classList.contains('dark-mode') ? 'dark' : 'light';

    if (currentMode === 'dark') {
      body.classList.remove('dark-mode');
    } else {
      body.classList.add('dark-mode');
    }
  }


const estrelas = document.querySelectorAll('.star-icon');
const enviarAvaliacao = document.getElementById('enviar-avaliacao');
const resultadoAvaliacao = document.getElementById('resultado-avaliacao');

let avaliacao = 0;

estrelas.forEach((estrela) => {
  estrela.addEventListener('click', () => {
    avaliacao = estrela.getAttribute('data-avaliacao');

    estrelas.forEach((estrela) => {
      estrela.classList.remove('ativo');
    });

    for (let i = 0; i < avaliacao; i++) {
      estrelas[i].classList.add('ativo');
    }
  });
});

enviarAvaliacao.addEventListener('click', () => {
  if (avaliacao > 0) {
    resultadoAvaliacao.textContent = `Sua avaliação de ${avaliacao} estrela${avaliacao > 1 ? 's' : ''} foi enviada.`;
  } else {
    resultadoAvaliacao.textContent = 'Por favor, selecione uma avaliação.';
  }
});


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

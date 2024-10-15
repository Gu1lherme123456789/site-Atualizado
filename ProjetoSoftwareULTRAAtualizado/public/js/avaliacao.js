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
    resultadoAvaliacao.textContent = `Sua avaliação foi de ${avaliacao} estrela${avaliacao > 1 ? 's' : ''}.`;
  } else {
    resultadoAvaliacao.textContent = 'Por favor, selecione uma avaliação.';
  }
});

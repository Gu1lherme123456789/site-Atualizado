const estrelas = document.querySelectorAll('.star-icon');
const enviarAvaliacao = document.getElementById('enviar-avaliacao');
const resultadoAvaliacao = document.getElementById('resultado-avaliacao');

let avaliacao = 5; // Inicializar a avaliação com 5 estrelas

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
    resultadoAvaliacao.textContent = `Você avaliou nosso serviço com ${avaliacao} estrelas!`;
  } else {
    resultadoAvaliacao.textContent = 'Por favor, selecione uma avaliação';
  }
});
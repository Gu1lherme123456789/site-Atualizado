 function toggleMode() {
        const body = document.body;
        const currentMode = body.classList.contains('dark-mode') ? 'dark' : 'light';

        if (currentMode === 'dark') {
          body.classList.remove('dark-mode');
        } else {
          body.classList.add('dark-mode');
        }
      }

      function enviarCalendario() {
        alert("Sua solicitação de marcação de aula ao vivo foi enviado, aguardaremos a resposta dos professores.");
      }

function toggleMode() {
    const body = document.body;
    const currentMode = body.classList.contains('dark-mode') ? 'dark' : 'light';

    if (currentMode === 'dark') {
      body.classList.remove('dark-mode');
    } else {
      body.classList.add('dark-mode');
    }
  }

// Função de validação de e-mail
function validacaoEmail(field) {
  const email = field.value;
  const regexEmail = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/; // Regex para validar e-mails simples
  const msgemail = document.getElementById("msgemail");

  if (regexEmail.test(email)) {
      msgemail.innerHTML = "<font color='green'>E-mail válido</font>";
      return true;
  } else {
      msgemail.innerHTML = "<font color='red'>E-mail inválido. Exemplo: exemplo@dominio.com</font>";
      return false;
  }
}

// Função para validar a senha
function validarSenha(password) {
  const msgsenha = document.getElementById("msgsenha");
  const regexSenha = /^(?=.*[a-zA-Z])(?=.*\d).{6,}$/; // A senha deve ter pelo menos 6 caracteres, com letras e números

  if (regexSenha.test(password)) {
      msgsenha.innerHTML = "<font color='green'>Senha válida</font>";
      return true;
  } else {
      msgsenha.innerHTML = "<font color='red'>A senha deve ter pelo menos 6 caracteres, incluindo letras e números</font>";
      return false;
  }
}

// Função para verificar a validação de todos os campos antes do envio
function validarFormulario() {
  const email = document.getElementById("email");
  const passwordField = document.getElementById("passwordField");

  // Validar email
  const emailValido = validacaoEmail(email);

  // Validar senha
  const senhaValida = validarSenha(passwordField.value);

  // Se algum campo for inválido, não enviar o formulário
  if (emailValido && senhaValida) {
      return true;
  } else {
      alert("Por favor, corrija os erros antes de enviar o formulário.");
      return false;
  }
}

// Função para alternar a visibilidade da senha
function togglePassword() {
  const passwordField = document.getElementById('passwordField');
  const toggleIcon = document.querySelector('.toggle-password');

  if (passwordField.type === "password") {
      passwordField.type = "text"; // Exibe a senha
      toggleIcon.innerHTML = "&#128064;"; // Ícone de olho aberto
  } else {
      passwordField.type = "password"; // Oculta a senha
      toggleIcon.innerHTML = "&#128065;"; // Ícone de olho fechado
  }
}



    

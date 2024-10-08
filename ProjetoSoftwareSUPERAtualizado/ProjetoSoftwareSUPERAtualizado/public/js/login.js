function toggleMode() {
    const body = document.body;
    const currentMode = body.classList.contains('dark-mode') ? 'dark' : 'light';

    if (currentMode === 'dark') {
      body.classList.remove('dark-mode');
    } else {
      body.classList.add('dark-mode');
    }
  }

function validacaoEmail(field) {
    usuario = field.value.substring(0, field.value.indexOf("@"));
    dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);

    if ((usuario.length >=1) &&
        (dominio.length >=3) &&
        (usuario.search("@")==-1) &&
        (dominio.search("@")==-1) &&
        (usuario.search("gmail")==-1) &&
        (dominio.search("gmail")==-1) &&
        (dominio.search(".")!=-1) &&
        (dominio.indexOf(".") >=1)&&
        (dominio.lastIndexOf(".") < dominio.length - 1)) {
    document.getElementById("msgemail").innerHTML="E-mail válido";
    alert("E-mail valido");
    return true;
    }
    else{
    document.getElementById("msgemail").innerHTML="<font color='red'>E-mail inválido </font>";
    alert("E-mail invalido");
    return false;
    }
    }

    function togglePassword() {
        const passwordField = document.getElementById('passwordField');
        const toggleIcon = document.querySelector('.toggle-password');

        if (passwordField.type === "password") {
            passwordField.type = "text"; // Muda para texto
            toggleIcon.innerHTML = "&#128064;"; // Ícone de olho aberto
        } else {
            passwordField.type = "password"; // Muda para senha
            toggleIcon.innerHTML = "&#128065;"; // Ícone de olho fechado
        }
    }

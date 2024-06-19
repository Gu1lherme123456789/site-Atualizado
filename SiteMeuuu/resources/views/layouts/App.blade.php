<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConhecimentoPremium</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @stack('styles')
    <style>
.container {
    margin: auto;
  }
  input[type="text"], input[type="email"], textarea {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 5px;
  }
  button {
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  button:hover {
    background-color: #0056b3;
  }


#searchbar{
  margin-top: 30px;
  width: 50vw;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  outline: none;
}

.avaliacao {
  display: flex;
  list-style-type: none;
  padding: 0;
}

.star-icon {
  cursor: pointer;
  color: #ffe500;
  font-size: 40px; /* alterar o tamanho das estrelas */
}

.star-icon input {
  display: none;
}

/* Estrela vazia por padrão */
.star-icon::before {
  content: "\2606";
}

/* Estrela preenchida para estrelas selecionadas */
.star-icon.ativo::before,
.star-icon input:checked ~ .star-icon::before,
.star-icon:hover ~ .star-icon::before {
  content: "\2605";
}

/* Lógica específica para o hover */
.star-icon:hover ~ .star-icon.ativo::before,
.star-icon:hover ~ .star-icon input:checked ~ .star-icon::before {
  content: "\2606";
}

/* Garante que ao retirar o hover as estrelas voltem ao estado selecionado */
.star-icon:hover ~ .star-icon.input:checked ~ .star-icon.ativo::before,
.star-icon:hover ~ .star-icon.input:checked ~ .star-icon input:checked ~ .star-icon::before {
  content: "\2605";
}


.button-container {
      text-align: center;
    }
    button {
      padding: 10px 20px;
      font-size: 16px;
      border: none;
      background-color: #4CAF50;
      color: white;
      cursor: pointer;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }
    button:hover {
      background-color: #45a049;
    }
/*teste 2*/

.form-container {
      width: 300px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .form-group {
      margin-bottom: 15px;
    }
    .form-group label {
      display: block;
      margin-bottom: 5px;
    }
    .form-group input {
      width: 100%;
      padding: 8px;
      box-sizing: border-box;
    }



/* teste */
.materias{
    font-size: 30px;
    font-weight: 700;
    color: gray; 
    
}

ul {
  padding: 20px;
}
li {
  list-style: none;
}
#cabecalhoLogin{
    display: grid;  
    
}


.navegacao{
    display: flex;
    justify-content: space-between;
    border-bottom: solid 3px purple;
}


  body {
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    body.dark-mode {
        background-color: #222;
        color: #fff;
    } 

    .container{
        text-align: center;
    }

    .cabecalho{
        font-weight: bold;
        display: flex;
        margin-left: 650px;
    }

    #btn {
        margin-left: 400px;
        background-color: red;
        color: white;
        width: 150px;
    }

    #cabecalhologin1{
        font-weight: bold;
        border-bottom: solid black 5px;
    }

   #registro-form {
    
    background-color: #DAA520;
   
   }
   .botao {
     margin-top: 20px;
     font-size: 30px;
     font-weight: 700;
     border-radius: 30px;
   }

   

    a {
        text-decoration: none;
        font-size: 20px;
    }

    .cabecalhoo {
        text-align: center;
    }

    #pconhecimento {
        font-size: 90px;
        font-weight: bold;
    }

    .header {
    text-align: center;
    }

   .h1 {
    margin: 0;
   }

   .section {
    margin: 20px;
    }

    .form {
    margin-bottom: 20px;
    }

    .label {
    display: block;
    margin-bottom: 5px;
    }

    .input[type="text"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    }

    .button {
    padding: 8px 15px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
    }

    .button:hover {
    background-color: #45a049;
    }

    table {
    width: 100%;
    border-collapse: collapse;
    }

    th, td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
    }

    th {
    background-color: #4CAF50;
    color: white;
    text-align: left;
    }

    tr:nth-child(even) {
    background-color: #f2f2f2;
    }

    td:last-child {
    text-align: center;
    }

    .button {
    background-color: #f44336;
    }

    .button:hover {
    background-color: #df382c;
    }


    /* fdeefe */

.image-container {
  position: relative;
  overflow: hidden;
 
}

.hover-image {
  transition: transform 0.3s ease; 

  height: 440px;
  width: 100%;
}

.hover-image:hover {
  transform: translateY(-20px); 
}

h1 {
  text-align: center;
}

.div {
    border: solid purple 7px;
    text-align: center;
    width: 50%;
    margin-left: 240px; 
}

.container-display {
  width: 100%;
  background-color: skyblue;
  border-top: 3px solid black;
  border-bottom: 3px solid black;
}

.social-icons {
  margin-top: 20px;
  text-align: center;
}

.social-icons i {
  margin: 0 10px;
  font-size: 24px;
  color: #000;
}

.social-icons i:hover {
  color: #007bff; /* Cor quando o ícone é passado com o mouse */
}
</style>
</head>
<body>
<main class="container">
    @yield('conteudo')
</main>

<script>
 
 document.getElementById('contactForm').onsubmit = function(event) {
    event.preventDefault();
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;

    if(name && email && message) {
      // Aqui você pode adicionar o código para enviar o formulário
      alert('Vamos te encaminhar para os criadores do site, aguarde nosso retorno!');
    } else {
      alert('Por favor, preencha todos os campos.');
    }
  };


function search_animal() {
    let input = document.getElementById('searchbar').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('materias');
      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="list-item";                 
        }
    }
}   

var stars = document.querySelectorAll('.star-icon');
                  
document.addEventListener('click', function(e){
  var classStar = e.target.classList;
  if(!classStar.contains('ativo')){
    stars.forEach(function(star){
      star.classList.remove('ativo');
    });
    classStar.add('ativo');
    console.log(e.target.getAttribute('data-avaliacao'));
  }
});

/* tester */

    function validacaoEmail(field) {
usuario = field.value.substring(0, field.value.indexOf("@"));
dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);

if ((usuario.length >=1) &&
    (dominio.length >=3) &&
    (usuario.search("@")==-1) &&
    (dominio.search("@")==-1) &&
    (usuario.search(" ")==-1) &&
    (dominio.search(" ")==-1) &&
    (dominio.search(".")!=-1) &&
    (dominio.indexOf(".") >=1)&&
    (dominio.lastIndexOf(".") < dominio.length - 1)) {
document.getElementById("msgemail").innerHTML="E-mail válido";
alert("E-mail valido");
}
else{
document.getElementById("msgemail").innerHTML="<font color='red'>E-mail inválido </font>";
alert("E-mail invalido");
}
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

  document.addEventListener('DOMContentLoaded', function () {
        const commentForm = document.getElementById('commentForm');
        const nomeInput = document.getElementById('nome');
        const comentarioInput = document.getElementById('comentario');
        const comentariosList = document.getElementById('comentariosList');

        // Carregar comentários ao carregar a página
        carregarComentarios();

        commentForm.addEventListener('submit', function (event) {
            event.preventDefault();

            // Obter o valor do input de nome e comentário
            const nome = nomeInput.value.trim();
            const comentario = comentarioInput.value.trim();

            if (nome !== '' && comentario !== '') {
                // Adicionar o comentário à lista
                adicionarComentario(nome, comentario);

                // Limpar os campos de entrada após adicionar o comentário
                nomeInput.value = '';
                comentarioInput.value = '';

                // Salvar os comentários localmente
                salvarComentarios();
            }
        });

        function adicionarComentario(nome, comentario) {
            // Criar um novo elemento de tr para o comentário
            const tr = document.createElement('tr');

            // Criar td's para o nome e o comentário
            const tdNome = document.createElement('td');
            tdNome.textContent = nome;
            tr.appendChild(tdNome);

            const tdComentario = document.createElement('td');
            tdComentario.textContent = comentario;
            tr.appendChild(tdComentario);

            // Criar um botão de exclusão
            const tdAcoes = document.createElement('td');
            const btnExcluir = document.createElement('button');
            btnExcluir.textContent = 'Excluir';
            btnExcluir.addEventListener('click', function () {
                // Remover a linha da tabela
                tr.remove();

                // Salvar os comentários atualizados no Local Storage
                salvarComentarios();
            });
            tdAcoes.appendChild(btnExcluir);
            tr.appendChild(tdAcoes);

            // Adicionar o tr à lista de comentários
            comentariosList.appendChild(tr);
        }

        function salvarComentarios() {
            // Obter todos os comentários
            const comentarios = [];
            comentariosList.querySelectorAll('tr').forEach(function (tr) {
                const nome = tr.querySelector('td:first-child').textContent;
                const comentario = tr.querySelector('td:nth-child(2)').textContent;
                comentarios.push({ nome, comentario });
            });

            // Salvar os comentários no Local Storage
            localStorage.setItem('comentarios', JSON.stringify(comentarios));
        }

        function carregarComentarios() {
            // Obter os comentários salvos do Local Storage
            const comentarios = JSON.parse(localStorage.getItem('comentarios')) || [];

            // Adicionar cada comentário à lista
            comentarios.forEach(function ({ nome, comentario }) {
                adicionarComentario(nome, comentario);
            });
        }
    });

function togglePassword() {
    const passwordField = document.getElementById('passwordField');
    const toggleIcon = document.getElementById('togglePassword');
    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        toggleIcon.innerHTML = '&#128065;'; //esse comando chama o icone de olho
    } else {
        passwordField.type = 'password';
        toggleIcon.innerHTML = '&#128065;'; //esse comando chama o icone de olho
    }
}

function submitForm() {
      alert("Sua avaliação foi enviada, obrigado pelo feedback.");
    }

</script>

</body>
</html>
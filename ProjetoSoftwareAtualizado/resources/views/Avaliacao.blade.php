  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/avaliacao.css') }}" rel="stylesheet" type="text/css"/>
  </head>
  <body>
  <div class="navegacao">
        <a href="/Comentarios"> Faça seu comentario </a>
        <a href="/Conteudos"> Nossos conteudos </a>
        <a href="/Favoritas "> Favoritas </a>
        <a href="/Duvidas"> Tem alguma duvida? clique aqui </a>
        <a href="/Avaliacao"> Avalie-nos </a>
        <a href="/Contato"> Entre em Contato </a>
        <a href="/Calendario"> VIP: Agende sua aula ao vivo </a>
        <a href="/Sobre"> Sobre Nós  </a>
    </div>

    <div class="container">
      <div class="cabecalho">
          <h1 id="cabecalho">CONHECIMENTOPREMIUM</h1>
          <button class="toggle-btn" onclick="toggleMode()" id="btn">Alterar fundo</button>
      </div>

    <div class="form-container">
    <div class="form-group">
      <label for="professor">Digite o nome do professor:</label>
      <input type="text" id="professor" name="professor">
    </div>

    <div class="form-group">
      <label for="materia">Digite a matéria que ele ensina:</label>
      <input type="text" id="materia" name="materia">
    </div>

    <div class="avaliacao">
  <h2>Avalie nosso serviço:</h2>
  <div class="avaliacao">
  <h2>Avalie nosso serviço:</h2>
  <div class="estrelas">
    <span class="star-icon ativo" data-avaliacao="1">&#9734;</span>
    <span class="star-icon ativo" data-avaliacao="2">&#9734;</span>
    <span class="star-icon ativo" data-avaliacao="3">&#9734;</span>
    <span class="star-icon ativo" data-avaliacao="4">&#9734;</span>
    <span class="star-icon ativo" data-avaliacao="5">&#9734;</span>
  </div>
  <button id="enviar-avaliacao">Enviar avaliação</button>
  <p id="resultado-avaliacao"></p>
</div>
    <a class="usos" href="/TermosdeUso"> Termos de Uso </a>
    <script src="{{ asset('js/avaliacao.js') }}"></script>  
  </body>
  </html>

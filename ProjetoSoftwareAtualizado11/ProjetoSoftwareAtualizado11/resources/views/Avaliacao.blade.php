<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página de Avaliação</title>
  <link href="{{ asset('css/avaliacao.css') }}" rel="stylesheet" type="text/css"/>
</head>
<body>
  <div class="navegacao">
    <a href="/Comentarios"> Comente algo </a>
    <a href="/Materias"> Matérias </a>
    <a href="/Professores"> Professores </a>
    <a href="/Duvidas"> Informe sua dúvida para nós </a>
    <a href="/Contato"> Entre em Contato </a>
    <a href="/Sobre"> Sobre Nós </a>
  </div>

  <div class="container">
    <div class="cabecalho">
      <h1>CONHECIMENTOPREMIUM</h1>
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
        <h2>Avalie nosso funcionário:</h2>
        <div class="estrelas">
          <span class="star-icon" data-avaliacao="1">&#9734;</span>
          <span class="star-icon" data-avaliacao="2">&#9734;</span>
          <span class="star-icon" data-avaliacao="3">&#9734;</span>
          <span class="star-icon" data-avaliacao="4">&#9734;</span>
          <span class="star-icon" data-avaliacao="5">&#9734;</span>
        </div>
        <button id="enviar-avaliacao" class="btnAvaliacao">Enviar avaliação</button>
        <p id="resultado-avaliacao" class="resultAvaliacao"></p>
      </div>
    </div>
  </div>

  <a class="usos" href="/TermosdeUso"> Termos de Uso </a>
  <script src="{{ asset('js/avaliacao.js') }}"></script>
</body>
</html>

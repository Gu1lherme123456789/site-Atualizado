<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página de Dúvidas</title>
  <link href="{{ asset('css/duvidas.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/inicialPage.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
  <div class="navegacao">
    <a href="/Comentarios"> Comente algo </a>
    <a href="/Materias"> Matérias </a>
    <a href="/Avaliacao"> Avalie-nos </a>
    <a href="/Contato"> Entre em Contato </a>
    <a href="/Sobre"> Sobre Nós </a>
  </div>

  <div class="cont">
    <div class="cabecalho">
      <img class="imgPremium" src="https://cdn.discordapp.com/attachments/1080645931189416037/1303830520119033966/CONHECIMENTOPREMIUM-removebg-preview.png?ex=672d2e4b&is=672bdccb&hm=25607e56ddc7b80c923d47881a92863235a9c81d5ff91a1c36049b0a29c1a72f&" alt="" />
      <button class="toggle-btn" onclick="toggleMode()" id="btn">Alterar fundo</button>
    </div>

    <div class="container">
      <div class="duvidas-container">
        <div id="cabecalhoLogin">
          <h1 id="cabecalhoLogin1">Escreva sua(s) Dúvida(s) aqui</h1>
          <form action="" class="form-duvidas" onsubmit="adicionarDuvida(event)">
            <div class="form-group">
              <input type="text" id="duvida-input"  required="required">
                    </div>
            <button type="submit" class="btnDuvidas">Enviar</button>
          </form>
        </div>

        <div id="duvidas">
          <!-- Dúvidas serão exibidas aqui -->
        </div>
      </div>
    </div>

    <a class="usos" href="/TermosdeUso"> Termos de Uso </a>
    <footer>
        <div class="container">
            <p>&copy; 2024 Conhecimento Premium. Todos os direitos reservados.</p>
            <div class="social-links">
                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/duvidas.js') }}"></script>
</body>

</html>
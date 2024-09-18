<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/contato.css') }}" rel="stylesheet" type="text/css"/>
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
        <a href="/Sobre"> Sobre Nós </a>
        <a href="/TermosdeUso"> Termos de Uso </a>
    </div>

<div class="cabecalho">
  <h1 id="cabecalho">CONHECIMENTOPREMIUM</h1>
  <button class="toggle-btn" onclick="toggleMode()" id="btn">Alterar fundo</button>
</div>

<div class="container">
  <h2>Formulário de Contato</h2>
  <form id="contactForm" class="contact-form">
    <input type="text" id="name" name="name" placeholder="Seu nome" required>
    <input type="email" id="email" name="email" placeholder="Seu e-mail" required>
    <textarea id="message" name="message" placeholder="Sua mensagem" required></textarea>
    <button type="submit">Enviar</button>
  </form>
  <h1>Nos encontre nessas redes sociais:</h1>
  <div class="social-icons">
    <i class="fab fa-facebook-f"></i>
    <i class="fab fa-twitter"></i>
    <i class="fab fa-instagram"></i>
    <i class="fab fa-linkedin-in"></i>
  </div>
</div>
<a class="usos" href="/TermosdeUso"> Termos de Uso </a>
<script src="{{ asset('js/contato.js') }}"></script>  
</body>
</html>
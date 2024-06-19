@extends('layouts.app')

@section('conteudo')
<div class="container">
  <h2>Formulário de Contato</h2>
  <form id="contactForm">
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
@endsection
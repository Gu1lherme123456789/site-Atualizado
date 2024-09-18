@extends('layouts.app')

@section('conteudo')
<div class="navegacao">
        <a href="/Comentarios"> < Faça seu comentario > </a>
        <a href="/Conteudos"> < Nossos conteudos > </a>
        <a href="/Favoritas "> < Favoritas > </a>
        <a href="/Duvidas"> < Tem alguma duvida? clique aqui> </a>
        <a href="/Avaliacao"> < Avalie-nos> </a>
        <a href="/Contato"> < Entre em Contato> </a>
        <a href="/Calendario"> < (VIP: Agende sua aula ao vivo) > </a>
        <a href="/Sobre"> < Sobre Nós> </a>
    </div>

    <div class="container">
        <div class="cabecalho">
            <h1 id="cabecalho">CONHECIMENTOPREMIUM</h1>
            <button class="toggle-btn" onclick="toggleMode()" id="btn">Alterar fundo</button>
        </div>

    <div>
        <h1>MATEMATICA</h1>
    </div>
    <div  class="center">
    <div class="div">
            <img  src="https://www.youtz.com.br/wp-content/uploads/2019/10/YOUTZ-MATEMATICA-ENEM.jpg" alt="" class="hover-image" >
        </div>
    </div>
    <div class="box-materials">
        <h1>Links de matérias mais relevantes para o ENEM</h1>
        <a href="https://youtu.be/uIulBEk8gcM?feature=shared">Razão e proporção</a> <br>
        <a href="https://youtu.be/XAK7m6SRLPw?feature=shared">Geometria plana </a><br>
        <a href="https://youtu.be/Y_gD7S6OkC4?feature=shared">Geometria espacial</a>

    </div>
    <a class="usos" href="/TermosdeUso"> Termos de Uso </a>
    @endsection

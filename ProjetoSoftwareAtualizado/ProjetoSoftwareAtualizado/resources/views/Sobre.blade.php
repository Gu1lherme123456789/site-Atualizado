@extends('layouts.app')

@section('conteudo')
<div class="navegacao">
        <a href="/Comentarios"> < Faça seu comentario > </a>
        <a href="/Conteudos"> < Nossos conteudos > </a>
        <a href="/Favoritas "> < Favoritas > </a>
        <a href="/Duvidas"> < Tem alguma duvida? clique aqui> </a>
        <a href="/Avaliacao"> < Avalie-nos> </a>
        <a href="/Contato"> < Entre em Contato> </a>
        <a href="/Calendario"> <(VIP: Agende sua aula ao vivo)> </a>
        <a href="/Sobre"> < Sobre Nós> </a>
    </div>

<div class="container">
        <div class="cabecalho">
            <h1 id="cabecalho">CONHECIMENTOPREMIUM</h1>
            <button class="toggle-btn" onclick="toggleMode()" id="btn">Alterar fundo</button>
        </div>
            <h1 class="h1Sobre">Um pouco da nossa historia</h1>
            <h2 class="h2Nosso">Olá, somos estudantes do 3° ano do Ensino Médio, nosso grupo é composto por: <br> Guilherme Adrian, Hugo, Lucas Casiano, Thiago Castro e Thiago Freitas. <br>
                Criamos um projeto com o intuito de solucionar um problema:  </br>
                Pessoas que não aprenderam ou não estão satisfeitas com o conhecimento academico recebido na escola e durante a vida
                Em troca pedimos uma mensalidade de $20,00 porque a nossa ideia é contratar professores de diversas matérias que irão
                sempre atualizar o site com novos conteudo. </br> <br>
                Projetada especialmente para adolescentes e aqueles que não consiguiram ter um conhecimento academico sólido <br> <br>
                Uma foto de nosso grupo:
            </h2>
        </div>
        <a class="usos" href="/TermosdeUso"> Termos de Uso </a>
@endsection

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

        <h1>QUIMICA</h1>
        </div>
    <div class="center">


        <div class="div">

     <img src="https://img.elo7.com.br/product/zoom/3F92882/matriz-para-bordado-simbolo-quimica-bordado-computadorizado.jpg" alt="" class="hover-image">

    </div>
   </div>
   <div class="box-materials">
        <h1>Links de matérias mais relevantes para o ENEM</h1>
        <a href="https://youtu.be/zytBSQMYxxg?feature=shared">Termoquímica</a> <br>
        <a href="https://youtu.be/r4jgsyHYRN8?feature=shared">Estudo de moléculas</a> <br>
        <a href="https://youtu.be/-RU1ywag0Dg?feature=shared">Eletroquímica</a> <br>
        <a href="https://youtu.be/pZZBiZUFUNo?si=9zA6qNbAKATKWedE">Polaridade de ligações</a> <br>
        <a href="https://youtu.be/uD-ZlZhTM3M?si=VPihVxCO30-86yRC">Reações Inorgânicas</a> <br>
        <a href="https://youtu.be/4zyWZlx7vVE?si=o0iLY_GacvMFC-Vk">Funções Orgânicas</a> <br>
        <a href="https://youtu.be/vjSTEuI7sGA?si=cHQlKyeSjFbadwl_">Isomerização</a>
    </div>
    <a class="usos" href="/TermosdeUso"> Termos de Uso </a>
    @endsection

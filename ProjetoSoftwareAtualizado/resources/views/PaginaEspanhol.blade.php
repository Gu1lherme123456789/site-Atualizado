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
        <h1 id="cabecalho">CONOCIMIENTO PREMIUM</h1>
        <button class="toggle-btn" onclick="toggleMode()" id="btn">Cambiar fondo</button>
    </div>

    <div>
        <h1>ESPAÑOL</h1>
    </div>
    <div  class="center">

        <div class="div">
         <img  src="https://www.shutterstock.com/image-vector/spanish-espanol-hablas-hallotranslation-do-260nw-2391002103.jpg" alt="" class="hover-image">
        </div>

</div>
<div class="box-materials">
        <h1>Enlaces a los temas más relevantes para ENEM</h1>
        <a href="https://youtu.be/b4bAuswvMWg?si=FtLnkB-akHEoVke-">Interpretación y comprensión textual</a> <br>
        <a href="https://youtu.be/ajllxqY24zU?si=v8bD2kme3YdnI5Ku">Semántica y léxico</a> <br>
        <a href="https://youtu.be/tNhBbIkX1Uc?si=8nPcNEsF8PJ9uL3W">Funciones de texto</a>

    </div>
    <a class="usos" href="/TermosdeUso"> Condiciones de uso </a>
    @endsection

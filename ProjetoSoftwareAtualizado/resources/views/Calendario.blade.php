@extends('layouts.app')

@section('conteudo')
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
</div>

<div class="calendario-section">
    <h2>Acesso VIP</h2>
    <h1>Calendário do estudante: Solicite um dia e horário para marcação de aula ao vivo</h1>

    <form action="/Calendario" method="get">
        @csrf
        <div class="calend-group">
            <label for="date">Data:</label>
            <input type="date" id="date" name="date" required>
        </div>
        <div class="calend-group">
            <label for="time">Horário:</label>
            <input type="time" id="time" name="time" required>
        </div>
        <div class="calendMa-group">
            <label for="subject">Matéria:</label>
            <select id="subject" name="subject" required>
                <option value="matematica">Matematica</option>
                <option value="portugues">Português</option>
                <option value="geografia">Geografia</option>
                <option value="historia">História</option>
                <option value="fisica">Física</option>
                <option value="quimica">Química</option>
                <option value="biologia">Biologia</option>
            </select>
        </div>
        <div class="calend-group">
            <label for="student_name">Seu nome:</label>
            <input type="text" id="student_name" name="student_name" required>
        </div>
        <button type="submit" onclick="enviarCalendario()">Enviar</button>
    </form>
    <a class="usos" href="/TermosdeUso"> Termos de Uso </a>
</div>
@endsection

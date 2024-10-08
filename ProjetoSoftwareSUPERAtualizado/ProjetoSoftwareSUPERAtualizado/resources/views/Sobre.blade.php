<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Sobre Nós</title>
    <link href="{{ asset('css/sobre.css') }}" rel="stylesheet" type="text/css"/>
</head>
<body>

<div class="navegacao">
    <a href="/Comentarios">  Comente algo  </a>
    <a href="/Materias"> Matérias </a>
    <a href="/Duvidas"> Informe sua dúvida para nós </a>
    <a href="/Avaliacao"> Avalie-nos </a>
    <a href="/Contato"> Entre em Contato </a>
</div>

<div class="container">
    <div class="cabecalho">
        <h1 id="cabecalho">CONHECIMENTOPREMIUM</h1>
        <button class="toggle-btn" onclick="toggleMode()" id="btn">Alterar fundo</button>
    </div>
    <h1 class="pouco">Um pouco da nossa história</h1>
    <h2>Olá, somos estudantes do 3° ano do Ensino Médio, nosso grupo é composto por: <br> Guilherme Adrian, Hugo, Lucas Casiano, Thiago Castro e Thiago Freitas. <br>
        Criamos um projeto com o intuito de solucionar um problema:  <br>
        Pessoas que não aprenderam ou não estão satisfeitas com o conhecimento acadêmico recebido na escola e durante a vida. <br>
        Em troca, pedimos uma mensalidade de $20,00, porque a nossa ideia é contratar professores de diversas matérias que irão
        sempre atualizar o site com novos conteúdos. <br> <br>
        Projetada especialmente para adolescentes e aqueles que não conseguiram ter um conhecimento acadêmico sólido. <br> <br>
        Uma foto de nosso grupo:
    </h2>
</div>
        <a class="usos" href="/TermosdeUso">Termos de Uso</a>

        <script src="{{ asset('js/sobre.js') }}"></script>

        </body>
        </html>

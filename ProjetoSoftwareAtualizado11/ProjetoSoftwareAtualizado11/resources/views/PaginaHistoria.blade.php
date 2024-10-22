<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de História</title>
    <link href="{{ asset('css/historia.css') }}" rel="stylesheet" type="text/css"/>
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
          <h1>CONHECIMENTOPREMIUM</h1>
          <button class="toggle-btn" onclick="toggleMode()" id="btn">Alterar fundo</button>
      </div>

    <div>
        <h1>HISTÓRIA</h1>
    </div>
    <div  class="centro">
    <div class="div">
            <img  src="https://fdr.com.br/wp-content/uploads/2020/10/historia-1200x720.jpg" alt="" class="hover-image" >
    </div>
    </div>
      <div class="box-materials">
        <h1>Links de matérias mais relevantes para o ENEM</h1>
        <a href="https://youtu.be/sc2KBgUCEYg?si=3AVnEdDck1ugxMAw">Era Vargas</a> <br>
        <a href="https://youtu.be/RX2eB7zf87g?si=NSNsyUqlv113nzWy">Brasil Colônia</a> <br>
        <a href="https://youtu.be/CTIs_RSPr84?si=yJ9eCWcqNvnopmdB">Idade Média</a> <br>
        <a href="https://youtu.be/MRE-8r7xI5Y?si=TawZzH3FKGGVydlt">Idade Moderna</a> <br>
        <a href="https://youtu.be/LuQYqt6jneI?si=ZpMtbhMRiKH8lZpX">Estado Novo</a> <br>
        <a href="https://youtu.be/HGrq8Eit31E?si=k3SgWQnRQcI3pGWH">Ditadura Militar</a> <br>
        <a href="https://youtu.be/2bmTCLGJZ3w?si=PuVa_SxoSleNgUla">Primeira República</a>
    </div>
    <a class="usos" href="/TermosdeUso">Termos de Uso</a>
    <script src="{{ asset('js/historia.js') }}"></script>
  </body>
  </html>



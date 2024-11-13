<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Química</title>
    <link href="{{ asset('css/quimica.css') }}" rel="stylesheet" type="text/css"/>
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
    <h1>QUÍMICA</h1>
</div>
<div id="centro">
<div class="div">
        <img  src="https://img.elo7.com.br/product/zoom/3F92882/matriz-para-bordado-simbolo-quimica-bordado-computadorizado.jpg" alt="" class="hover-image" >
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
    <a class="usos" href="/TermosdeUso">Termos de Uso</a>
    <script src="{{ asset('js/quimica.js') }}"></script>
  </body>
  </html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Português</title>
    <link href="{{ asset('css/portugues.css') }}" rel="stylesheet" type="text/css"/>
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
        <h1>PORTUGUÊS</h1>
    </div>
<div id="centro">
    <div class="div">
            <img  src="https://media.istockphoto.com/id/1181232702/pt/vetorial/portuguese.jpg?s=612x612&w=0&k=20&c=-fN-MKLRa1xoTxHaPboWe-CwibCrACSJPif-vPC7ipg=" alt="" class="hover-image" >
    </div>
</div>
<div class="box-materials">
        <h1>Links de matérias mais relevantes para o ENEM</h1>
        <a href="https://youtu.be/51Vj6uzsdaA?feature=shared">Gêneros textuais</a> <br>
        <a href="https://youtu.be/Aqh32VzKvqo?feature=shared">Variação linguística</a> <br>
        <a href="https://youtu.be/d6kS7zj8p2Q?feature=shared">Funções da linguagem</a> <br>
        <a href="https://youtu.be/9tW83jfWX7U?si=QOXD8R_il3oyMJRo">Regras de Gramática </a> <br>
        <a href="https://youtu.be/jq3LBXYLZWY?si=bhvAW9n25iJrMaRd">Literatura Brasileira</a> <br>
        <a href="https://youtu.be/f5Sk0KmaehQ?si=BFgs2F4UeQYZ3FZM">Texto Verbal e Não Verbal</a> <br>
        <a href="https://youtu.be/iJ3yzYMwpPg?si=CO9RITk9eoW_5tDO">Figuras de Linguagem</a>
    </div>
    <a class="usos" href="/TermosdeUso">Termos de Uso</a>
    <script src="{{ asset('js/portugues.js') }}"></script>
  </body>
  </html>

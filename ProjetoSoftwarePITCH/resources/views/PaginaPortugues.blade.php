<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Português</title>
    <link href="{{ asset('css/portugues.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <!-- Botão do menu hambúrguer -->
        <div class="menu-toggle" id="menuToggle">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <div class="menu-back" id="menuBack">Voltar</div>

        <img class="imgPremium" src="img/conhecimento.png" alt="Conhecimento Premium" />
        <button class="toggle-btn" onclick="toggleMode()" id="btn">Alterar fundo</button>
    </header>

  <!-- Menu Lateral -->
  <nav id="menu" class="menu">
    <ul>
        <li><a href="/Comentarios">💬Comentarios</a></li>
        <li><a href="/Professores">👨‍🏫Professores</a></li>
        <li><a href="/Materias">📝Matérias</a></li>
        <li><a href="/Favoritas"> 📙Matérias Favoritas</a></li>
        <li><a href="/Calendario">👑VIP: Aulas ao vivo</a></li>
        <li><a href="/Duvidas">❓Informe sua dúvida</a></li>
        <li><a href="/Avaliacao">✅Avalie-nos</a></li>
        <li><a href="/Contato">📞Contatos</a></li>
        <li><a href="/Sobre">👁️Sobre Nós</a></li>
    </ul>
  </nav>
    <div class="container">
        <div class="title">
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
        <footer>
        <div class="container">
            <p>&copy; 2024 Conhecimento Premium. Todos os direitos reservados.</p>
        </div>
        </footer>
    </div>

  <script src="{{ asset('js/portugues.js') }}"></script>

  </body>
  </html>

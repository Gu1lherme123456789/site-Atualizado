<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de História</title>
    <link href="{{ asset('css/historia.css') }}" rel="stylesheet" type="text/css"/>
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

    <div class="title">
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
    <footer>
        <div class="container">
            <p>&copy; 2024 Conhecimento Premium. Todos os direitos reservados.</p>
        </div>
    </footer>
  </div>

  <script src="{{ asset('js/historia.js') }}"></script>

  </body>
  </html>



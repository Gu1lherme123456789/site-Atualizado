<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Química</title>
    <link href="{{ asset('css/quimica.css') }}" rel="stylesheet" type="text/css"/>
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
    <footer>
        <div class="container">
            <p>&copy; 2024 Conhecimento Premium. Todos os direitos reservados.</p>
        </div>
    </footer>
  </div>

  <script src="{{ asset('js/quimica.js') }}"></script>

  </body>
  </html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Geografia</title>
    <link href="{{ asset('css/geografia.css') }}" rel="stylesheet" type="text/css"/>
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
        <h1>GEOGRAFIA</h1>
    </div>
    <div id="centro">
        <div class="div">
                <img  src="https://blogger.googleusercontent.com/img/a/AVvXsEh_bd7wKaq3NqxAIcX2CxXr7ls5tSqqHq4-8M2jmbAMZ_YVrKHIt8J46kbB0M-4Quz089gObFTu2oczLXMMZDJ26x8URcDE0AKvdnUf1KSEs1kQEQF1DJg0WhNOUKEf-s2BUATkfQ0pfC7NH0lI7i5xcSrobrHcrJ50025HmxWV9XbFvNeDqbBbhrzteA=w640-h419" alt="" class="hover-image" >
        </div>
        </div>
 <div class="box-materials">
        <h1>Links de matérias mais relevantes para o ENEM</h1>
        <a href="https://youtu.be/kej3_SuE08k?si=PVzuaIsmWUxU81Jh">Mudanças Climáticas</a> <br>
        <a href="https://youtu.be/vSha1B1CyE8?si=0KWExtD3fiew-fwB">Relevo</a> <br>
        <a href="https://youtu.be/hbzAvNTJof4?si=oJqcD5CsGt2FGmir">Climas do Brasil</a> <br>
        <a href="https://youtu.be/2uXUSLF10R0?si=I0-WmKo5KdlzmYaX">Geopolítica</a> <br>
        <a href="https://youtu.be/dYYjf_YxlPY?si=tooGh5vUXKzsSxfl">Espaço agrário</a> <br>
        <a href="https://youtu.be/CYyB9PGgyIc?si=K2lGsJj2DZlbQQCF">Geologia</a> <br>
        <a href="https://youtu.be/NPixZjTK8Us?si=HVxATk2x9K_01K8U">Industrialização brasileira</a>
    </div>

    <a class="usos" href="/TermosdeUso">Termos de Uso</a>
    <footer>
        <div class="container">
            <p>&copy; 2024 Conhecimento Premium. Todos os direitos reservados.</p>
        </div>
    </footer>
  </div>

  <script src="{{ asset('js/geografia.js') }}"></script>

  </body>
  </html>

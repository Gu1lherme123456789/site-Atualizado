<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Avaliação</title>
    <link href="{{ asset('css/avaliacao.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body class="container">
    <header>
        <!-- Botão do menu hambúrguer -->
        <div class="menu-toggle" id="menuToggle">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <!-- Botão de voltar -->
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

    <h1 class="pouco" style="text-align: center">Um pouco da nossa história</h1>
    <h2 style="text-align: center">Olá, somos estudantes do 3° ano do Ensino Médio, nosso grupo é composto por: <br> Guilherme Adrian, Hugo, Lucas Casiano, Thiago Castro e Thiago Freitas. <br><br>
        Criamos um projeto com o intuito de solucionar um problema:  <br>
        Falta de conhecimento acadêmico em pessoas que tiveram uma educação de baixa qualidade ou se sentem insatisfeitas com o aprendizado adquirido na escola. <br><br>
        Em troca, pedimos uma pagamento único de $20,00, porque a nossa ideia é contratar professores de diversas matérias que irão
        sempre atualizar o site com novos conteúdos. <br> <br>
        Projetada especialmente para adultos e aqueles que não conseguiram ter um conhecimento acadêmico sólido. <br> <br>
        </h2>
    </div>

    <a class="usos" href="/TermosdeUso">Termos de Uso</a>
    <footer  style="  bottom: 0;
        position: fixed;
        width: 100%;
        text-align: center;">
        <div class="container">
            <p>&copy; 2024 Conhecimento Premium. Todos os direitos reservados.</p>
        </div>
    </footer>
  </div>

  <script src="{{ asset('js/sobre.js') }}"></script>

        </body>
        </html>

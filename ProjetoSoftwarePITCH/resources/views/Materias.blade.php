<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Matérias</title>
    <link href="{{ asset('css/materias.css') }}" rel="stylesheet" type="text/css"/>
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
        </ul>
    </nav>

        <div class="searchbar2">
            <h1 class="matss">Matérias disponíveis no nosso site:</h1>
            <input id="searchbar" onkeyup="search_materia()" type="text" name="search" placeholder="Pesquisar matéria" autocomplete="off">
        </div>

            <div class="grid-container">
                <ul class="grid-container">
                    <li class="mts">
                        <span class="materias"><a href="/PaginaMatematica">Matemática</a></span>
                        <div class="button-container">
                            <button type="button" class="favoritar" onclick="favoritar(this)">
                                <i class="coracao_icon">🖤</i> Favoritar
                            </button>
                            <button type="button" class="desfavoritar" onclick="desfavoritar(this)">
                                <i class="coracao_icon">💔</i> Desfavoritar
                            </button>
                        </div>
                    </li>
                    <li class="mts">
                        <span class="materias"><a href="/PaginaPortugues">Português</a></span>
                        <div class="button-container">
                            <button type="button" class="favoritar" onclick="favoritar(this)">
                                <i class="coracao_icon">🖤</i> Favoritar
                            </button>
                            <button type="button" class="desfavoritar" onclick="desfavoritar(this)">
                                <i class="coracao_icon">💔</i> Desfavoritar
                            </button>
                        </div>
                    </li>
                    <li class="mts">
                        <span class="materias"><a href="/PaginaHistoria">História</a></span>
                        <div class="button-container">
                            <button type="button" class="favoritar" onclick="favoritar(this)">
                                <i class="coracao_icon">🖤</i> Favoritar
                            </button>
                            <button type="button" class="desfavoritar" onclick="desfavoritar(this)">
                                <i class="coracao_icon">💔</i> Desfavoritar
                            </button>
                        </div>
                    </li>
                    <li class="mts">
                        <span class="materias"><a href="/PaginaGeografia">Geografia</a></span>
                        <div class="button-container">
                            <button type="button" class="favoritar" onclick="favoritar(this)">
                                <i class="coracao_icon">🖤</i> Favoritar
                            </button>
                            <button type="button" class="desfavoritar" onclick="desfavoritar(this)">
                                <i class="coracao_icon">💔</i> Desfavoritar
                            </button>
                        </div>
                    </li>
                    <li class="mts">
                        <span class="materias"><a href="/PaginaFisica">Física</a></span>
                        <div class="button-container">
                            <button type="button" class="favoritar" onclick="favoritar(this)">
                                <i class="coracao_icon">🖤</i> Favoritar
                            </button>
                            <button type="button" class="desfavoritar" onclick="desfavoritar(this)">
                                <i class="coracao_icon">💔</i> Desfavoritar
                            </button>
                        </div>
                    </li>
                    <li class="mts">
                        <span class="materias"><a href="/PaginaQuimica">Química</a></span>
                        <div class="button-container">
                            <button type="button" class="favoritar" onclick="favoritar(this)">
                                <i class="coracao_icon">🖤</i> Favoritar
                            </button>
                            <button type="button" class="desfavoritar" onclick="desfavoritar(this)">
                                <i class="coracao_icon">💔</i> Desfavoritar
                            </button>
                        </div>
                    </li>
                    <li class="mts">
                        <span class="materias"><a href="/PaginaBiologia">Biologia</a></span>
                        <div class="button-container">
                            <button type="button" class="favoritar" onclick="favoritar(this)">
                                <i class="coracao_icon">🖤</i> Favoritar
                            </button>
                            <button type="button" class="desfavoritar" onclick="desfavoritar(this)">
                                <i class="coracao_icon">💔</i> Desfavoritar
                            </button>
                        </div>
                    </li>
                    <li class="mts">
                        <span class="materias"><a href="/PaginaIngles">Inglês</a></span>
                        <div class="button-container">
                            <button type="button" class="favoritar" onclick="favoritar(this)">
                                <i class="coracao_icon">🖤</i> Favoritar
                            </button>
                            <button type="button" class="desfavoritar" onclick="desfavoritar(this)">
                                <i class="coracao_icon">💔</i> Desfavoritar
                            </button>
                        </div>
                    </li>
                    <li class="mts">
                        <span class="materias"><a href="/PaginaEspanhol">Espanhol</a></span>
                        <div class="button-container">
                            <button type="button" class="favoritar" onclick="favoritar(this)">
                                <i class="coracao_icon">🖤</i> Favoritar
                            </button>
                            <button type="button" class="desfavoritar" onclick="desfavoritar(this)">
                                <i class="coracao_icon">💔</i> Desfavoritar
                            </button>
                        </div>
                    </li>
                </ul>
            </div>

            <a class="usos" href="/TermosdeUso">Termos de Uso</a>
            <footer>
                <div class="container">
                    <p>&copy; 2024 Conhecimento Premium. Todos os direitos reservados.</p>
                </div>
            </footer>
          </div>

    <script src="{{ asset('js/materias.js') }}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Matérias</title>
    <link href="{{ asset('css/materias.css') }}" rel="stylesheet" type="text/css"/>
</head>

<body class="container">
    <div class="navegacao">
        <a href="/Comentarios">Comente algo</a>
        <a href="/Professores">Professores</a>
        <a href="/Favoritas">Matérias Favoritas</a>
        <a href="/Calendario">VIP: Agende sua aula ao vivo</a>
        <a href="/Duvidas">Informe sua dúvida</a>
        <a href="/Avaliacao">Avalie-nos</a>
        <a href="/Contato">Entre em Contato</a>
        <a href="/Sobre">Sobre Nós</a>
    </div>

    <div class="container">
        <div class="cabecalho">
            <img class="imgPremium" src="img/conhecimento.png" alt="" />
            <button class="toggle-btn" onclick="toggleMode()" id="btn">Alterar fundo</button>
        </div>

        <input id="searchbar" onkeyup="search_materia()" type="text" name="search" placeholder="Pesquisar matéria" autocomplete="off">
              
      
        <div class="image-container">
        <h1 class="matss">Matérias disponíveis no nosso site:</h1>
            <div class="grid-container">
                <ul>
                    <li class="mts">
                        <span class="materias"><a href="/PaginaMatematica">Matemática</a></span>
                        <div class="button-container">
                            <button type="button" class="favoritar" onclick="favoritar(this)">
                                <i class="coracao_icon">🖤</i> Favoritar
                            </button>
                            <button type="button" class="desfavoritar" onclick="desfavoritar(this)">
                                <i class="coracao_icon">🤍</i> Desfavoritar
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
                                <i class="coracao_icon">🤍</i> Desfavoritar
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
                                <i class="coracao_icon">🤍</i> Desfavoritar
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
                                <i class="coracao_icon">🤍</i> Desfavoritar
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
                                <i class="coracao_icon">🤍</i> Desfavoritar
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
                                <i class="coracao_icon">🤍</i> Desfavoritar
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
                                <i class="coracao_icon">🤍</i> Desfavoritar
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
                                <i class="coracao_icon">🤍</i> Desfavoritar
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
                                <i class="coracao_icon">🤍</i> Desfavoritar
                            </button>
                        </div>
                    </li>
                </ul>
            </div>
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

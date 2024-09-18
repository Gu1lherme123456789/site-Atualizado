    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="{{ asset('css/conteudo.css') }}" rel="stylesheet" type="text/css"/>
    </head>

    <body class="container">
        <div class="navegacao">
            <a href="/Comentarios"> Faça seu comentario </a>
            <a href="/Conteudos"> Nossos conteudos </a>
            <a href="/Favoritas "> Favoritas </a>
            <a href="/Duvidas"> Tem alguma duvida? clique aqui </a>
            <a href="/Avaliacao"> Avalie-nos </a>
            <a href="/Contato"> Entre em Contato </a>
            <a href="/Calendario"> VIP: Agende sua aula ao vivo </a>
            <a href="/Sobre"> Sobre Nós </a>
            <a href="/Professores"> Professores </a>
        </div>

        <div class="container">
            <div class="cabecalho">
            <div class="title-container">
                <h1 id="cabecalho">CONHECIMENTOPREMIUM</h1>
            </div>
                <button class="toggle-btn" onclick="toggleMode()" id="btn">Alterar fundo</button>
            </div>

        <input id="searchbar" onkeyup="search_animal()" type="text" name="search" placeholder="pesquisar matéria" autocomplete="off">


        <div class="image-container">
            <h1 class="materiad"> Matérias disponivéis no nosso site:</h1>
        <div class="container-display">
            <ul>
                <div class="mmm">
                <li class="mts">
                    <a href="/PaginaMatematica" class="materias">Matemática</a>
                    <div class="button-container">
                    <button type="button" class="favoritar" onclick="favoritar(this)">
                    <i class="coracao_icon">🖤</i> Favoritar
                    </button>
                    <button type="button" class="desfavoritar" onclick="desfavoritar(this)">
                    <i class="coracao_icon">🤍</i> Desfavoritar
                    </button>
                    </div>
                </li>

                </div>
                <div class="mmm">
                <li class="mts">
                    <a href="/PaginaPortugues" class="materias">Português</a>
                    <div class="button-container">
                    <button type="button" class="favoritar" onclick="favoritar(this)">
                        <i class="coracao_icon">🖤</i> Favoritar
                    </button>
                    <button type="button" class="desfavoritar" onclick="desfavoritar(this)">
                        <i class="coracao_icon">🤍</i> Desfavoritar
                    </button>
                    </div>
                </li>
                </div>
                <div class="mmm">
                <li class="mts">
                    <a href="/PaginaHistoria" class="materias">História</a>
                    <div class="button-container">
                    <button type="button" class="favoritar" onclick="favoritar(this)">
                        <i class="coracao_icon">🖤</i> Favoritar
                    </button>
                    <button type="button" class="desfavoritar" onclick="desfavoritar(this)">
                        <i class="coracao_icon">🤍</i> Desfavoritar
                    </button>
                    </div>
                </li>
                </div>
                <div class="mmm">
                <li class="mts">
                    <a href="/PaginaGeografia" class="materias">Geografia</a>
                    <div class="button-container">
                    <button type="button" class="favoritar" onclick="favoritar(this)">
                        <i class="coracao_icon">🖤</i> Favoritar
                    </button>
                    <button type="button" class="desfavoritar" onclick="desfavoritar(this)">
                        <i class="coracao_icon">🤍</i> Desfavoritar
                    </button>
                    </div>
                </li>
                </div>
                <div class="mmm">
                <li class="mts">
                    <a href="/PaginaFisica" class="materias">Física</a>
                    <div class="button-container">
                    <button type="button" class="favoritar" onclick="favoritar(this)">
                        <i class="coracao_icon">🖤</i> Favoritar
                    </button>
                    <button type="button" class="desfavoritar" onclick="desfavoritar(this)">
                        <i class="coracao_icon">🤍</i> Desfavoritar
                    </button>
                </div>
                </li>
                </div>
                <div class="mmm">
                <li class="mts">
                    <a href="/PaginaQuimica" class="materias">Química</a>
                    <div class="button-container">
                        <button type="button" class="favoritar" onclick="favoritar(this)">
                            <i class="coracao_icon">🖤</i> Favoritar
                        </button>
                        <button type="button" class="desfavoritar" onclick="desfavoritar(this)">
                            <i class="coracao_icon">🤍</i> Desfavoritar
                        </button>
                    </div>
                </li>
                </div>
                <div class="mmm">
                <li class="mts">
                    <a href="/PaginaBiologia" class="materias">Biologia</a>
                    <div class="button-container">
                    <button type="button" class="favoritar" onclick="favoritar(this)">
                        <i class="coracao_icon">🖤</i> Favoritar
                    </button>
                    <button type="button" class="desfavoritar" onclick="desfavoritar(this)">
                        <i class="coracao_icon">🤍</i> Desfavoritar
                    </button>
                    </div>
                    <div class="mmm">
                <li class="mts">
                    <a href="/PaginaIngles" class="materias">Inglês</a>
                    <div class="button-container">
                    <button type="button" class="favoritar" onclick="favoritar(this)">
                        <i class="coracao_icon">🖤</i> Favoritar
                    </button>
                    <button type="button" class="desfavoritar" onclick="desfavoritar(this)">
                        <i class="coracao_icon">🤍</i> Desfavoritar
                    </button>
                    </div>
                    <div class="mmm">
                <li class="mts">
                    <a href="/PaginaEspanhol" class="materias">Espanhol</a>
                    <div class="button-container">
                    <button type="button" class="favoritar" onclick="favoritar(this)">
                        <i class="coracao_icon">🖤</i> Favoritar
                    </button>
                    <button type="button" class="desfavoritar" onclick="desfavoritar(this)">
                        <i class="coracao_icon">🤍</i> Desfavoritar
                    </button>
                    </div>
                </div>
                </li>
                </div>
            </ul>
        </div>
        <a class="usos" href="/TermosdeUso"> Termos de Uso </a>
        <script src="{{ asset('js/telaConteudos.js') }}"></script>   
    </body>
    </html>






@extends('layouts.app')

@section('conteudo')
<body class="container">
    <div class="navegacao">
        <a href="/Comentarios"> < Faça seu comentario > </a>
        <a href="/Conteudos"> < Nossos conteudos > </a>
        <a href="/Favoritas "> < Favoritas > </a>
        <a href="/Duvidas"> < Tem alguma duvida? clique aqui> </a>
        <a href="/Avaliacao"> < Avalie-nos> </a>
        <a href="/Contato"> < Entre em Contato> </a>
        <a href="/Calendario"> < (VIP: Agende sua aula ao vivo) > </a>
        <a href="/Sobre"> < Sobre Nós> </a>
    </div>

    <div class="container">
        <div class="cabecalho">
            <h1 id="cabecalho">CONHECIMENTOPREMIUM</h1>
            <button class="toggle-btn" onclick="toggleMode()" id="btn">Alterar fundo</button>
        </div>

    <input id="searchbar" onkeyup="search_animal()" type="text" name="search" placeholder="pesquisar matéria" autocomplete="off">


    <div class="image-container">
        <h1 class="materiad"> Matérias disponivéis no nosso site:</h1>
     <div class="container-display">
        <ul>
            <li class="mts">
                <a href="/PaginaMatematica" class="materias">Matemática</a>
                <button type="button" class="favoritar" onclick="favoritar(this)">
                    <i class="coracao_icon">🖤</i> Favoritar
                </button>
                <button type="button" class="desfavoritar" onclick="desfavoritar(this)">
                    <i class="coracao_icon">🤍</i> Desfavoritar
                </button>
            </li>
            <li class="mts">
                <a href="/PaginaPortugues" class="materias">Português</a>
                <button type="button" class="favoritar" onclick="favoritar(this)">
                    <i class="coracao_icon">🖤</i> Favoritar
                </button>
                <button type="button" class="desfavoritar" onclick="desfavoritar(this)">
                    <i class="coracao_icon">🤍</i> Desfavoritar
                </button>
            </li>
            <li class="mts">
                <a href="/PaginaHistoria" class="materias">História</a>
                <button type="button" class="favoritar" onclick="favoritar(this)">
                    <i class="coracao_icon">🖤</i> Favoritar
                </button>
                <button type="button" class="desfavoritar" onclick="desfavoritar(this)">
                    <i class="coracao_icon">🤍</i> Desfavoritar
                </button>
            </li>
            <li class="mts">
                <a href="/PaginaGeografia" class="materias">Geografia</a>
                <button type="button" class="favoritar" onclick="favoritar(this)">
                    <i class="coracao_icon">🖤</i> Favoritar
                </button>
                <button type="button" class="desfavoritar" onclick="desfavoritar(this)">
                    <i class="coracao_icon">🤍</i> Desfavoritar
                </button>
            </li>
            <li class="mts">
                <a href="/PaginaFisica" class="materias">Física</a>
                <button type="button" class="favoritar" onclick="favoritar(this)">
                    <i class="coracao_icon">🖤</i> Favoritar
                </button>
                <button type="button" class="desfavoritar" onclick="desfavoritar(this)">
                    <i class="coracao_icon">🤍</i> Desfavoritar
                </button>
            </li>
            <li class="mts">
                <a href="/PaginaQuimica" class="materias">Química</a>
                <button type="button" class="favoritar" onclick="favoritar(this)">
                    <i class="coracao_icon">🖤</i> Favoritar
                    <button type="button" class="desfavoritar" onclick="desfavoritar(this)">
                        <i class="coracao_icon">🤍</i> Desfavoritar
                    </button>
                </button>
            </li>
            <li class="mts">
                <a href="/PaginaBiologia" class="materias">Biologia</a>
                <button type="button" class="favoritar" onclick="favoritar(this)">
                    <i class="coracao_icon">🖤</i> Favoritar
                    <button type="button" class="desfavoritar" onclick="desfavoritar(this)">
                        <i class="coracao_icon">🤍</i> Desfavoritar
                    </button>
                </button>
            </li>
        </ul>
    </div>


     </div>

    </div>
</body>
@endsection

@extends('layouts.app')

@section('conteudo')
<body class="container">
    <div class="navegacao">  
        <a href="/Comentarios"> < Faça seu comentario > </a>
        <a href="/Conteudos"> < Nossos conteudos > </a>
        <a href="/Duvidas">< Tem alguma duvida? clique aqui> </a> 
        <a href="/Avaliacao"> < Avalie-nos> </a>
        <a href="/Contato"> < Entre em Contato> </a>   
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
            <li><a  href="/PaginaMatematica" class="materias"> Matematica</a></li>
            <li><a  href="/PaginaPortugues" class="materias"> Português</a></li>
            <li><a  href="/PaginaHistoria" class="materias"> Historia</a></li>
            <li><a  href="/PaginaGeografia" class="materias"> Geografia</a></li>
            <li><a  href="/PaginaFisica" class="materias"> Fisica</a></li>
            <li><a  href="/PaginaQuimica" class="materias"> Quimica</a></li>
            <li><a  href="/PaginaBiologia" class="materias"> Biologia</a></li>
        </ul>
        
    </div>
    
       
     </div>
       
    </div>
</body>
@endsection

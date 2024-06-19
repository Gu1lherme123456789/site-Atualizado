@extends('layouts.app')

@section('conteudo')
<body class="container">
    <div class="navegacao">  
        <a href="/Comentarios"> < Faça seu comentario > </a>
        <a href="/Conteudos"> < Nossos conteudos > </a>
        <a href="/Duvidas">< Tem alguma duvida? clique aqui> </a> 
        <a href="/Avaliacao"> < Avalie-nos> </a>     
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
            <li></li>
            <li></li>
        </ul>
        
    </div>
    
       
     </div>
       
    </div>
</body>
@endsection

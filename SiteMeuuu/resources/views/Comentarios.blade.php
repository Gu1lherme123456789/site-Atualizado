@extends('layouts.app')

@section('conteudo')
<body>
    <header class="header">
        <hr>
        <h1>
            Coloque aqui seus comentarios
        </h1>
    </header>
    <section class="section">
        <form id="commentForm">
            <div>
                <label for="nome" class="label">Nome:</label>
                <input type="text" id="nome" required class="input">
            </div>
            <div>
                <label for="comentario" class="label">Comente algo:</label>
                <input type="text" id="comentario" required class="input">
                <button type="submit" class="button">Enviar</button>
            </div>
        </form>

        <div class="tabela" id="tabela">
            <br><br>
            <table border="0">
                <thead>
                    <tr>
                        <th>Autor</th>
                        <th>Comentário</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody id="comentariosList"></tbody>
            </table>
        </div>
    </section>

</body>
@endsection
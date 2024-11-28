<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrição VIP e Painel de Controle</title>
    <link href="{{ asset('css/calendario.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Link para o Font Awesome para usar o ícone de seta -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>

<header>
    <!-- Ícone de seta de voltar -->
    <a href="javascript:history.back()" class="back-arrow">
        <i class="fas fa-arrow-left"></i> Voltar
    </a>
    <h1>Inscrição VIP para Aulas ao Vivo</h1>
    <button class="toggle-btn" onclick="toggleMode()" id="btn">Alterar fundo</button>
</header>

<!-- Botão para alterar o fundo -->

<div class="container">

    <!-- Formulário de Inscrição -->
    <section class="form-section">
        <h2>Formulário de Inscrição</h2>
        <form id="formInscricao">
            <input type="text" id="nome" placeholder="Seu Nome" required>
            <input type="email" id="email" placeholder="Seu Email" required>
            <input type="datetime-local" id="dataHora" required>

            <fieldset id="materias">
                <legend>Selecione a matéria para as aulas</legend>
                <label>
                    <input type="radio" name="materia" value="Matematica" required> Matemática
                </label><br>
                <label>
                    <input type="radio" name="materia" value="Portugues"> Português
                </label><br>
                <label>
                    <input type="radio" name="materia" value="Biologia"> Biologia
                </label><br>
                <label>
                    <input type="radio" name="materia" value="Historia"> História
                </label><br>
                <label>
                    <input type="radio" name="materia" value="Geografia"> Geografia
                </label><br>
                <label>
                    <input type="radio" name="materia" value="Fisica"> Física
                </label><br>
                <label>
                    <input type="radio" name="materia" value="Ingles"> Inglês
                </label><br>
                <label>
                    <input type="radio" name="materia" value="Espanhol"> Espanhol
                </label><br>
                <label>
                    <input type="radio" name="materia" value="Quimica"> Química
                </label>
            </fieldset>

            <button type="submit">Inscrever-se</button>
        </form>
        <div class="success-message" id="successMessage" style="display: none;">
            Você se inscreveu com sucesso! Aguarde pela confirmação.
        </div>
    </section>

    <!-- Painel de Controle do Professor -->
    <section class="panel-section">
        <h2>Painel de Controle - Aulas Agendadas</h2>
        <div id="painel">
            <ul class="aula-list" id="aulaList">
                <!-- As aulas agendadas aparecerão aqui -->
            </ul>
        </div>
    </section>
</div>

<a class="usos" href="/TermosdeUso">Termos de Uso</a>
<footer>
    <div class="container">
        <p>&copy; 2024 Conhecimento Premium. Todos os direitos reservados.</p>
    </div>
</footer>
</div>

<script src="{{ asset('js/calendario.js') }}"></script>

</body>
</html>


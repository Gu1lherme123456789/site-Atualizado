<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Termos de uso</title>
    <link href="{{ asset('css/termosuso.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/materias.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/calendario.css') }}" rel="stylesheet" type="text/css"/>
</head>
<body>
<header>
    <a href="javascript:history.back()" class="back-arrow">
        <i class="fas fa-arrow-left"></i> Voltar
    </a>
<hr>
    <button class="toggle-btn" onclick="toggleMode()" id="btn">Alterar fundo</button>
</header>

  <!-- Menu Lateral -->


    <div class="container">
        <div class="cabecalho">
            <h1>CONHECIMENTOPREMIUM</h1>
        </div>

        <section>
            <h2 class="trr">Termos de Uso</h2>
            <p class="ter"> Ao acessar ou usar nosso site, você concorda com os seguintes Termos de uso. Se você não concorda com estes termos, por favor, não use o site.</p>
            <p class="ter"> O uso contínuo do site implica na aceitação dos Termos de uso atualizados. Recomendamos que você revise esta página periodicamente.</p>
            <h2 class="trr">Uso do Site:</h2>
            <ul class="tr">
                <li> O site é destinado a pessoas com pelo menos 14 anos.</li>
                <li> Concedemos uma licença limitada, não exclusiva e revogável para acessar o site para uso pessoal e não comercial.</li>
                <li> É proibido usar o site para fins ilegais, enviar conteúdo abusivo ou realizar scraping.</li>
            </ul>
            <h2 class="trr">Conteúdo do Usuário:</h2>
            <ul class="tr">
                <li> Você é responsável pelo conteúdo que publica e deve garantir que não infrinja direitos de terceiros.</li>
                <li> Reservamo-nos o direito de remover qualquer conteúdo que consideremos inadequado.</li>
            </ul>
            <p class="ter"> Não seremos responsáveis por quaisquer danos indiretos ou consequenciais relacionados ao uso do site.</p>
        </section>

        <section class="politica-de-privacidade">
            <h2 class="trr">Política de Privacidade</h2>
            <p class="ter">Valorizamos a sua privacidade e estamos comprometidos em proteger suas informações pessoais. Esta Política de Privacidade explica como coletamos, usamos e protegemos suas informações.</p>
            <p class="trr"><strong>Informações Coletadas:</strong></p>
            <ul class="tr">
                <li> Coletamos informações como nome e email quando você se cadastra no site.</li>
            </ul>
            <p class="ter"> Usamos suas informações para personalizar sua experiência no site e para enviar comunicações relacionadas ao site.</p>
            <p class="ter"> Adotamos medidas de segurança para proteger suas informações contra acesso não autorizado e uso indevido.</p>
            <p class="ter"> Usamos cookies para melhorar sua experiência no site. Você pode gerenciar cookies através das configurações do seu navegador.</p>
            <p class="ter"> Podemos atualizar esta Política de Privacidade periodicamente. As alterações serão publicadas nesta página.</p>
        </section>
    </div>
    <script src="{{ asset('js/termosuso.js') }}"></script>

    <a class="usos" href="/TermosdeUso">Termos de Uso</a>
  <footer>
      <div class="container">
          <p>&copy; 2024 Conhecimento Premium. Todos os direitos reservados.</p>
      </div>
  </footer>
</div>

<script src="{{ asset('js/termosuso.js') }}"></script>

</body>
</html>

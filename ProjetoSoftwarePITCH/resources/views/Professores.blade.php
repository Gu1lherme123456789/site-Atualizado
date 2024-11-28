<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página de Professores</title>
        <link href="{{ asset('css/professores.css') }}" rel="stylesheet" type="text/css"/>
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

    <h1>Conheça nossos professores</h1>

    <div>
        <h2>Matérias Ensino Fundamental</h2>
        <div class="professores">
            <div class="professor-perfil">
                <div class="professor-imagem">
                    <img src="https://static.vecteezy.com/system/resources/previews/016/717/597/original/mathematics-teacher-and-formula-png.png" alt="Professor de Matemática">
                </div>
                <div class="professor-nome"><strong>Nome:</strong> Carlos Almeida</div>
                <div class="professor-materia"><strong>Matéria:</strong> Matemática</div>
                <div class="professor-destaque"><strong>Destaque:</strong> Especialista em Cálculo Diferencial e Integral.</div>
            </div>

            <div class="professor-perfil">
                <div class="professor-imagem">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVHjk-grFDIAI8nRAGlKs5MxugH9a80M_XiQ&s" alt="Professora de Português">
                </div>
                <div class="professor-nome"><strong>Nome:</strong> Ana Souza</div>
                <div class="professor-materia"><strong>Matéria:</strong> Português</div>
                <div class="professor-destaque"><strong>Destaque:</strong> Doutora em Linguística e Literatura Brasileira.</div>
            </div>

            <div class="professor-perfil">
                <div class="professor-imagem">
                    <img src="https://i.ytimg.com/vi/g66RQXUypB0/mqdefault.jpg" alt="Professor de História">
                </div>
                <div class="professor-nome"><strong>Nome:</strong> José Silva</div>
                <div class="professor-materia"><strong>Matéria:</strong> História</div>
                <div class="professor-destaque"><strong>Destaque:</strong> Especialista em História Contemporânea.</div>
            </div>

            <div class="professor-perfil">
                <div class="professor-imagem">
                    <img src="https://img.freepik.com/vetores-gratis/professor-explicando-placas-tectonicas_1308-124848.jpg" alt="Professora de Geografia">
                </div>
                <div class="professor-nome"><strong>Nome:</strong> Mariana Castro</div>
                <div class="professor-materia"><strong>Matéria:</strong> Geografia</div>
                <div class="professor-destaque"><strong>Destaque:</strong> Experiência em Geografia Política e Ambiental.</div>
            </div>
        </div>

        <h2>Matérias Ensino Médio</h2>
        <div class="professores">
            <div class="professor-perfil">
                <div class="professor-imagem">
                    <img src="https://png.pngtree.com/png-clipart/20190604/original/pngtree-vector-biology-teacher-png-image_1606261.jpg" alt="Professora de Biologia">
                </div>
                <div class="professor-nome"><strong>Nome:</strong> Bruna Pereira</div>
                <div class="professor-materia"><strong>Matéria:</strong> Biologia</div>
                <div class="professor-destaque"><strong>Destaque:</strong> Especialista em Biologia Molecular.</div>
            </div>

            <div class="professor-perfil">
                <div class="professor-imagem">
                    <img src="https://e7.pngegg.com/pngimages/552/881/png-clipart-teacher-illustration-chemistry-chemical-formula-teacher-science-cartoon-chemistry-teacher-cartoon-character-public-relations.png" alt="Professor de Química">
                </div>
                <div class="professor-nome"><strong>Nome:</strong> Fernando Lima</div>
                <div class="professor-materia"><strong>Matéria:</strong> Química</div>
                <div class="professor-destaque"><strong>Destaque:</strong> Doutor em Química Orgânica.</div>
            </div>

            <div class="professor-perfil">
                <div class="professor-imagem">
                    <img src="https://w7.pngwing.com/pngs/843/665/png-transparent-physics-professor-cartoon.png" alt="Professor de Física">
                </div>
                <div class="professor-nome"><strong>Nome:</strong> Paulo Oliveira</div>
                <div class="professor-materia"><strong>Matéria:</strong> Física</div>
                <div class="professor-destaque"><strong>Destaque:</strong> Mestre em Física Quântica.</div>
            </div>
        </div>

        <h2>Matérias Línguas Estrangeiras</h2>
        <div class="professores">
            <div class="professor-perfil">
                <div class="professor-imagem">
                    <img src="https://img.freepik.com/vetores-gratis/ilustracao-plana-do-dia-do-professor-em-espanhol_23-2149339962.jpg" alt="Professor de Espanhol">
                </div>
                <div class="professor-nome"><strong>Nome:</strong> Ricardo Rodrigues</div>
                <div class="professor-materia"><strong>Matéria:</strong> Espanhol</div>
                <div class="professor-destaque"><strong>Destaque:</strong> Especialista em Linguística Hispânica.</div>
            </div>

            <div class="professor-perfil">
                <div class="professor-imagem">
                    <img src="https://png.pngtree.com/png-clipart/20210128/ourmid/pngtree-cartoon-foreign-teacher-english-teacher-png-image_2815328.jpg" alt="Professor de Inglês">
                </div>
                <div class="professor-nome"><strong>Nome:</strong> Sofia Lopes</div>
                <div class="professor-materia"><strong>Matéria:</strong> Inglês</div>
                <div class="professor-destaque"><strong>Destaque:</strong> Fluente em Inglês e Literatura Britânica.</div>
            </div>
        </div>
    </div>
</div>

<a class="usos" href="/TermosdeUso">Termos de Uso</a>
  <footer>
      <div class="container">
          <p>&copy; 2024 Conhecimento Premium. Todos os direitos reservados.</p>
      </div>
  </footer>
</div>

<script src="{{ asset('js/professores.js') }}"></script>

</body>
</html>

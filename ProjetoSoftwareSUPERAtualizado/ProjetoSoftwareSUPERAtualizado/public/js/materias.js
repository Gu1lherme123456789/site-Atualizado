function toggleMode() {
    const body = document.body;
    const currentMode = body.classList.contains('dark-mode') ? 'dark' : 'light';

    if (currentMode === 'dark') {
      body.classList.remove('dark-mode');
    } else {
      body.classList.add('dark-mode');
    }
  }

function search_animal() {
    let input = document.getElementById('searchbar').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('materias');

    for (i = 0; i < x.length; i++) {
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="list-item";
        }
    }
}

function favoritar(button) {
    const materia = button.closest('li').querySelector('.materias').textContent.trim();
    const heartIcon = button.querySelector('.coracao_icon');

    // Preencher o coração e mudar a cor para verde
    heartIcon.textContent = '♥';
    heartIcon.classList.add('favorited');
    heartIcon.classList.remove('not-favorited');

    // Obter as matérias favoritas existentes do localStorage
    let favoritas = JSON.parse(localStorage.getItem('materiasFavoritas')) || [];

    // Adicionar a nova matéria à lista de favoritas, se ainda não estiver na lista
    if (!favoritas.includes(materia)) {
        favoritas.push(materia);
    }

    // Armazenar a lista atualizada no localStorage
    localStorage.setItem('materiasFavoritas', JSON.stringify(favoritas));

    alert(`Matéria "${materia}" adicionada aos favoritos!`);
}


function desfavoritar(button) {
    const materia = button.closest('li').querySelector('.materias').textContent.trim();
    const heartIcon = button.querySelector('.coracao_icon');

    // Remove a matéria do localStorage
    let favoritas = JSON.parse(localStorage.getItem('materiasFavoritas')) || [];
    favoritas = favoritas.filter(item => item !== materia);
    localStorage.setItem('materiasFavoritas', JSON.stringify(favoritas));

    // Preencher o coração e mudar a cor para verde
    heartIcon.textContent = '🤍';
    heartIcon.classList.add('not-favorited');
    heartIcon.classList.remove('favorited');

    alert(`Matéria "${materia}" removida dos favoritos!`);
}



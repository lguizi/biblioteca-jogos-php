// assets/js/main.js

const container   = document.getElementById('main-container');
const widthSelect = document.getElementById('width-select');
const STORAGE_KEY = 'biblioteca_container_width';

function applyWidth(value) {
    if(container && widthSelect) {
        container.style.maxWidth = value + 'px';
        widthSelect.value = value;
    }
}

if(widthSelect) {
    applyWidth(localStorage.getItem(STORAGE_KEY) || '900');
    widthSelect.addEventListener('change', function () {
        localStorage.setItem(STORAGE_KEY, this.value);
        applyWidth(this.value);
    });
}

const swalSteam = Swal.mixin({
    background: '#171a21',
    color: '#c7d5e0',
    confirmButtonColor: '#1a44c2',
    cancelButtonColor: '#3b3e48',
});

function confirmarDelete(event, elemento) {
    event.preventDefault();
    const id = elemento.getAttribute('data-id');
    const nomeJogo = elemento.getAttribute('data-nome');

    swalSteam.fire({
        title: 'Remover jogo?',
        html: `Tem certeza que deseja remover <strong style="color:#fff">${nomeJogo}</strong>?
               <br><small style="color:#8f98a0">Essa ação não poderá ser desfeita.</small>`,
        imageUrl: 'img/icone-excluir.svg',
        imageWidth: 64, imageHeight: 64, imageAlt: 'Ícone de exclusão',
        showCancelButton: true,
        confirmButtonText: 'Sim, remover',
        cancelButtonText: 'Cancelar',
        confirmButtonColor: '#a02020',
    }).then(r => { 
        if (r.isConfirmed) window.location = '?deletar=' + id; 
    });
}

function confirmarPopular(event) {
    event.preventDefault();
    swalSteam.fire({
        title: 'Carregar Jogos de Exemplo?',
        html: `Serão adicionados <strong style="color:#fff">23 títulos</strong> populares à sua biblioteca.
               <br><small style="color:#8f98a0">Jogos já existentes não serão substituídos.</small>`,
        imageUrl: 'img/icone-sucesso.svg',
        imageWidth: 64, imageHeight: 64, imageAlt: 'Ícone de confirmação',
        showCancelButton: true,
        confirmButtonText: 'Sim, carregar',
        cancelButtonText: 'Cancelar',
        confirmButtonColor: '#1e6b3c',
    }).then(r => { if (r.isConfirmed) window.location = '?popular=1'; });
}

function confirmarLimpar(event) {
    event.preventDefault();
    swalSteam.fire({
        title: 'Limpar a Biblioteca?',
        html: `Todos os jogos serão removidos permanentemente.
               <br><small style="color:#8f98a0">Essa ação não poderá ser desfeita.</small>`,
        imageUrl: 'img/icone-aviso.svg',
        imageWidth: 64, imageHeight: 64, imageAlt: 'Ícone de aviso',
        showCancelButton: true,
        confirmButtonText: 'Sim, limpar tudo',
        cancelButtonText: 'Cancelar',
        confirmButtonColor: '#a02020',
    }).then(r => { if (r.isConfirmed) window.location = '?limpar=1'; });
}

document.addEventListener('DOMContentLoaded', () => {
    setTimeout(() => {
        document.querySelectorAll('.alert .btn-close').forEach(b => b.click());
    }, 5000);
});
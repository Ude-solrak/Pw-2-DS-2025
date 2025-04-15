function abrirModal1(){
    const modal = document.getElementById('janela-modal-formulario')
    modal.classList.add('abrir')    

    modal.addEventListener("click",(e) => {
        if(e.target.id == 'fechar' || e.target.id == 'janela-modal-formulario'){
            modal.classList.remove('abrir')
        }
    })
}
function abrirModal2(){
    const modal = document.getElementById('janela-modal-lista')
    modal.classList.add('abrir')

    modal.addEventListener("click",(e) => {
        if(e.target.id == 'fechar' || e.target.id == 'janela-modal-lista'){
            modal.classList.remove('abrir')
        }
    })
}

// Função para ajustar a altura do modal conforme o conteúdo
function ajustarAlturaModal() {
  const modal = document.getElementById('meuModal');
  const campoTexto = document.getElementById('campoTexto');
  
  // Ajusta a altura do modal com base na altura do conteúdo
  modal.style.height = `${campoTexto.scrollHeight + 60}px`;
}

// Abre o modal e ajusta sua altura
document.getElementById('abrirModal').addEventListener('click', () => {
  const modal = document.getElementById('meuModal');
  modal.showModal();
  ajustarAlturaModal();
});

// Fecha o modal
document.getElementById('cancelar').addEventListener('click', () => {
  document.getElementById('meuModal').close();
});

// Ajusta a altura do modal sempre que o conteúdo do campo de texto mudar
document.getElementById('campoTexto').addEventListener('input', ajustarAlturaModal);

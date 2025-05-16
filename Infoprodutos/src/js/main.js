document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('form-produto');
    const lista = document.getElementById('lista-produtos');
    const mensagem = document.getElementById('mensagem-sucesso');
  
    const produtos = JSON.parse(localStorage.getItem('produtos')) || [];
  
    function atualizarLista() {
      lista.innerHTML = '';
      produtos.forEach((produto, index) => {
        const li = document.createElement('li');
        li.textContent = `${produto.nome} - €${produto.preco}`;
        lista.appendChild(li);
      });
    }
  
    form.addEventListener('submit', (e) => {
      e.preventDefault();
  
      const novoProduto = {
        nome: form.nome.value,
        preco: form.preco.value,
        descricao: form.descricao.value,
      };
  
      produtos.push(novoProduto);
      localStorage.setItem('produtos', JSON.stringify(produtos));
      atualizarLista();
  
      mensagem.style.display = 'block';
      form.reset();
    });
  
    atualizarLista();
  });
  
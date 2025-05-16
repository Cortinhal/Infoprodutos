<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Finalizar Compra</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <header>
    <h1>Checkout</h1>
    <nav>
      <a href="index.html">Início</a>
      <a href="produtos.html">Produtos</a>
    </nav>
  </header>

  <main>
    <section>
      <h2>Resumo do Produto</h2>
      <div id="resumo-produto">
        <!-- Preenchido dinamicamente -->
      </div>
    </section>

    <section>
      <h2>Dados de Pagamento</h2>
      <form id="form-checkout">
        <input type="text" name="nome" placeholder="Nome completo" required />
        <input type="email" name="email" placeholder="Email" required />
        <button type="submit">Finalizar Compra</button>
      </form>
      <p id="mensagem" style="color: green; display: none;">Compra simulada com sucesso!</p>
    </section>
  </main>

  <script>
    // Simula passagem de dados do produto via query string
    const params = new URLSearchParams(window.location.search);
    const nome = params.get('nome');
    const preco = params.get('preco');
    const descricao = params.get('descricao');

    const resumo = document.getElementById('resumo-produto');
    if (nome && preco && descricao) {
      resumo.innerHTML = `
        <h3>${nome}</h3>
        <p><strong>Preço:</strong> €${preco}</p>
        <p>${descricao}</p>
      `;
    } else {
      resumo.innerHTML = `<p>Nenhum produto selecionado.</p>`;
    }

    // Simula submissão do formulário
    const form = document.getElementById('form-checkout');
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      document.getElementById('mensagem').style.display = 'block';
    });
  </script>
</body>
</html>

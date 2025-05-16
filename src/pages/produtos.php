<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Produtos Disponíveis</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <header>
    <h1>Infoprodutos Disponíveis</h1>
    <nav>
      <a href="index.php">Início</a>
      <a href="vendedor.php">Área do Vendedor</a>
    </nav>
  </header>

  <main>
    <ul id="lista-produtos"></ul>
  </main>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const lista = document.getElementById('lista-produtos');
      const produtos = JSON.parse(localStorage.getItem('produtos')) || [];

      if (produtos.length === 0) {
        lista.innerHTML = '<li>Nenhum produto disponível no momento.</li>';
      } else {
        produtos.forEach((produto, index) => {
          const li = document.createElement('li');
          li.innerHTML = `
            <h3>${produto.nome}</h3>
            <p><strong>Preço:</strong> €${produto.preco}</p>
            <p>${produto.descricao}</p>
            <button onclick="alert('Em breve: processo de compra')">Comprar</button>
          `;
          lista.appendChild(li);
        });
      }
    });
  </script>
</body>
</html>

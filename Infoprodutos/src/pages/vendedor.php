<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Área do Vendedor</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <header>
    <h1>Área do Vendedor</h1>
    <nav>
      <a href="index.php">Início</a>
      <a href="produtos.php">Ver Produtos</a>
    </nav>
  </header>

  <main>
    <section>
      <h2>Adicionar Produto</h2>
      <form id="form-produto">
        <input type="text" name="nome" placeholder="Nome do Produto" required />
        <input type="text" name="preco" placeholder="Preço (€)" required />
        <textarea name="descricao" placeholder="Descrição do Produto" required></textarea>
        <button type="submit">Guardar Produto</button>
      </form>
      <p id="mensagem-sucesso" style="color: green; display: none;">Produto adicionado com sucesso!</p>
    </section>

    <section>
      <h2>Produtos já criados</h2>
      <ul id="lista-produtos"></ul>
    </section>
  </main>

  <script src="../js/main.js"></script>
</body>
</html>

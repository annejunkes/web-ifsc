<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>Novo produto</title></head>
<body>
  <h1>Novo produto</h1>

  <form method="post" action="salvar.php">
    <label>Nome <input name="nome" required></label><br>
    <label>Preço <input name="preco" type="number" step="0.01" required></label><br>
    <label>Estoque <input name="estoque" type="number" required></label><br>
    <button type="submit">Cadastrar</button>
  </form>
</body>
</html>
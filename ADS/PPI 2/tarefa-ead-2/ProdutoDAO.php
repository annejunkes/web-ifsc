<?php
// classe de acesso a dados
require_once "Produto.php";
class ProdutoDAO {
    public function __construct(private PDO $pdo) {
        $this->pdo = $pdo;
    }
    
    public function inserir(Produto $p): int {
        $sql = "INSERT INTO produto (nome, preco, estoque) VALUES (?,?,?)";
        $st = $this->pdo->prepare($sql);
        $st->execute([$p->nome, $p->preco, $p->estoque]);
        return (int)$this->pdo->lastInsertId();
    }

    public function listarTodos(): array {
        $st = $this->pdo->query("SELECT * FROM produto ORDER BY NOME");
        $lista = [];
        foreach ($st->fetchAll(PDO::FETCH_ASSOC) as $l) {
            $lista[] = new Produto($l['nome'],
                (float)$l['preco'],
                (int)$l['estoque'],
                (int)$l['id']);
        }
        return $lista;
    }

    public function buscarPorNome(string $termo): Produto {
        $st = $this->pdo->prepare("SELECT * FROM produto WHERE nome LIKE ?");
        $st->execute(["%$termo%"]);
        $dados = $st->fetch(PDO::FETCH_ASSOC);
        $produto = new Produto($dados['nome'],
                (float)$dados['preco'],
                (int)$dados['estoque'],
                (int)$dados['id']);
        return $produto;
    }

    public function buscarPorId(string $id): ?Produto {
        $st = $this->pdo->prepare("SELECT * FROM produto WHERE id = ?");
        $st->execute(["$id"]);
        $dados = $st->fetch(PDO::FETCH_ASSOC);
        $produto = new Produto($dados['nome'],
                (float)$dados['preco'],
                (int)$dados['estoque'],
                (int)$dados['id']);
        return $produto;
    } 

    public function atualizar($id, $nome, $preco, $estoque) {
        $sql = "UPDATE produto SET nome=?, preco=?, estoque=? WHERE id=?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$nome, $preco, $estoque, $id]);
    }

    public function excluir($id) {
        $sql = "DELETE FROM produto WHERE id=?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }



    function validar(array $dados) : array {
        $erros = [];

        $nome = trim($dados['nome'] ?? '');
        if ($nome === '')           $erros['nome' ] = '0 nome e obrigatorio.';
        elseif (mb_strlen($nome) < 3) $erros['nome'] = 'Minimo de 3 letras.';

        $email = trim($dados['email'] ?? '');
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            $erros['email'] = 'E-mail inválido.';

        $preco = str_replace(',','.', $dados['preco'] ?? '');
        
        if (!is_numeric($preco))        $erros['preco'] = 'Preço deve ser numérico.';
        elseif ((float)$preco <= 0)    $erros['preco'] = 'Preco deve ser maior que zero.';

        return $erros;
        
        }

    
}
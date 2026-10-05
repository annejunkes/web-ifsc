<?php
    class Produto {

    public string $nome;
    public float $preco;
    public int $estoque;
    public ?int $id;

    public function __construct(
        string $nome,  
         float $preco,
         int $estoque,
         ?int $id = null //? = siginfica que pode ser nulo
     ) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
        $this->id = $id;
     }
    
    public function valorEmEstoque(): float {
        return $this->preco * $this->estoque;
    }

    public function estoqueBaixo(): bool {
        return $this->estoque < 5;
    }
}
?>

<?php

class Servico {
    public $nome;
    public $descricao;
    public $mecanico;
    public $tempo;
    public $valor;

    public function calcularTotal($pecas, $servicos) {
        $total = $pecas + $servicos;
        return $total;
    }
    
}
?>

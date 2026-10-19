<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>- Oficina Mecânica -</title>
    <link rel="stylesheet" href="estilo.css">

</head>
<body>
    
<?php
require_once 'Cliente.php';
require_once 'Carro.php';
require_once 'Produto.php';
require_once 'Servico.php';

$cliente = new Cliente();
$carro = new Carro();
$produto = new Produto();
$servico = new Servico();

// Cliente
$cliente->nome = "Manuela de melo";
$cliente->cpf = "123.456.789-00";
$cliente->telefone = "(18) 99999-1111";
$cliente->email = "manuela2santos@gmail.com";
$cliente->endereco = "Rua Avenida São Paulo";
$cliente->numero = 363;
$cliente->cidade = "Paraguacu Paulista";
$cliente->cep = "19700-000";
$cliente->idade = 35;
$cliente->sexo = "Feminino";

// Carro
$carro->marca = "Chevrolet";
$carro->modelo = "Onix";
$carro->ano = 2022;
$carro->cor = "Prata";
$carro->placa = "ABC-1234";

// Peca
$produto->nome = "Oleo de motor";
$produto->marca = "Mobil";
$produto->codigo = "P001";
$produto->tipo = "Lubrificante";
$produto->quantidade = 2;
$produto->valor = 45;
$produto->fornecedor = "Auto Pecas";
$produto->fabricante = "Mobil";
$produto->garantia = "90 dias";
$produto->descricao = "Oleo para motor";

// Servico
$servico->nome = "Troca de oleo";
$servico->descricao = "Troca de oleo do motor";
$servico->mecanico = "Carlos";
$servico->tempo = "30 minutos";
$servico->valor = 80;

// Valores
$valorPecas = $produto->quantidade * $produto->valor;
$valorServicos = $servico->valor;

$total = $servico->calcularTotal(
    $valorPecas,
    $valorServicos
);
?>

<header>
    <img src="img/oficina.png" alt="Oficina Mecânica">
</header>

<?php
echo "<main>";

echo "<section>";
echo "<h2>Cliente</h2>";
echo "<p>Nome: " . $cliente->nome . "</p>";
echo "<p>CPF: " . $cliente->cpf . "</p>";
echo "<p>Telefone: " . $cliente->telefone . "</p>";
echo "<p>E-mail: " . $cliente->email . "</p>";
echo "<p>Endereço: " . $cliente->endereco . ", " . $cliente->numero . "</p>";
echo "<p>Cidade: " . $cliente->cidade . "</p>";
echo "</section>";

echo "<section>";
echo "<h2>Carro</h2>";
echo "<p>Marca: " . $carro->marca . "</p>";
echo "<p>Modelo: " . $carro->modelo . "</p>";
echo "<p>Ano: " . $carro->ano . "</p>";
echo "<p>Cor: " . $carro->cor . "</p>";
echo "<p>Placa: " . $carro->placa . "</p>";
echo "</section>";

echo "<section>";
echo "<h2>Peças Utilizadas</h2>";
echo "<p>Peça: " . $produto->nome . "</p>";
echo "<p>Marca: " . $produto->marca . "</p>";
echo "<p>Quantidade: " . $produto->quantidade . "</p>";
echo "<p>Valor unitário: R$ " . $produto->valor . "</p>";
echo "<p>Total das peças: R$ " . $valorPecas . "</p>";
echo "</section>";

echo "<section>";
echo "<h2>Serviço Realizado</h2>";
echo "<p>Serviço: " . $servico->nome . "</p>";
echo "<p>Descrição: " . $servico->descricao . "</p>";
echo "<p>Mecânico: " . $servico->mecanico . "</p>";
echo "<p>Tempo: " . $servico->tempo . "</p>";
echo "<p>Valor do serviço: R$ " . $servico->valor . "</p>";
echo "</section>";

echo "<section class='total'>";
echo "<h2>Valor Total</h2>";
echo "<p>Peças: R$ " . $valorPecas . "</p>";
echo "<p>Serviços: R$ " . $valorServicos . "</p>";
echo "<h3>Total: R$ " . $total . "</h3>";
echo "</section>";

echo "</main>";
?>

<footer>
    <p>Sistema de Oficina Mecânica</p>
</footer>

</body>
</html>

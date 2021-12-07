<?php
require_once('../Class/connect.php');
require_once('../Class/livro.php');

$editora = new Editora();
$dados = [
    'nome' => 'Saraiva',
    'endereco' => 'Praça da Sé, 423',
    'cidade' => 'São Paulo',
    'email' => 'saraiva@sac.com.br',
    'telefone' => '(11)5200-0650'
];

$dadosEditora = json_encode($dados);
$addEditora = $editora->insertEditora($dadosEditora);

echo "<h2>Listar Editoras:</h2>";
$listEditoras = $editora->listEditora();
echo $listEditoras;

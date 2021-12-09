<?php
require_once "views/header.php";
require_once "Class/connect.php";

$url = $_GET['livro'];
$sql = "SELECT * FROM livro WHERE id = '" . $url . "'";
$result = $connect->query($sql);
$user_data = mysqli_fetch_assoc($result)
?>

<div class="row desc">
    <h3 class="col-3 left">ID: </h3>
    <h3 class="col-9"><?php echo $user_data['id'] ?></h3>

    <h3 class="col-3 left">Título: </h3>
    <h3 class="col-9"><?php echo $user_data['titulo'] ?></h3>

    <h3 class="col-3 left">Páginas: </h3>
    <h3 class="col-9"><?php echo $user_data['totalPaginas'] ?></h3>

    <h3 class="col-3 left">Edição: </h3>
    <h3 class="col-9"><?php echo $user_data['edicao'] ?></h3>

    <h3 class="col-3 left">ISBN: </h3>
    <h3 class="col-9"><?php echo $user_data['isbn'] ?></h3></br>

    <h3 class="col-3 left">Ano: </h3>
    <h3 class="col-9"><?php echo $user_data['ano'] ?></h3></br>


    <?php
    $idEditora = $user_data['idEditora'];
    $idAutor = $user_data['idAutor'];

    $sql = "SELECT nome FROM autor WHERE id = '" . $idAutor . "'";
    $result = $connect->query($sql);
    $user_data = mysqli_fetch_assoc($result)
    ?>
    <h3 class="col-3 left">Autor: </h3>
    <h3 class="col-9"><?php echo $user_data['nome'] ?></h3>

    <?php
    $sql = "SELECT nome FROM editora WHERE id = '" . $idEditora . "'";
    $result = $connect->query($sql);
    $user_data = mysqli_fetch_assoc($result)
    ?>
    <h3 class="col-3 left">Editora: </h3>
    <h3 class="col-9"><?php echo $user_data['nome'] ?></h3>
</div>
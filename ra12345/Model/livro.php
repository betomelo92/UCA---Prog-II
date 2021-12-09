<?php
require_once "views/header.php";
require_once "Class/connect.php";

$url = $_GET['livro'];
$sql = "SELECT * FROM livro WHERE id = '" . $url . "'";
$result = $connect->query($sql);
$user_data = mysqli_fetch_assoc($result)
?>

<div class="row bookname">
    <h2><?php echo $user_data['titulo']; ?></h2>
</div>

<div class="row desc">
    <div class="col-4">
        <?php echo "<td><img class='imglivro' src='" . $user_data['fotoCapa'] . "'>"; ?>
    </div>
    <div class="col-8">
        <div class="lineinfo">
            <h3 class="col-3 left">ID: </h3>
            <h3 class="col-9"><?php echo $user_data['id'] ?></h3>
        </div>

        <div class="lineinfo">
            <h3 class="col-3 left">Título: </h3>
            <h3 class="col-9"><?php echo $user_data['titulo'] ?></h3>
        </div>

        <div class="lineinfo">
            <h3 class="col-3 left">Páginas: </h3>
            <h3 class="col-9"><?php echo $user_data['totalPaginas'] ?></h3>
        </div>

        <div class="lineinfo">
            <h3 class="col-3 left">Edição: </h3>
            <h3 class="col-9"><?php echo $user_data['edicao'] ?></h3>
        </div>

        <div class="lineinfo">
            <h3 class="col-3 left">ISBN: </h3>
            <h3 class="col-9"><?php echo $user_data['isbn'] ?></h3></br>
        </div>

        <div class="lineinfo">
            <h3 class="col-3 left">Ano: </h3>
            <h3 class="col-9"><?php echo $user_data['ano'] ?></h3></br>
        </div>


        <?php
        $idEditora = $user_data['idEditora'];
        $idAutor = $user_data['idAutor'];

        $sql = "SELECT nome FROM autor WHERE id = '" . $idAutor . "'";
        $result = $connect->query($sql);
        $user_data = mysqli_fetch_assoc($result)
        ?>
        <div class="lineinfo">
            <h3 class="col-3 left">Autor: </h3>
            <h3 class="col-9"><?php echo $user_data['nome'] ?></h3>
        </div>

        <?php
        $sql = "SELECT nome FROM editora WHERE id = '" . $idEditora . "'";
        $result = $connect->query($sql);
        $user_data = mysqli_fetch_assoc($result)
        ?>
        <div class="lineinfo">
            <h3 class="col-3 left">Editora: </h3>
            <h3 class="col-9"><?php echo $user_data['nome'] ?></h3>
        </div>
    </div>
</div>
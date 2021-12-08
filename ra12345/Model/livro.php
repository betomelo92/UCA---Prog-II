<?php
require_once "views/header.php";
require_once "Class/connect.php";

$url = $_GET['livro'];
$sql = "SELECT * FROM livro WHERE id = '" . $url . "'";
$result = $connect->query($sql);
$user_data = mysqli_fetch_assoc($result)
?>

<div class="row">
    <div>
        <h3 class="livrodesc">ID: </h3>
        <h3><?php echo $user_data['id'] ?></h3></br>

        <h3>Título: </h3>
        <h3><?php echo $user_data['titulo'] ?></h3></br>

        <h3>Páginas: </h3>
        <h3><?php echo $user_data['totalPaginas'] ?></h3></br>

        <h3>Edição: </h3>
        <h3><?php echo $user_data['edicao'] ?></h3></br>

        <h3>ISBN: </h3>
        <h3><?php echo $user_data['isbn'] ?></h3></br>

        <h3>Ano: </h3>
        <h3><?php echo $user_data['ano'] ?></h3></br>


        <?php
        $idEditora = $user_data['idEditora'];
        $idAutor = $user_data['idAutor'];

        $sql = "SELECT nome FROM autor WHERE id = '" . $idAutor . "'";
        $result = $connect->query($sql);
        $user_data = mysqli_fetch_assoc($result)
        ?>
        <h3>Autor: </h3>
        <h3><?php echo $user_data['nome'] ?></h3></br>

        <?php
        $sql = "SELECT nome FROM editora WHERE id = '" . $idEditora . "'";
        $result = $connect->query($sql);
        $user_data = mysqli_fetch_assoc($result)
        ?>
        <h3>Editora: </h3>
        <h3><?php echo $user_data['nome'] ?></h3></br>
        <!--        echo "<td>" . $user_data['id'] . "</td>";
                echo "<td><a href='?livro=" . $user_data['titulo'] . "'>" . $user_data['titulo'] . "</a></td>";
                echo "<td>" . $user_data['totalPaginas'] . "</td>";
                echo "<td>" . $user_data['edicao'] . "</td>";
                echo "<td>" . $user_data['isbn'] . "</td>";
                echo "<td>" . $user_data['ano'] . "</td>";
                echo "<td>" . $user_data['idEditora'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
        </table> -->
    </div>
</div>
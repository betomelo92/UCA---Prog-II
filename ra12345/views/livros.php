<div class="row">
    <h2>Livros</h2>
</div>

<div class="m-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titulo</th>
                <th scope="col">Total de Páginas</th>
                <th scope="col">Edição</th>
                <th scope="col">Isbn</th>
                <th scope="col">Ano</th>
                <th scope="col">idEditora</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($user_data = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $user_data['id'] . "</td>";
                echo "<td><a href='?livro=" . $user_data['id'] . "'>" . $user_data['titulo'] . "</a></td>";
                echo "<td>" . $user_data['totalPaginas'] . "</td>";
                echo "<td>" . $user_data['edicao'] . "</td>";
                echo "<td>" . $user_data['isbn'] . "</td>";
                echo "<td>" . $user_data['ano'] . "</td>";
                echo "<td>" . $user_data['idEditora'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
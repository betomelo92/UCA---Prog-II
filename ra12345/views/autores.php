<div class="m-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Formação</th>
                <th scope="col">Foto</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($user_data = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $user_data['id'] . "</td>";
                echo "<td><a href='?autor=" . $user_data['id'] . "'>" . $user_data['nome'] . "</a></td>";
                echo "<td>" . $user_data['email'] . "</td>";
                echo "<td>" . $user_data['formacao'] . "</td>";
                echo "<td>" . $user_data['foto'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
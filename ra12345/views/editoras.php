<div class="row">
    <h2>Editoras</h2>
</div>

<div class="m-5">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Cidade</th>
                <th>E-mail</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($user_data = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $user_data['id'] . "</td>";
                echo "<td><a href='?editora=" . $user_data['id'] . "'>" . $user_data['nome'] . "</a></td>";
                echo "<td>" . $user_data['endereco'] . "</td>";
                echo "<td>" . $user_data['cidade'] . "</td>";
                echo "<td>" . $user_data['email'] . "</td>";
                echo "<td>" . $user_data['telefone'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
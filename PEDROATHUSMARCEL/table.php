<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Mensagens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="margin: 50px;">
    <h1>Lista de Mensagens</h1>
    <br>
    
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mensagem_db";

    $connection = new mysqli($servername, $username, $password, $database);

    if ($connection->connect_error) {
        die("Conexão falhou: " . $connection->connect_error);
    }

   
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $deleteSql = "DELETE FROM mensagem WHERE id=$id";
        if ($connection->query($deleteSql) === TRUE) {
            
        } else {
            echo "<div class='alert alert-danger'>Erro : " . $connection->error . "</div>";
        }
    }

    $sql = "SELECT * FROM mensagem";
    $result = $connection->query($sql);

    if (!$result) {
        die("Consulta inválida: " . $connection->error);
    }
    ?>
    
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Mensagem</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row['id'] . "</td>
                    <td>" . $row['nome'] . "</td>
                    <td>" . $row['email'] . "</td>
                    <td>" . $row['telefone'] . "</td>
                    <td>" . $row['mensagem'] . "</td>
                    <td>
                        <br>
                        <a class='btn btn-danger btn-sm' href='table.php?id=" . $row['id'] . "'>Excluir</a>
                    </td>
                </tr>";
            }
            $connection->close();
            ?>
        </tbody>
    </table>
</body>
</html>

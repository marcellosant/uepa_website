<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mensagem_db";

$connection = new mysqli($servername, $username, $password, $database);

if ($connection->connect_error) {
    die("Conexão falhou: " . $connection->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (!isset($_GET["id"])) {
        header("location: table.php");
        exit;
    }

    $id = $_GET["id"];
    $sql = "DELETE FROM mensagem WHERE id=$id";

    if ($connection->query($sql) === TRUE) {
        header("location: table.php");
        exit;
    } else {
        echo "Erro ao deletar o registro: " . $connection->error;
    }
}

$connection->close();
?>

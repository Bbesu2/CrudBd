<?php
require_once "../config/db.php";

$db = new Database();
$conn = $db->getConnection();

switch ($_REQUEST['acao'] ?? '') {
    case 'adicionar':
        $sql = "INSERT INTO tcurso (nome, codigo) 
                VALUES (:nome, :codigo)";
        
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':nome'     => $_POST["nome"],
            ':codigo'   => $_POST["codigo"],
        ]);

        header("Location: ../view/index.php");
        exit;
}
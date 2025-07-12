<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $host = "localhost";
    $usuario = "root";
    $senha = "123456"; 
    $banco = "suporte_db";

    $conn = new mysqli($host, $usuario, $senha, $banco);

  
    if ($conn->connect_error) {
        die("❌ Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $numero = trim($_POST['numero']);
    $descricao = trim($_POST['descricao']);
    $prioridade = trim($_POST['prioridade']);

   
    $sql = "INSERT INTO chamados (nome, email, numero, descricao, prioridade) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sssss", $nome, $email, $numero, $descricao, $prioridade);

        if ($stmt->execute()) {
            echo "<h2 style='color: green;'>✅ Chamado enviado com sucesso!</h2>";
        
        } else {
            echo "<h2 style='color: red;'>❌ Erro ao enviar chamado: " . $stmt->error . "</h2>";
        }

        $stmt->close();
    } else {
        echo "<h2 style='color: red;'>❌ Erro na preparação da query: " . $conn->error . "</h2>";
    }

    $conn->close();
} else {
    echo "<h2 style='color: orange;'>⚠️ Acesso inválido. Envie o formulário corretamente.</h2>";
}
?>

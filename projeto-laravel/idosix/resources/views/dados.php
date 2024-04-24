<?php

    
    $conn = new mysqli('localhost', 'root', '', 'agendamentos');

    if (!$conn) {
        echo "Erro na conexão com o banco de dados";
    } else { echo"Conectado ao banco de dados!";
    }
	
    $nome = $_POST ["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $dataNascimento = $_POST ["dataNascimento"];
    $diaAgendamento = $_POST ["diaAgendamento"];
    $telefone = $_POST ["telefone"];
    $especialidade = $_POST ["especialidade"];
    $cpf = $_POST ["cpf"];
    $pesquisa = $_POST ["pesquisa"];
    $dizer = $_POST ["dizer"];






    $sql = "INSERT INTO agendamentos.agenda(nome, sobrenome, email, dataNascimento, diaAgendamento, telefone, especialidade, cpf, pesquisa, dizer)
            VALUES ('$nome','$sobrenome','$email','$dataNascimento','$diaAgendamento','$telefone',
            '$especialidade','$cpf','$pesquisa','$dizer')";

			
    $stmt = $conn->prepare($sql);

    if ($stmt->execute()) {
        
        header("Location: obrigado.php");
        exit;
    } else {
        echo "Erro ao inserir no banco de dados: " . $stmt->error;
    }
	
    $stmt->close();
    $conn->close();
?>
   

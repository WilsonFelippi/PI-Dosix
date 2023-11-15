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

$result = mysqli_query($conn, $sql);
			
    $stmt = $conn->prepare($sql);

    if ($stmt->execute()) {

		echo '
            <div style="max-width:320px; padding:50px; border:3px solid #007cff; color:#007cff; font-family: tahoma; background:#E9F8FB; text-align:center; font-weight:800; margin:180px auto;">
                <p style="font-size:1.3em;">' . $_POST["nome"] . ', Obrigado!</p> 
                <p style="font-size:1.1em;">Agendamento enviado com sucesso!</p>
            </div>';
        echo '<meta HTTP-EQUIV="Refresh" CONTENT="3;URL=index.php">';
    } else {
        echo "Erro ao inserir no banco de dados: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();

?>
   
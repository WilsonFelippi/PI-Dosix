<?php

if (isset($_POST["url"]) && $_POST["url"] == "0") {
    
    $conn = new mysqli('localhost', 'root', '', 'agendamentos');

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }
	
    $sql = "INSERT INTO registros 
            (nome, sobrenome, email, dataNascimento, diaAgendamento, telefone, especialidade, cpf, pesquisa, dizer)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
			
    $stmt = $conn->prepare($sql);

    $stmt->bind_param(
        "ssssssssss",
        $_POST["nome"],
        $_POST["sobrenome"],
        $_POST["email"],
        $_POST["dataNascimento"],
        $_POST["diaAgendamento"],
        $_POST["telefone"],
        $_POST["especialidade"],
        $_POST["cpf"],
        $_POST["pesquisa"],
        $_POST["dizer"]
    );
	
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
}
?>
   
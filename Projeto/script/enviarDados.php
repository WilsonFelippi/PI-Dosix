<?php

if(isset($_POST["url"]) && $_POST["url"] == "0"){


$para = "contato@idosix.com.br";

$nome = $_POST["nome"];
$email = $_POST["email"];
$assunto = "Agendamento";

//mensagem que será enviada
$data  =date("d/m/Y H:i");
$mensagem .="<br <strong>Nome: </strong>".$_POST["nome"];
$mensagem .="<br <strong>Sobrenome: </strong>".$_POST["sobrenome"];
$mensagem .="<br <strong>E-mail: </strong>".$_POST["e-mail"];
$mensagem .="<br <strong>Data de Nascimento: </strong>".$_POST["dataNascimento"];
$mensagem .="<br <strong>Dia do Agendamento: </strong>".$_POST["diaAgendamento"];
$mensagem .="<br <strong>Telefone: </strong>".$_POST["telefone"];
$mensagem .="<br <strong>Especialidade: </strong>".$_POST["especialidade"];
$mensagem .="<br <strong>CPF: </strong>".$_POST["cpf"];
$mensagem .="<br <strong>Já utilizou nossos serviços? </strong>".$_POST["pesquisa"];
$mensagem .="<br <strong>Você quer dizer algo? </strong>".$_POST["dizer"];

$headers =  "Content-Type:text/html; charset=UTF-8\n";
    $headers .= "From:  Agendamento registrado! <agendamento@idosix.com.br>\n"; 
    $headers .= "X-Sender:  <agendamento@idosix.com.br.com.br>\n"; 
    $headers .= "X-Mailer: PHP  v".phpversion()."\n";
    $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
    $headers .= "Return-Path:  <contato@site.com.br.com.br>\n"; 
    $headers .= "Reply-To: ".$email."\n";
    $headers .= "MIME-Version: 1.0\n";
    mail($para, $assunto, $mensagem, $headers);  
    echo '
            <div style="max-width:320px; padding:50px; border:3px solid #007cff; color:#007cff; font-family: tahoma; background:#E9F8FB; text-align:center; font-weight:800; margin:180px auto;">
           
              <p style="font-size:1.3em;">'.$nome.', obrigado!</p> 
              <p style="font-size:1.1em;">Sua mensagem enviada com sucesso !</p>
            
            </div>
          ';
    echo    '<meta HTTP-EQUIV="Refresh" CONTENT="3;URL=index.html">';
    exit; 
  }
?>



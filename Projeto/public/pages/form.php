<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
</head>
<body>
    <form class="form" action="enviarDados.php" method="post">
    
        <div class="column">

            <div class="input-box">
                    <label>Nome</label>
                <input type="text" name="nome" placeholder="Digite seu nome" required="">
            </div>

            <div class="input-box">
                    <label>Sobrenome</label>
                 <input type="text" name="sobrenome" placeholder="Digite seu sobrenome" required="">
            </div>

            <div class="input-box">
                    <label>E-mail</label>
                <input type="text" name="email" placeholder="Digite seu e-mail" required="">
            </div>

        </div>
        <div class="column">

            <div class="input-box">
                    <label>Data de Nascimento</label>
                <input type="text" name="dataNascimento" placeholder="Digite seu nascimento" required="">
            </div>

            <div class="input-box">
                    <label>Dia do Agendamento</label>
                 <input type="text" name="diaAgendamento" placeholder="Digite o dia do agendamento" required="">
            </div>
                
            <div class="input-box">
                    <label>Telefone</label>
                <input type="text" name="telefone" placeholder="Digite seu telefone" required="">
            </div>
        </div>

        <div class="column">

            <div class="input-box">
                    <label>Digite a especialidade</label>
                <input type="text" name="especialidade" placeholder="Digite a especialidade" required="">
            </div>

            <div class="input-box">
                    <label>Digite seu CPF</label>
                 <input type="text" name="cpf" placeholder="Digite o seu CPF" required="">
            </div>
        </div>

        <div class="column">

            <div class="input-box">
                <label>Já utilizou nossos serviços?</label>
            <input type="text" name="pesquisa" placeholder="Sim/Não" required="">
            </div>

            <div class="input-box">
                <label>Você quer dizer algo?</label>
                <input type="text" name="dizer" placeholder="Deixe uma mensagem!" required="">
            </div>
        </div>

       
</body>
</html>
<?php
require_once 'header.php'
?>

<main class="container-fluid">
    <div class="row justify-content-around" class="bem-vindo">
        <div class="col-5">
            <h2 class="content-txt"> Agendamento</h2>
        </div>
        <img class="content-txt-img" src="./assets/images/curved-lines.svg">
    </div>
    <div class="row justify-content-around">
        <div class="col-7">
            <p class="conteudo">Mais de 100 mil especialistas de saúde estão prontos para te ajudar para cuidar do teu velho!</p>
        </div>
    </div>
</main>
<form class="form" action="dados.php" method="POST">

    <div class="form-campos">
        <div class="col-3">
            <div class="row">
                <input class="btn_form" type="text" name="nome" placeholder="Digite seu nome" required="">
            </div>
        </div>
        <div class="col-3">
            <div class="row">
                <input class="btn_form" type="text" name="sobrenome" placeholder="Digite seu sobrenome" required="">
            </div>
        </div>
        <div class="col-3">
            <div class="row">
                <input class="btn_form" type="text" name="email" placeholder="Digite seu e-mail" required="">
            </div>
        </div>
    </div>
    <div class="form-campos">
        <div class="col-3">
            <div class="row">
                <input class="btn_form" type="text" name="dataNascimento" placeholder="Digite seu nascimento" required="">
            </div>
        </div>
        <div class="col-3">
            <div class="row">
                <input class="btn_form" type="text" name="diaAgendamento" placeholder="Digite o dia do agendamento" required="">
            </div>
        </div>
        <div class="col-3">
            <div class="row">
                <input class="btn_form" type="text" name="telefone" placeholder="Digite seu telefone" required="">
            </div>
        </div>
    </div>
    <div class="form-campos">
        <div class="col-4">
            <div class="row">
                <input class="btn_form" type="text" name="especialidade" placeholder="Digite a especialidade que você necessita" required="">
            </div>
        </div>
        <div class="col-4">
            <div class="row">
                <input class="btn_form" type="text" name="cpf" placeholder="Digite o seu CPF" required="">
            </div>
        </div>
    </div>
    <div class="form-campos">
        <div class="col-4">
            <div class="row">
                <input class="btn_form" type="text" name="pesquisa" placeholder="Já utilizou nossos serviços?" required="">
            </div>
        </div>
        <div class="col-4">
            <div class="row">
                <input class="btn_form" type="text" name="dizer" placeholder="Você quer dizer algo?" required="">
            </div>
        </div>
    </div>
    <div class="button">
        <button class="col-3 btn-send" type="submit"> Enviar </button>
    </div>
</form>
<?php
require_once 'footer.php'
?>
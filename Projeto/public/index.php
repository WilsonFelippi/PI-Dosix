<?php
require_once 'header.php'
?>
<main class="container-fluid">
  <div class="row justify-content-around" class="bem-vindo">
    <div class="col-6">
      <h2 class="content-txt"> Bem vindo!</h2>
    </div>
    <img class="content-txt-img" src="./assets/images/curved-lines.svg">
  </div>
  <div class="row justify-content-around">
    <div class="col-10">
      <p class="conteudo_home">Na !dosix, acreditamos que a idade é uma viagem incrível, e estamos aqui para torná-la espetacular!
      <br>Nossa plataforma ajuda a conectar especialistas em cuidados de idosos com quem precisa de cuidado.</p>
      <p class="conteudo_home">Realizamos serviços de integração de diversos profissionais em cuidados de idosos que vão desde cuidados personalizados até sessões de fisioterapia e consultas médicas em casa. Venha fazer parte da nossa família e descubra como transformamos o envelhecimento em uma aventura emocionante !</p>
    </div>
  </div>
</main>
<section class="container-fluid">
  <div class="row justify-content-around align-items-center">
    <div class="col-3">
      <div class="row">
        <span class="btn_alt"><a href="./servicos.php">Encontre profissionais</a></span>
        <p class="txt_btn_alt">Busque por especialistas de saúde em sua região. Filtre por planos de saúde, tratamentos ou disponibilidade.</p>
      </div>
    </div>
    <div class="col-2">
      <img src="./assets/images/heart.png" id="heart">
    </div>
    <div class="col-3">
      <div class="row">
        <span class="btn_alt"><a href="./agendamento.php">Marque consultas</a></span>
        <p class="txt_btn_alt">Escolha o profissional, dia e horário que desejar, agendando sua consulta em até dois minutos.</p>
      </div>
    </div>
  </div>
</section>
<?php
require_once 'footer.php'
?>

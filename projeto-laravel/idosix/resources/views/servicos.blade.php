@extends('layout.layout')
@section('content')
<main class="container-fluid">
    <div class="row justify-content-around" class="bem-vindo">
        <div class="col-6">
            <h2 class="content-txt"> Nossos serviços</h2>
        </div>
        <img class="content-txt-img" src="./assets/images/curved-lines.svg">
    </div>
    <div class="row justify-content-around">
        <div class="col-8">
            <p class="conteudo">Além do cuidado direto, oferecemos uma variedade de serviços médicos, como fisioterapia, consultas médicas domiciliares e muito mais. Nós cuidamos de todos os aspectos da saúde e do conforto dos nossos idosos.</p>
        </div>
    </div>
</main>
<section class="container-fluid">
    <div class="row justify-content-around align-items-center">

        <div class="col-3">
            <div class="row">
                <img class="card-img-top profissionais-img" src="./assets/images/fisioterapeuta.png" alt="fisioterapeuta">
                <div class="card-body">
                    <h2>Fisioterapeuta</h2>
                    <p class="card-text conteudo">Nossos fisioterapeutas são especializados em melhorar a qualidade de vida dos idosos. Com exercícios e técnicas personalizadas, eles promovem mobilidade, força e bem-estar.</p>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="row">
                <img class="profissionais-img" src="./assets/images/cuidador.jpg" alt="fisioterapeuta">
                <div class="card-body">
                    <h2>Cuidador</h2>
                    <p class="conteudo">Nossos cuidadores são dedicados a oferecer cuidados personalizados e atenção cuidadosa para a terceira idade. Sua empatia e compromisso garantem um tratamento especializado, proporcionando apoio essencial.</p>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="row">
                <img class="profissionais-img" src="./assets/images/geriatra.png" alt="fisioterapeuta">
                <div class="card-body">
                    <h2>Geriatra</h2>
                    <p class="conteudo">Nossos médicos trazem a consulta até a casa do paciente. Com experiência e compreensão das necessidades dos idosos, eles oferecem cuidados médicos de qualidade, garantindo conforto e conveniência.</p>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
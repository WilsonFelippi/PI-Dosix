<header>
    <div class="row" id="header">
      <div class="col-lg-2">
        <img id="logo_img" src="{{ asset('assets/images/logo.png') }}" alt="description of myimage">
        <p id="logo_texto">!Dosix</p>
      </div>
      <div class="col-lg-2">
        <div><span class="btn_menu "><a href="{{ route('dashboard.admin') }}">Agendamentos</a></span></div>
      </div>
      <div class="col-lg-2">
        <div><span class="btn_menu "><a href="{{ route('dashboard.admin') }}">Nova Especialidade</a></span></div>
      </div>
      <div class="col-lg-2">
        <div><span class="btn_menu "><a href="{{ route('dashboard.admin') }}">Novo Médico</a></span></div>
      </div>
      <div class="col-lg-2">
        <div><span class="btn_menu "> <a href="{{ route('logout') }}"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
           {{ __('Sair') }}
       </a></span></div>
       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
       </form>
      </div>
    </div>
  </header>
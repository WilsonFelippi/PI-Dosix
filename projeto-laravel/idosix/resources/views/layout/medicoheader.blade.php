
<header class="container-fluid">
    <div class="row" id="header">
      <div class="col-2">
        <img id="logo_img" src={{asset('assets/images/logo.png')}}>
        <p id="logo_texto">!Dosix</p>
      </div>
      <div class="col-2">
        <div><span class="btn_menu "><a href="{{ route('dashboard.medico') }}">Agendamentos</a></span></div>
      </div>
      <div class="col-2">
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

  


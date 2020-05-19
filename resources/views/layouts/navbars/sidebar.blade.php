<div class="sidebar" data-color="blue">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
  <div class="logo">
    <a href="{{ url('/home')}}" class="simple-text logo-mini">
      {{ __('ER') }}
    </a>
    <a href=" {{ url('/home')}} " class="simple-text logo-normal">
      {{ __('Edwin Rojas') }}
    </a>
  </div>
  <div class="sidebar-wrapper" id="sidebar-wrapper">
    <ul class="nav">
      <li class="@if ($activePage == 'home') active @endif">
        <a href="{{ route('home') }}">
          <i class="now-ui-icons design_bullet-list-67"></i>
          <p> {{ __("Inicio") }} </p>
        </a>
      </li>
      <li>
        <a data-toggle="collapse" href="#laravelExamples">
            <i class="fab fa-laravel"></i>
          <p>
            {{ __("Gestion de Votos") }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExamples">
          <ul class="nav">
            <li class="@if ($activePage == 'candidatos') active @endif">
              <a href="{{ route('candidato.index') }}">
                <i class="now-ui-icons design_bullet-list-67"></i>
                <p> {{ __("Candidatos") }} </p>
              </a>
            </li>
            <li class="@if ($activePage == 'votacion') active @endif">
              <a href="{{ route('voto.index') }}">
                <i class="now-ui-icons design_app"></i>
                <p>{{ __('Votacion') }}</p>
              </a>
            </li>
          </ul>
        </div>
        <li class="@if ($activePage == 'profile') active @endif">
          <a href="{{ route('profile.edit') }}">
            <i class="now-ui-icons users_single-02"></i>
            <p> {{ __("Perfil de Usuario") }} </p>
          </a>
        </li>
      </li>  
    </ul>
  </div>
</div>
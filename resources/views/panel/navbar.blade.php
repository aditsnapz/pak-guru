<header class="app-header navbar">
  <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
    <span class="navbar-toggler-icon"></span>
  </button>

  
  <ul class="nav navbar-nav ml-auto">
    
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        @if (Auth::check())
          <img src="https://www.gravatar.com/avatar/{{md5(strtolower(trim(Auth::user()->nip)))}}?s=160&d=retro" class="img-avatar" alt="{{ Session::get('nip') }}">
        @else
          <img src="{{ asset('img/avatars/6.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
        @endif
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-header text-center">
          <strong>{{ Session::get('nip') }}'s Account</strong>
        </div>      
        <a class="dropdown-item" href="{{ route('login.logout') }}">
          <i class="fa fa-lock"></i> Logout </a>
      </div>
    </li>
  </ul>

 <form id="logout-form" action="{{ route('login.logout') }}" method="POST" style="display: none;">
  {{ csrf_field() }}
</form>
</header>

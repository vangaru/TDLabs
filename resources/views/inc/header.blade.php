<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
  <div class="container-fluid d-flex">
    <a class="navbar-brand" href="{{ route('index') }}">TDLabs</a>
    @if (Auth::guard('admin')->check())
    <a class="navbar-brand text-warning" href="{{ route('admin.dashboard') }}"> ADMIN </a>
    @endif
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
    	<span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">
    	<ul class="navbar-nav">
    		@yield('nav-list')
        </ul>
        <ul class="navbar-nav ml-auto">
        @if (Auth::guest())
            <li class="nav-item"><a class="nav-link text-dark" href="{{ route('login') }}"><button class="btn btn-light">Войти</button></a></li>
            <li class="nav-item"><a class="nav-link text-danger" href="{{ route('register') }}"><button class="btn btn-danger">Регистрация</button></a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle text-uppercase" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span></a>
                
                <ul class="dropdown-menu bg-dark" role="menu">
                    <li>
                        <a class="nav-link text-danger" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            ВЫЙТИ

                        <form id="logout-form" action="{{ route('user.logout') }}" method="GET" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        </a>

                        <a class="nav-link text-success" href="{{ route('home') }}">
                            ДОМОЙ
                        </a>
                    </li>
                </ul>
            </li>

        @endif
        </ul>  
    </div> 
  </div>
</nav>

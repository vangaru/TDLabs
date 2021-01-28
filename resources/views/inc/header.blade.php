<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
  <div class="container-fluid d-flex">
    <a class="navbar-brand" href="#">TDLabs</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
    	<span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">
    	<ul class="navbar-nav">
    		@yield('nav-list')
            @if (Auth::guest())
        <li class="nav-item"><a class="nav-link text-primary" href="{{ route('login') }}">ВОЙТИ</a></li>
        <li class="nav-item"><a class="nav-link text-info" href="{{ route('register') }}">РЕГИСТРАЦИЯ</a></li>
    @else
        <li class="nav-item">
            <a class="nav-link text-danger" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ВЫЙТИ</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    @endif
        </ul>   
    	<form action="POST" class="form-inline ml-auto">
			<input type="text" class="form-control mr-sm-2" placeholder="Поиск" aria-label="Поиск"/>
		</form>
		<button class="btn btn-outline-success my-2 my-sm-0">Поиск</button>
    </div> 
  </div>
</nav>

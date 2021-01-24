<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
  <div class="container-fluid d-flex">
    <a class="navbar-brand" href="#">TDLabs</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
    	<span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">
    	<ul class="navbar-nav">
    		@yield('nav-list')
    	</ul>
    	<form action="POST" class="form-inline ml-auto">
			<input type="text" class="form-control mr-sm-2" placeholder="Поиск" aria-label="Поиск"/>
		</form>
		<button class="btn btn-outline-success my-2 my-sm-0">Поиск</button>

    </div>
  </div>
</nav>

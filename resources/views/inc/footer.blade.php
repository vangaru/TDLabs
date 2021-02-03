<!-- Footer -->
<footer class="bg-dark text-secondary text-center text-lg-start mt-5">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-3 col-sm-12 mb-4 mb-md-0">
        <a class="navbar-brand text-light" href="{{ route('home') }}">TDLabs</a>

        <ul class="list-unstyled mb-0">
        	<li class="text-secondary">
        		<a href="mailto:2sdaydude@gmail.com" class="text-secondary">2sdaydude@gmail.com</a>
        	</li>
	    </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-sm-4 mb-4 mb-md-0 mt-3">
	        <h5 class="text-uppercase text-light">Ваш аккаунт</h5>

	        <ul class="list-unstyled mb-0">
            @if(Auth::user())
            <li>
              <a class="text-secondary" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Выйти</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>            
            </li>
            @else
	          <li>
	            <a class="text-secondary" href="{{ route('login') }}">Войти</a>
	          </li>
	          <li>
	            <a class="text-secondary" href="{{ route('register') }}">Регистрация</a>
	          </li>
            @endif
	        </ul>
      </div>

      <div class="col-lg-3 col-sm-4 mb-4 mb-md-0 mt-3">
	        <h5 class="text-uppercase text-light">навигация</h5>

	        <ul class="list-unstyled mb-0">
	          <li>
	            <a class="text-secondary" href="{{ route('contacts') }}">Контакты</a>
	          </li>
	          <li>
	            <a class="text-secondary" href="{{ route('index') }}">Главная</a>
	          </li>
	          <li>
	            <a class="text-secondary" href="{{ route('service') }}">Услуги</a>
	          </li>
	          <li>
	            <a class="text-secondary" href="{{ route('about') }}">О нас</a>
	          </li>
	        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-sm-4 mb-4 mb-md-0 mt-3">
        <h5 class="text-uppercase text-light">образование</h5>

        <ul class="list-unstyled">
          <li>
            <a class="text-secondary" href="https://www.bstu.by/" target="_blank">БрГТУ</a>
          </li>
          <li>
            <a class="text-secondary" href="https://feis.bstu.by/" target="_blank">ФЭИС</a>
          </li>
          <li>
            <a class="text-secondary" href="https://itproger.com/" target="_blank">itProger</a>
          </li>
          <li>
            <a class="text-secondary" href="https://habr.com/ru/" target="_blank">Хабр</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="container-fluid text-center p-3" id="copyright">
    © {{ date('Y') }} Copyright: <a href="{{ route('index') }}">TDLabs.by</a>
  </div>
  <!-- Copyright -->
</footer>
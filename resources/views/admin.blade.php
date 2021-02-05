<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css"/>
  </head>

  <body>
    <div id="adminCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#adminCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#adminCarousel" data-slide-to="1"></li>
      <li data-target="#adminCarousel" data-slide-to="2"></li>
      <li data-target="#adminCarousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner" role="listbox">

      <div class="carousel-item active" style="background-image: url('/images/mr-robot.jpg')">
        <div class="carousel-caption">
          <h1 class="display-4">Check Reviews</h1>
          <a href="{{ route('admin.reviews') }}">
            <button class="btn btn-danger">Check</button>
          </a>
        </div>
      </div>

      <div class="carousel-item" style="background-image: url('/images/mr-robot-black.jpg')">
        <div class="carousel-caption">
          <h2 class="display-4">Check Users</h2>
          <a href="{{ route('admin.users') }}">
            <button class="btn btn-danger">Check</button>
          </a>
        </div>
      </div>

      <div class="carousel-item" style="background-image: url('/images/mr-robot-marijuana.jpg')">
        <div class="carousel-caption">
          <h2 class="display-4">Check Orders</h2>
          <a href="#">
            <button class="btn btn-danger">Check</button>
          </a>
        </div>
      </div>

      <div class="carousel-item" style="background-image: url('/images/mr-robot-pink.jpg')">
        <div class="carousel-caption">
          <h2 class="display-4">Check Service</h2>
          <a href="#">
            <button class="btn btn-danger">Check</button>
          </a>
        </div>
      </div>
    </div>

    </div>



    <a class="carousel-control-prev" href="#adminCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#adminCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
  </body>

  <script src="/js/app.js"></script>
</html>




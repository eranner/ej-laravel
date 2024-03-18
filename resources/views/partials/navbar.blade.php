<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}" style="color: rgb(17, 20, 62); font-size: 2rem;">EJ Web Design</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active {{Route::current()->uri() == '/' ? 'currentLink' : ''}}" style="color: rgb(17, 20, 62); font-size: 1.5rem;" href="{{route('home')}}" >Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Route::current()->uri() == 'about' ? 'currentLink' : ''}}" href="{{route('about')}}" style="color: rgb(17, 20, 62); font-size: 1.5rem;" >About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Route::current()->uri() == 'contact' ? 'currentLink' : ''}}" href="{{route('contact')}}" style="color: rgb(17, 20, 62);font-size: 1.5rem;">Contact Us</a>
        </li>
    </ul>
    </div>
  </div>
</nav>
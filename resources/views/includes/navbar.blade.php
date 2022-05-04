<nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top" data-aos="fade-down">
  <div class="container">
    <a href="#" class="navbar-brand">
      <img src="{{asset('template')}}/images/pm2.png" height="50px" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
      <span class="navbar-toggler-icon">

      </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
       <li class="nav-item active">
        <form class="form-inline">
          <input class="form-control mr-sm-2 w-55" type="search" placeholder="Search Product" aria-label="Search" style="height: 30px;">
          <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" style="height: 30px;" >Search</button>
        </form>
       </li>
        <li class="nav-item active">
          <a href="/index.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="{{route('categories')}}" class="nav-link">Categories</a>
        </li>
        <li class="nav-item">
          <a href="/rewards.html" class="nav-link">Rewards</a>
        </li>
        @guest
        <li class="nav-item">
          <a href=" {{route('register')}} " class="nav-link">Sign Up</a>
        </li>
        <li class="nav-item">
          <a href="{{route('login')}}" class="btn btn-primary nav-link px-4 text-white ">Sign In</a>
        </li>
        @endguest
      </ul>
      @auth
      <ul class="navbar-nav d-none d-lg-flex">
        <li class="nav-item dropdown">
          <a href="" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
            <img src="{{asset('template')}}/images/bg0.jpg" alt="" class="rounded-circle mr-2 profile-picture">
            {{Auth::user()->name}}

          </a>
          <div class="dropdown-menu">
            <a href="././dashboard.html" class="dropdown-m">Dashboard</a> <br>
            <a href="././dashboard.html" class="dropdown-m">Settings</a>
            <div class="dropdown-divider"></div>
            <a href="{{ route('logout') }}"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="btn btn-primary nav-link px-4 text-white ">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>

          </div>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link inline-block mt-2">
            <img src="{{asset('template')}}/images/cart.svg" height="30px" alt="icon">
            <div class="card-badge">10</div>
          </a>

        </li>
      </ul>
   
      @endauth
    </div>
  </div>
</nav>
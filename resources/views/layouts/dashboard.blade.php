<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>GeloraMarketplace</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    @stack('prepand-style')
 
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href=" {{asset('template')}}/style/main.css" rel="stylesheet" />
    @stack('addon-style')
    
</head>
<style>
.navbar-fixed-top.scrolled {
  background-color: #fff !important;
  transition: background-color 200ms linear;
}

</style>
  <body>
  
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- sidebar -->
        <div class="border-right" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
            <img src="{{asset('template')}}/images/pm2.png" alt="" class="my-4" style="max-width: 150px;">
          </div>
          <div class="list-group list-group-flush">
            <a href="./dashboard.html" class="list-group-item list-group-item-action active">
              Dashboard
            </a>
            <a href="./dashboard-products.html" class="list-group-item list-group-item-action">
             Products
            </a>
            <a href="./dashboard-transactions.html" class="list-group-item list-group-item-action">
              Transactions
             </a>
             <a href="./dashboard-setting.html" class="list-group-item list-group-item-action">
              Store Settings
             </a>
             <a href="./dashboard-products.html" class="list-group-item list-group-item-action">
              My Account
             </a>
             <a href="./index.html" class="list-group-item list-group-item-action">
              Sign Out
             </a>
          </div>
        </div>
        

        <!-- page-content -->
        <div id="page-content-wrapper">
          <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top" data-aos="fade-down">
            <div class="container-fluid">
              
              <button class="btn btn-warning d-md-none mr-auto mr-2" id="menu-toggle">Menu</button>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDashboard">
                <span class="navbar-toggler-icon">
      
                </span>
              </button>
              <div class="collapse navbar-collapse" id="navbarDashboard">
               
                <ul class="navbar-nav d-none d-lg-flex ml-auto">
                  <li class="nav-item dropdown">
                    <a href="" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
                      <img src="./images/bg0.jpg" alt="" class="rounded-circle mr-2 profile-picture">
                      KangPrabs
                    </a>
                    <div class="dropdown-menu">
                      <a href="././dashboard.html" class="dropdown-m">Dashboard</a>
                      <a href="././dashboard.html" class="dropdown-m">Settings</a>
                      <div class="dropdown-divider"></div>
                      <a href="././dashboard.html" class="dropdown-m">Logout</a>
      
                    </div>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link inline-block mt-2">
                      <img src="./images/cart.svg" height="30px" alt="icon">
                      <div class="card-badge">10</div>
                    </a>
      
                  </li>
                </ul>
                <ul class="navbar-nav d-block d-lg-none">
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      HI PRABS
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link inline-block">
                      Cart
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <!-- section content -->

         @yield('content')
          <!-- end content -->
        </div>
      </div>
    </div>




    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('template')}}/vendor/jquery/jquery.js"></script>
    <script src="{{asset('template')}}//vendor/jquery/jquery.slim.min.js"></script>
    <script src="{{asset('template')}}//vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    @stack('prepand-script')
    <script>
      AOS.init();
    </script>
    <script>
      $('#menu-toggle').click(function(e){
        e.preventDefault();
        $('#wrapper').toggleClass("toggled");
      });
    </script>
     @stack('addon-script')

  </body>
</html>

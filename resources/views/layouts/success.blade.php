<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="IzdihaarGerlora" content="" />

    <title>GeloraMarketplace</title>
     {{-- styyle --}}

     @stack('prepand-style')
     @include('includes.style') 
     @stack('addon-style')
</head>
<style>
.navbar-fixed-top.scrolled {
  background-color: #fff !important;
  transition: background-color 200ms linear;
}

</style>
  <body>
   
    
    @yield('content')
    {{-- end home --}}
    <!-- Footer -->
    @include('includes.footer')
    <!-- End Footer -->
    <!-- end contenr -->
    

    {{-- script --}}
    @stack('prepand-script')
     @include('includes.script') 
     @stack('addon-script')
</body>
</html>

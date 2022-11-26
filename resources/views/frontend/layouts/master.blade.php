<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('frontend.partials.style')

    <title>My outsourcing LTD</title>
  </head>
  <body>
    <div class="">

        <!-- Start Navsection -->
       @include('frontend.partials.nav')
       <!-- End  Navsection -->

       <!-- Start Sidebar+Content section -->
        @yield('content')

       <!-- Send Sidebar+Content section -->

       <!--Start Contact Section -->
     @include('frontend.partials.footer')
       <!--End Contact Section -->
        
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
   @include('frontend.partials.script')


  </body>
</html>
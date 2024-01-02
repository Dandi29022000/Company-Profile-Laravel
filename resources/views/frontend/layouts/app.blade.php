<!DOCTYPE html>
<html lang="en">
  <head>
    @include('frontend.layouts.head')
  </head>
  <body>
    <!-- navigasi -->
    @include('frontend.layouts.navbar')
    
    <!-- Main content -->
    @yield('content')
    <!-- /.content -->

    @include('frontend.layouts.footer')

    @include('frontend.layouts.script')
  </body>
</html>

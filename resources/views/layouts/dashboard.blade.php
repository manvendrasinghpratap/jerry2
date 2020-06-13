<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    @include('layouts.common.style')    
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_horizontal-navbar.html -->
      <div class="horizontal-menu">
        @include('layouts.common.header')
		@include('layouts.common.navigation')	
		</div>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper pb-0">
            @include('layouts.common.breadcrum')
			@yield('content')
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
			@include('layouts.common.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('public/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('public/assets/vendors/jquery-bar-rating/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('public/assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('public/assets/vendors/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('public/assets/vendors/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('public/assets/vendors/flot/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('public/assets/vendors/flot/jquery.flot.fillbetween.js') }}"></script>
    <script src="{{ asset('public/assets/vendors/flot/jquery.flot.stack.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('public/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('public/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('public/assets/js/misc.js') }}"></script>
    <script src="{{ asset('public/assets/js/settings.js') }}"></script>
    <script src="{{ asset('public/assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('public/assets/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->
  </body>
</html>
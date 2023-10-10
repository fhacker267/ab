<html>
    <head>
        <title>Azeeem Travel - @yield('title')</title>
        
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('admin/assets/img/favicon.png')}}">
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{asset('admin/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('admin/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{asset('admin/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('admin/assets/css/soft-ui-dashboard.css?v=1.0.7')}}" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  <style>

footer {
  position: absolute;
  bottom: 10;
  width: 100%;
  height: 2.5rem;            /* Footer height */
}

  </style>
    </head>
  
<body class="g-sidenav-show  bg-gray-100">
     
        @include('admin.layouts.sidebar')
      <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
      @include('admin.layouts.navbar')
        <div class="container-fluid py-4">
            @yield('content')
        </div>
       
      </main>
      @include('admin.layouts.footer')
      <script src="{{asset('admin/assets/js/core/popper.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/core/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/plugins/chartjs.min.js')}}"></script>
    @stack('scripts')

    </body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.Name', 'Bu-ProjectITI')}}</title>
    <link rel="icon" href="{{asset('vendors/dist/img/logo-diamon.png')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('vendors/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/dist/css/adminlte.min.css') }}">
  </head>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      @include('layout.admin.topMenu')
      @include('layout.admin.leftMenu')
      <div class="content-wrapper">
        <section class="content">
          @yield('content')
        </section>
      </div>
      @include('layout.admin.footer')
    </div>
  <script src="{{ asset('vendors/plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendors/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendors/dist/js/adminlte.min.js') }}"></script>
  </body>
</html>

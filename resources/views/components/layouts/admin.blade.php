<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title ?? '' }}</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('admin/assets/images/logos/favicon.png') }}" />
  <link rel="stylesheet" href="{{ asset('admin/assets/css/styles.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}" />
</head>

<body>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <livewire:admin.components.sidebar />
    <div class="body-wrapper">
      <livewire:admin.components.header />
      <div class="container-fluid">
        {{ $slot }}
      </div>
    </div>
  </div>
  <script src="{{ 'admin/assets/libs/jquery/dist/jquery.min.js' }}"></script>
  <script src="{{ 'admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js' }}"></script>
  <script src="{{ 'admin/assets/js/sidebarmenu.js' }}"></script>
  <script src="{{ 'admin/assets/js/app.min.js' }}"></script>
  <script src="{{ 'admin/assets/libs/apexcharts/dist/apexcharts.min.js' }}"></script>
  <script src="{{ 'admin/assets/libs/simplebar/dist/simplebar.js' }}"></script>
  <script src="{{ 'admin/assets/js/dashboard.js' }}"></script>
</body>

</html>

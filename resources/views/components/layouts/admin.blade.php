<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title ?? '' }}</title>
  <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
  <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('admin/assets/css/styles.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}" />

  <script data-navigate-once src="https://unpkg.com/maplibre-gl/dist/maplibre-gl.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/maplibre-gl/dist/maplibre-gl.css">

  @stack('style')
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
  <script data-navigate-once src="{{ asset('admin/assets/libs/jquery/dist/jquery.min.js') }}"></script>
  <script data-navigate-once src="{{ asset('admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script data-navigate-once src="{{ asset('admin/assets/js/app.min.js') }}"></script>
  <script src="{{ asset('js/modal.js') }}"></script>
  <script src="{{ asset('js/toast.js') }}"></script>
  <script data-navigate-once src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script data-navigate-once src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
  @stack('script')
</body>

</html>

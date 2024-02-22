<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title ?? '' }}</title>
  {{-- fonts --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Just+Me+Again+Down+Here&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Protest+Strike&display=swap"
    rel="stylesheet">
  {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Just+Me+Again+Down+Here&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
    rel="stylesheet"> --}}

  <link rel="stylesheet" href="{{ asset('admin/assets/css/icons/tabler-icons/tabler-icons.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  @vite('resources/css/app.css')
</head>

<body class="bg-gray-50">
  <livewire:public.components.navbar />
  <div class="pt-14 min-h-screen">
    {{ $slot }}
  </div>
  <livewire:public.components.footer />
</body>
@stack('script')


</html>

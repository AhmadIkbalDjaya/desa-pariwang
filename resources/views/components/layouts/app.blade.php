<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title ?? '' }}</title>
  @stack('style')
  <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
  <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
  {{-- fonts --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Just+Me+Again+Down+Here&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Protest+Strike&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('admin/assets/css/icons/tabler-icons/tabler-icons.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  @vite('resources/css/app.css')

  {{-- tag for SEO --}}
  {{-- <meta name="description" content="Website Resmi Desa Pariwang">
  <meta name="keywords" content="Desa Pariwang, pariwang, pariwang.com, pariwisata, destinasi wisata, budaya, alam">
  <meta name="author" content="Desa Pariwang"> --}}
  <meta name="description" content="Pariwang Dapatkan Informasi Terkini Desa">
  <meta name="application-name" content="Website Profil Desa Pariwang">
  <meta name="generator" content="Pariwang">
  <meta name="keywords" content="website resmi desa Pariwang, desa pariwang, pariwang">
  <meta name="publisher" content="Pemerintah Desa Pariwang">
  <meta name="robots" content="index, follow">
  <meta property="og:title" content="Website Resmi Desa Pariwang">
  <meta property="og:description" content="Pariwang Dapatkan Informasi Terkini Desa">
  <meta property="og:url" content="https://pariwang.com/">
  <meta property="og:site_name" content="Website Resmi Desa Pariwang">
  <meta property="og:locale" content="id_ID">
  <meta property="og:image" content="{{ asset('images/enrekang.webp') }}">
  <meta property="og:image:width" content="256">
  <meta property="og:image:height" content="256">
  <meta property="og:image:alt" content="Logo Desa Pariwang">
  <meta property="og:type" content="website">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Website Resmi Desa Pariwang">
  <meta name="twitter:description" content="Pariwang Terdepan Dalam Inovasi Pelayanan Publik">
  <meta name="twitter:image" content="{{ asset('images/enrekang.webp') }}">
  <meta name="twitter:image:width" content="256">
  <meta name="twitter:image:height" content="256">
  <meta name="twitter:image:alt" content="Logo Desa Pariwang">
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

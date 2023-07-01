<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>{{ $title ?? 'E-Monev BBPSI Mektan' }}</title>
</head>
<body>
  <div class="container px-8 bg-gray-100">
      {{-- Navbar --}}
      {{-- @include('components.navigation') --}}

      {{-- Sidebar --}}
      {{-- @include('components.sidebar') --}}
      <x-sidebar></x-sidebar>

      {{-- Section --}}
      {{-- @yield('content') --}}
  </div>

  <script type="text/javascript" src="{{ asset('js/test.js') }}"></script>
</body>
</html>
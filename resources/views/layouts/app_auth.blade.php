<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>
  @yield('title')
  </title>

  @stack('before-style')
  {{-- style --}}
  @include('user_view.includes.style')

  @stack('after-style')
</head>

<body class="index-page bg-gray-200">

  {{-- Navbar --}}
  @include('user_view.includes.navbar')
  {{-- End Navbar --}}

  {{-- MAIN --}}
  @yield('content')
  {{-- END MAIN --}}

  @stack('before-script')
  {{-- script --}}
  @include('user_view.includes.script')

  @stack('after-script')

</body>
</html>

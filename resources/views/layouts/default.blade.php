<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <title>@yield('title')</title>
  @vite('resources/css/app.css')
</head>

<body>
  <div class="container">
    {{-- Header --}}
    @include('includes/header')
    {{-- Content --}}
    @yield('content')
    {{-- Footer --}}
    @include('includes/footer')
  </div>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
  @include('layout.components.head')
</head>

<body>

  <div id="app">
    @yield('content')
  </div>
  <script src="{{ asset('js/app.js') }}"></script>

  @include('layout.components.scripts')
</body>

</html>
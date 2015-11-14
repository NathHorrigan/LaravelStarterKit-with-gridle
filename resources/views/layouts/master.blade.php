<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/app.css">
    @yield('head')
  </head>
  <body>

    <div class="container">
      @yield('content')
    </div>

  </body>
</html>

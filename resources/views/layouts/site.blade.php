<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CDV - @yield('title')</title>
  </head>
  <body>
    @section('sidebar')
      To jest pasek boczny

      <div class="container">
        @yield('content')
      </div>
  </body>
</html>

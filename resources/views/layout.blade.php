<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      My web site
    </title>
    <style>
      header{
        background-color: blue;
        color: white;
      }

      footer{
        background-color: lightblue;
      }
    </style>
  </head>
  <body>
    <header>
      This is header
    </header>
    <div class="">
      @yield('content1')
    </div>
    <div class="">
      @yield('content2')
    </div>
    <footer>
      This is footer
    </footer>
  </body>
</html>

<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta charset="utf-8">
    <title>Laravel 1.0</title>
    <link href="{{asset("css/app.css")}}" rel="stylesheet" type="text/css">
  </head>
  <body>
        @include('inc.navbar')
    <div class="container">
      @if(Request::is('/'))
    @include('inc.showcase')
    @endif
    <div class="row">
      <div class="col-md-8">
        @include('inc.messages')
        @yield('content')
      </div>
      <div class="col-md-4">
    @include('inc.sidebar')
      </div>
    </div>
    @include ('inc.fotter')
  </body>
</html>

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('app.name', 'Laravel') }}</title>

      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">

      <!-- Scripts -->
      <script>
          window.Laravel = {!! json_encode([
              'csrfToken' => csrf_token(),
          ]) !!};
      </script>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
       <div class="container-fluid">
           <!-- Brand and toggle get grouped for better mobile display -->
           <div class="navbar-header page-scroll">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                   <span class="sr-only">Toggle navigation</span>
                   Menu <i class="fa fa-bars"></i>
               </button>
               <a class="navbar-brand" href="index.html">Start Bootstrap</a>
           </div>

           <!-- Collect the nav links, forms, and other content for toggling -->
           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav navbar-right">
                   <li>
                       <a href="{{ url('/') }}">Home</a>
                   </li>
                   <li>
                       <a href="{{ route('journals.index') }}">Journal</a>
                   </li>
                   <li>
                       <a href="{{ route('tweets.index') }}">Tweet</a>
                   </li>
                   <li>
                       <a href="{{ route('photos.index') }}">Photo</a>
                   </li>
                   <li>
                       <a href="{{ route('musics.index') }}">Music</a>
                   </li>
               </ul>
           </div>
           <!-- /.navbar-collapse -->
       </div>
       <!-- /.container -->
    </nav>
    @yield('content')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>

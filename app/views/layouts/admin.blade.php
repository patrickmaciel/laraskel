<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>
      @if (empty($title))
        Administração - Projeto
      @else
        {{ $title }} - Projeto
      @endif
    </title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('bower/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Bootstrap theme -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('bower/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- wysiwyg editor -->
    <link rel="stylesheet" href="{{ URL::asset('libs/redactor/redactor.css') }}">

    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('css/admin.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document">

    @include ('layouts.admin_header')

    @yield('content')

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ URL::asset('bower/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('bower/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('bower/bootbox/bootbox.js') }}"></script>
    <script src="{{ URL::asset('libs/redactor/redactor.min.js') }}"></script>
    <script src="{{ URL::asset('js/admin.js') }}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ URL::asset('js/ie10-viewport-bug-workaround.js') }}"></script>
  </body>
</html>

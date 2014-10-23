<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Marcos Luna Huizzi">
    <link rel="icon" href="../../favicon.ico">

    <title> @yield('titulo','Restaurant') </title>

    <!-- Bootstrap core CSS -->
    {{ HTML::style('assets/css/bootstrap.min.css', array('media' => 'screen')) }}


    <!-- Custom Css para login -->
    @yield('customCSS') 

  </head>

  <body>
    @section('cuerpoGeneral')
    
    @show
    {{HTML::script('assets/js/jQuery.min.js')}}
    {{HTML::script('assets/js/funciones.js')}}
  </body>
 
</html>

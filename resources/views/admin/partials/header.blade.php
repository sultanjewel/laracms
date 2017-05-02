<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title') | {{config('app.name','LaraCMS')}}</title>
  <!-- Bootstrap core CSS -->
  <link href="//ajax.aspnetcdn.com/ajax/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <!-- Custom styling plus plugins -->
  <link href="{{url('/')}}/backend/css/custom.css" rel="stylesheet">
  <link href="{{url('/')}}/backend/css/icheck/flat/green.css" rel="stylesheet" />
  @yield('css')
</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
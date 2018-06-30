<!DOCTYPE html>
<html>

<head>
  <title>{{ $titl or 'ИТ СМЕНА 2018' }}</title>
  <!--meta-->
  <meta charset="UTF-8">
  <meta name="description" content="{{ $meta or 'IT СМЕНА 2018
ПО ИНФОРМАЦИОННЫМ ТЕХНОЛОГИЯМ И ТЕХНИЧЕСКИМ ВИДАМ СПОРТА' }}"/>
  <META NAME="keywords" CONTENT="{{ $keywords or 'ИТ СМЕНА 2018' }}">
  <META NAME="AUTHOR" CONTENT="https://vk.com/glrlcocks">
  <meta name="revisit-after" content="5 days">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="SHORTCUT ICON" href="assets/img/air_fav.png" type="image/x-icon">
    
  <!--соц сети-->
  <meta property="og:type" content="article" />
  <meta property="og:title" content="{{ $titl or 'ИТ СМЕНА 2018' }}" />
  <meta property="og:description" content="{{ $meta or 'IT СМЕНА 2018
ПО ИНФОРМАЦИОННЫМ ТЕХНОЛОГИЯМ И ТЕХНИЧЕСКИМ ВИДАМ СПОРТА' }}" />
  <meta property="og:image" href="storage/{{ $img or 'pages/Logo.png' }}" content="storage/{{ $img or 'pages/Logo.png' }}"  />
  <meta property="og:url" content="ccskm" />
  <meta property="og:site_name" content="СМЕНА 2018" />

      <link type="text/css" rel="stylesheet" href="assets/materialize/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="assets/css/main.css"/>
      <link type="text/css" rel="stylesheet" href="assets/css/base.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="assets/css/demo5.css"  media="screen,projection"/>
		
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      
</head>

<body>
@include('layouts.nav')
@yield('content')
@include('layouts.footer')
@include('layouts.scripts')

</body>
</html>

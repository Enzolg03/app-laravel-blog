<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}Blog de Enzo</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="{{mix('/js/app.js')}}" defer></script>
    {{-- <link rel="stylesheet" href="/css/bootstrap.css"> --}}
</head>
<body>
  <div id="app">
    @include('layouts.navbar') 
  {{-- <x-navbar></x-navbar>--}}
    {{$slot}}
  {{--<x-footer></x-footer>--}}
   @include('layouts.footer') 
  </div>
</body>
</html>
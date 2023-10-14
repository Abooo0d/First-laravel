<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("Title")</title>
    <link href="{{url('Css/master.css')}}" rel="stylesheet">
  </head>
  <body>
    <nav class="">
      <a href="{{route('Home.index')}}">Home</a>
      <a href="{{route('Home.About')}}">About</a>
      <a href="{{route('computers.index')}}">Computers</a>
      <a href="{{route('computers.create')}}">Creat</a>
    </nav>
    @yield("main")
  </body>
</html>

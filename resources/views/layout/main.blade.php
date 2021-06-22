
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('style/css/bootstrap.min.css')}}" rel="stylesheet">


</head>

<body>

<ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{asset('/')}}">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{asset('/mahasiswa')}}">Mahasiswa</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{asset('/admin')}}">Admin</a>
  </li>

</ul>

    @yield('container')
        
 
    <!-- jQuery -->
    <script src="{{asset('style')}}/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('style')}}/js/bootstrap.min.js"></script>

 
    @yield('js')

</body>

</html>

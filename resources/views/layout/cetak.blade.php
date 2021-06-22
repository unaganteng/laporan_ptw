
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

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

    @yield('container')
        
 
    <!-- jQuery -->
    <script src="{{asset('style')}}/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('style')}}/js/bootstrap.min.js"></script>

 
    @yield('js')

</body>

</html>

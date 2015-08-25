<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{$title}} | North Wales Takeaways</title>


    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/sweetalert.css" rel="stylesheet">
    <link href="/css/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/simpletextrotator.css" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700,400italic,600italic,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>


 <!-- NAVBAR----------------------------------- -->
@include('partials._navbar')
    @include('partials._navbar_admin')

 <!-- NAVBAR END----------------------------------- -->


 <!-- CONTENT----------------------------------- -->
    @yield('content')
 <!-- CONTENT END----------------------------------- -->


 <!-- FOOTER ------------------------------------->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-inline">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li class="footer-menu-divider">&sdot;</li>
                    <li>
                        <a href="/menu">Menu</a>
                    </li>
                    <li class="footer-menu-divider">&sdot;</li>
                    <li>
                        <a href="/contact">Contact</a>
                    </li>
                    <li class="footer-menu-divider">&sdot;</li>
                    <li>
                        <a href="http://karlthefreelancer.co.uk" target="_blank">KarlTheFreelancer.co.uk</a>
                    </li>
                </ul>
                <p class="copyright text-muted small">Copyright &copy; karlthefreelancer 2015. All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>

    <!-- jQuery -->
    <script src="/js/jquery.js"></script>
    <script src="/js/sweetalert.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>

    <script src="js/jquery.easing.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/creative.js"></script>
    <script src="js/jquery.simple-text-rotator.min.js"></script>

@if(Session::get('postcode_success'))
<script>
    swal("Everything's Good", "We can deliver to you!", "success")
</script>
@elseif(Session::get('postcode_fail'))
    <script>
        swal("Uh Oh", "It seems that you live too far away!", "error")
    </script>
@endif
 <script>
     $(".rotate .rotate").textrotator({
         animation: "flipUp",
         speed: 1750
     });
 </script>

@yield('scripts')

</body>
</html>
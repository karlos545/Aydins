@extends('layouts.app')

@section('content')



        <!-- Header -->
<a name="about"></a>
<div class="intro-header">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="intro-message">
                    <h1>AYDIN'S EATERY</h1>
                    <h3 class="rotate"><span class="rotate">Kebab, Pizza, Burger</span> House, Colwyn Bay</h3>
                    <hr class="intro-divider">
                    <ul class="list-inline intro-social-buttons">
                        <li>
                            <a href="/menu" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-list-alt"></span> <span class="network-name">See Menu</span></a>
                        </li>

                        <li>
                            <a href="#postcode" data-wow-delay="0.1" class="btn btn-primary btn-lg page-scroll wow"><span class="glyphicon glyphicon-map-marker"></span> <span class="network-name">Postcode Checker</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>
<!-- /.intro-header -->

<!-- Page Content -->

<a  name="services"></a>
<div class="content-section-a">

    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-6">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading">Coming Soon...</h2>
                <p class="lead">Very soon we'll be taking online orders for both deliveries and collections. <span class="text-primary"> Remember: you can still order over the phone till then.</span> </p>
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                <img class="img-responsive img-circle" src="http://s3-media3.fl.yelpcdn.com/bphoto/iUAjAI5nt55SLgb_5eJQLw/ls.jpg" alt="Our Staff at Aydins">
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>
<!-- /.content-section-a -->

<div class="content-section-b">

    <div class="container">

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-sm-offset-3 col-sm-6">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="">Opening Hours:</h2>
                <ul class="list-group">
                    <li class="list-group-item extra-lg">

                            Today: <?= \Carbon\Carbon::today()->formatLocalized('%A %d %B'); ;?>

                    </li>
              <li class="list-group-item">
                       MONDAY - 3PM - 1AM

                    </li>
                    <li class="list-group-item">
                        TUESDAY - 3PM - 1AM
                    </li>
                    <li class="list-group-item">
                        WEDNESDAY - 3PM - 2AM
                    </li>
                    <li class="list-group-item">
                        THURSDAY - 3PM - 1AM
                    </li>
                    <li class="list-group-item">
                        FRIDAY - 3PM - 2AM
                    </li>
                    <li class="list-group-item">
                        SATURDAY - 3PM - 3AM
                    </li>
                    <li class="list-group-item">
                        SUNDAY - 3PM - 12AM
                    </li>

                </ul>
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>

<div class="banner">

    <div class="container">

        <div class="row" id="postcode">
            <div class="col-md-6">
                <h2>Can We Deliver To You?</h2>
            </div>
            <div class="col-md-6">
                {!! Form::open(['url' => '/check-postcode']) !!}
                    <div class="form-group col-sm-6">
                         {!!Form::text('postcode', null, ['class' => 'form-control input-lg', 'placeholder' => 'e.g. LL29 9LB ', 'required', 'title' => 'Full Postcode - 7 Characters', 'pattern' => '.{7,}'])!!}
                    </div>
                    <div class="form-group col-sm-6">
                        {!!Form::submit('Check', ['class' => 'btn btn-primary btn-lg'])!!}
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>
<!-- /.banner -->

@endsection

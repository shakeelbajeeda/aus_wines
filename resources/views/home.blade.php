@extends('layouts.web')
@section('content')
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{url('/')}}">AusWine</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{route('wine.create')}}">Add Wine</a></li>
                <li><a href="{{route('wine.index')}}">View All Wines</a></li>
            </ul>
        </div>
        <div class="container" id="header" style="background-image: url({{asset('assets/images/italy_vineyard.jpg')}})">
            <div class="jumbotron" style="text-align:center">
                <div id="heading">
                    <h1>Explore Australian Wine</h1>
                    <p>The Australian wine industry is one of the world's largest exporters of wine, with approximately 800
                        million out of the 1.2 to 1.3 billion litres produced is annually exported to overseas market.</p>
                </div>
            </div>
        </div>
    </nav>

    <div class="container2">
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail" style="height:500px">
                    <img src="{{asset('assets/images/red_wine.jpg')}}">
                    <div class="caption">
                        <h2>Red Wine</h2>
                        <p>Red Wine is a type of wine made from dark-colored grape varieties.</p>
                    </div>
                    </br></br>
{{--                    <div id="buttons">--}}
{{--                        <a href="#" class="btn btn-default" role="button" id="button">View Details >></a>--}}
{{--                    </div>--}}
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail" style="height:500px">

                    <img src="{{asset('assets/images/white_wine.jpg')}}">
                    <div class="caption">
                        <h2>White Wine</h2>
                        <p>White Wine is a wine that is fermented without skin contact.</p>
                    </div>
                    </br></br>
{{--                    <div id="buttons">--}}
{{--                        <a href="#" class="btn btn-default" role="button" id="button">View Details >></a>--}}
{{--                    </div>--}}
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail" style="height:500px">
                    <img src="{{asset('assets/images/sparkling_wine.jpg')}}">
                    <div class="caption">
                        <h2>Sparkling Wine</h2>
                        <p>Sparkling Wine is a wine with significant levels of carbon dioxide in it, making it fizzy.</p>
                    </div>
                    </br>
{{--                    <div id="buttons">--}}
{{--                        <a href="#" class="btn btn-default" role="button" id="button">View Details >></a>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
    </br>
    <div class="container" id="info">
        <div class="row">
            <div class="col-md-6">
                <h1><b>Explore Wine vineyard</b></h1>
                <h3>Some great placeholder content for the first featurette here.</h3>
            </div>
            <div class="col-md-6">
                <img src="{{asset('assets/images/vineyard.jpg')}}" alt="Snow" style="width:100%">
            </div>
        </div>
    </div><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('assets/images/wine_glass.jpg')}}" alt="Snow" style="width:100%">
            </div>
            <div class="col-md-6">
                <h1><b> We have Varieties</b></h1>
                <h3> Do you want to explore different types of wine? You can try a bit of different taste of wine. </h3>
            </div>
        </div>
    </div><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1><b>Do You need Wine for an event?</b></h1>
                <h3> You Can also order a bulk of wine for an event with a huge discount </h3>
            </div>
            <div class="col-md-6">
                <img src="{{asset('assets/images/wine_bottle.jpg')}}" alt="Snow" style="width:100%">
            </div>
        </div>
    </div>
@endsection

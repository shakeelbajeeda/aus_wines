@extends('layouts.web')
@section('content')
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{url('/')}}">AusWine</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{route('wine.create')}}">Add Wine</a></li>
                <li class="active"><a href="{{route('wine.index')}}">View All Wines</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <?php if (isset($_SESSION['message'])) { ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Success!</strong>
                <?php
                $message = $_SESSION['message'];
                unset($_SESSION['message']);
                echo $message;
                ?>
        </div>
        <?php } ?>
        <div>
            <a href="{{route('wine.create')}}" class="btn btn-primary btn_style">Add a new wine</a>
        </div>
        <div class="m-top-3">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Type</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Region</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($wines as $wine)
                    <tr>
                        <td>{{$wine->name}}</td>
                        <td>{{$wine->type}}</td>
                        <td>{{$wine->quantity}}</td>
                        <td>{{$wine->price}}</td>
                        <td>{{$wine->region}}</td>
                        <td><a href="{{route('wine.edit', [$wine->id])}}" class="btn btn-warning">Edit</a><a href="{{route('wine_destroy',[$wine->id])}}" class="btn btn-danger" style="margin-left: 6px">Delete</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection

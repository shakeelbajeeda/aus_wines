@extends('layouts.web')
@section('content')
{{--    header--}}
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{url('/')}}">AusWine</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active"><a href="{{route('wine.create')}}">Add Wine</a></li>
                <li><a href="{{route('wine.index')}}">View All Wines</a></li>
            </ul>
        </div>
    </nav>
{{--end header--}}

{{--   section start here--}}
    <div class="container">
        <div class="h1 text-center my-5">{{@$wine ? 'Update Wine Detail' : 'Add New Wine'}}</div>
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
        <form action="{{ @$wine ?route('wine.update',[@$wine->id]) : route('wine.store')}}" method="POST">
            @csrf
            @if(@$wine)
                @method('put')
            @endif
            <div class="form-group">
                <label for="wname">Wine Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{@$wine? @$wine->name : old('name')}}" id="wname" name="name" >
                @error('name')
                <span class="invalid-feedback text-danger " role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="type">Type of wine</label>
                <select class="form-control @error('type') is-invalid @enderror" name="type" id="type">
                    <option value="{{@$wine? @$wine->type : old('type')}}" selected hidden>{{@$wine? @$wine->type : 'Select Wine Type'}}</option>
                    <option value="Red Wine">Red Wine</option>
                    <option value="White Wine">White Wine</option>
                    <option value="Sparkling">Sparkling</option>
                    <option value="Rose Wine">Rose Wine</option>
                </select>
                @error('type')
                <span class="invalid-feedback text-danger" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="qty">Quantity</label>
                <input type="number" class="form-control @error('quantity') is-invalid @enderror" id="qty" name="quantity" value="{{@$wine? @$wine->quantity : old('quantity')}}" >
                @error('quantity')
                <span class="invalid-feedback text-danger" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{@$wine? @$wine->price : old('price')}}">
                @error('price')
                <span class="invalid-feedback text-danger" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="region">Region</label>
                <select class="form-control @error('region') is-invalid @enderror" name="region" id="region" >
                    <option value="{{@$wine? @$wine->region : old('region')}}" selected hidden>{{@$wine? @$wine->region : 'Select Wine'}}</option>
                    <option value="SA">SA</option>
                    <option value="TAS">TAS</option>
                    <option value="NSW">NSW</option>
                    <option value="VIC">VIC</option>
                </select>
                @error('region')
                <span class="invalid-feedback text-danger" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="align-item">
                <a href="{{route('wine.index')}}" class="btn btn-secondary btn_style">Cancel</a>
                <button type="submit" class="btn btn-primary">{{@$wine ? 'Update' : 'Add'}}</button>

            </div>
        </form>

    </div>
{{--    section end here--}}
@endsection

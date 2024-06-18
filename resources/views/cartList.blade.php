@extends('master')
@section('content')
    <h2 class="mt-5 text-center">Your Items</h2>
<a href="/orders"><button class="btn btn-outline-success ml-5 mt-2">Order now</button></a>
@foreach ($cartItem as $item)
<div class="card mb-3 col-lg-10 mt-5 ml-5">
<div class="row g-0">
    <div class="col-lg-4">
    <img src="{{$item->gallery}}" class="card-img" >
</div>
<div class="col-md-8 pl-5 pt-5">
    <div class="card-body">
        <h5 class="card-title">Name:{{$item->name}}</h5>
        <p class="card-text">Price:{{$item->price}}</p>
        <p class="card-text">Category:{{$item->category}}</p>
        <p class="card-text">Description:{{$item->description}}</p>
        <p class="card-text"><small class="text-muted"></small></p>
        <a href="/removeItem/{{$item->id}}"><button class="btn btn-danger">Remove Item</button></a>
    </div>
</div>
</div>
</div>


@endforeach
@endsection
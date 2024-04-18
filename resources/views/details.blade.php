@extends('master')
@section('content')


<div class="card mb-3 col-lg-10 mt-5 ml-5">
    <div class="row g-0">
        <div class="col-lg-4">
        <img src="{{$products['gallery']}}" class="card-img" >
    </div>
    <div class="col-md-8 pl-5 pt-5">
        <div class="card-body">
            <h5 class="card-title">Name:{{$products['name']}}</h5>
            <p class="card-text">Price:{{$products['price']}}</p>
            <p class="card-text">Category:{{$products['category']}}</p>
            <p class="card-text">Description:{{$products['description']}}</p>
            <p class="card-text"><small class="text-muted"></small></p>

            <form method="POST" action="/add_to_cart">
                @csrf
                <input type="hidden" name="product_id" value="{{$products['id']}}">
            
                <button class="btn btn-success">Add to Cart</button>
            </form>

            <button class="btn btn-primary mt-4">Buy now</button>       
         </div>
        </div>
    </div>
</div>
@endsection
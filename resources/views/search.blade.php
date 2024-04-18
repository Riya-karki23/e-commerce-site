@extends('master')
@section('content')

<h4 class="mt-4 mb-4 text-center">Search Results</h4>
<div class=" d-flex justify-content-center gap-5 flex-wrap">
    @foreach ($products as $item )
    <div class="card" style="width: 18rem;">
        <a href="details/{{$item['id']}}">
        <img class="card-img-top" src="{{$item['gallery']}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$item['name']}}</h5>
          <p class="card-text">{{$item['description']}}</p>
        </div>
        </a>
      </div>
      @endforeach
</div>


@endsection
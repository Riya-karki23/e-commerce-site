@extends('master')
@section('content')

<style>
    .order-table{
display: flex;
justify-content: center;
margin-left: 30px;
flex-direction: column;
margin-top: 100px;
    }
    </style>
    <div class="order-table">
      <h3>Order Summary</h3>
<table class="table table-striped col-lg-4 mt-3 ">
    <tbody>
      <tr>
        <td>Price</td>
        <td>₹ {{$total}}</td>
      </tr>
      <tr>
        <td>Discount</td>
        <td>0</td>
      </tr>
      <tr>
        <td>Delivery Charge</td>
        <td>99</td>
      </tr>
      <tr>
        <td>SubTotal </td>
        <td>{{$total+99}}</td>
      </tr>
    </tbody>
  </table>
  <div class="">
    <textarea name="address"  cols="70" rows="3" class="p-2" placeholder="Enter shipping address"></textarea>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
        <label class="form-check-label" for="exampleRadios1">
        Online Payment
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
        <label class="form-check-label" for="exampleRadios2">
          EMI Payment
        </label>
      </div>
      <div class="form-check disabled">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" >
        <label class="form-check-label" for="exampleRadios3">
         Cash on Delievery
        </label>
      </div>
    <a href="/orderSuccess"><button class="btn btn-primary mt-3 col-lg-3">Continue</button></a>
  </div>
    </div>
@endsection
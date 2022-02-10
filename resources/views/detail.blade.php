@extends('master')
@section("content")
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <img class="detail-img" src="{{$product['gallery']}}">
        </div>
        <div class="col-md-6">
            <a href="/" style="color:red;font-size:20px">Go Back</a><br>
            <h2>{{$product['name']}}</h2>
            <h3>Price: {{$product['price']}}</h3>
            <h5>Details: {{$product['description']}}</h5>
            <h5>Category: {{$product['category']}}</h5><br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button type="submit" class="btn btn-primary">Add to Cart</button><br><br>
            </form>
            <a href="" class="btn btn-success">Buy Now</a>
        </div>
    </div>
</div>
@endsection
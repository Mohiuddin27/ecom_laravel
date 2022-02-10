@extends('master')
@section("content")
<div class="container">
    <div class="custom-product">
        <div class="row">
          <h4 class="text-center">Result for Products</h4>
            <div class="col-md-6">
              <div class="trending-wrapper d-flex">
                  
                  @foreach($products as $item)
                  <div class="searched-item">
                   <a href="detail/{{$item['id']}}">
                    <img class="trending-image" src="{{$item['gallery']}}">
                    <div class="">
                     <h2>{{$item['name']}}</h2>
                     <h5>{{$item['description']}}</h5>
                    </div>
                  </a>
                  </div>
                  @endforeach
                </div> I
            </div>
        </div>
  </div>
</div>
@endsection
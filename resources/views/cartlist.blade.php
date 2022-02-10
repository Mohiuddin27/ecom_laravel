@extends ('master')
@section("content")
<div class="container">
    <div class="custom-product">
        <div class="col-sm-10">
           <div class="trending-wrapper">
               <h4 class="text-center mt-3 mb-5">CartList of the Products</h4>
              <a href="ordernow" class="btn btn-success mr-3">Order Now</a>
               @foreach($products as $item)
               <div class=" row searched-item cartlist_divider">
                <div class="col-sm-4">
                   <a href="detail/{{$item->id}}">
                       <img class="trending-image" src="{{$item->gallery}}"><br><br>
                      
                     </a>
                </div>
                <div class="col-sm-4">
                        <div class="text-center mt-5">
                          <h2>{{$item->name}}</h2>
                          <h5>{{$item->description}}</h5>
                        </div>
                      </a>
                 </div>
                 <div class="col-sm-4">
                    <div class="text-center mt-5">
                      <a class="btn btn-danger" href="/removecart/{{$item->cart_id}}">Remove from Cart</a>
                    </div>
                  </a>
             </div>
               </div>
               
               @endforeach
             </div>
             <a href="ordernow" class="btn btn-success">Order Now</a>
        </div>
   </div>
</div>

@endsection
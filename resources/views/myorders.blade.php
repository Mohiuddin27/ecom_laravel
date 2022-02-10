@extends('master')
@section("content")
<div class="container">
    <div class="custom-product">
        
           <div class="trending-wrapper">
               <h4 class="text-center mt-5 mb-5 row">my orders </h4>
               <div class="col-md-4">
               @foreach($orders as $item)
              
               <div class=" row searched-item cart-list-devider">
                <div class="col-sm-3">
                   <a href="detail/{{$item->id}}">
                       <img class="trending-image" src="{{$item->gallery}}">
                     </a>
                </div>
               </div>
              </div>
              <div class="col-md-4 ">
                <div class="">
                  <h2 class="ml-5">Name : {{$item->name}}</h2>
                  <h5 class="ml-5">Delivery Status : {{$item->status}}</h5>
                  <h5 class="ml-5">Address : {{$item->address}}</h5>
                  <h5 class="ml-5">Payment Status : {{$item->payment_status}}</h5>
                  <h5 class="ml-5">Payment Method : {{$item->payment_method}}</h5>

                </div>
                </div>
               
               
               </div>
               @endforeach
             </div>
   
        
   </div>
</div>
@endsection 
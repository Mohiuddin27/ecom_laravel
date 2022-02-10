@extends('master')
@section("content")
<div class="container mt-5">

	
  
        
       <div class="row">
           <div class="col-md-5 offset-3">
            <div class="card shadow">
               
                <h2 class="text-center">Login</h2>
                <div class="card-body">
                <form action="login" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Email</label>
                        <input name="email" class="form-control" type="text" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input name="password" class="form-control" type="password"  placeholder="Enter Password">
                    </div><br>
                    <div class="form-group text-center">
                        <input class="btn btn-primary" type="submit" value="Login">
                    </div>
                
            </div>
           </div>
        </div>
    </div>
@endsection

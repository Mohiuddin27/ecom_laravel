@extends ('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-6 offset-3">
         <h1 class="text-center mt-3 mb-5">Total Amount</h1>
        <table class="table table-dark table-striped">
            <tbody>
              <tr>
                <td>Amount</td>
              <td>$ {{$total}}</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>$ 0</td>
              </tr>
              <tr>
                <td>Delivery </td>
                <td>$ 10</td>
              </tr>
              <tr>
                <td>Total Amount</td>
              <td>$ {{$total+10}}</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST" >
              @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="enter your address" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                  <label style="font-size:20px;font-weight:600;margin-top:10px"for="pwd"><span style="color:red">*</span>Payment Method</label> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span style="color:rgb(255, 0, 200)">online payment</span> 
                  <input type="radio" value="cash" name="payment"> <span style="color:rgb(0, 217, 255)">EMI payment</span>
                  <input type="radio" value="cash" name="payment"> <span style="color:rgb(0, 132, 255)">Payment on Delivery</span><br><br> 

                </div>
                <button type="submit" class="btn btn-primary">Order Now</button>
              </form>
          </div>
     </div>
</div>
@endsection
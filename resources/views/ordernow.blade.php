@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table table-hover">
        <tbody>
        <tr>
            <td><strong>Amount</strong></td>
            <td>{{$total}}/-</td>
        </tr>
        <tr>
            <td><strong>Tax</strong></td>
            <td>$0</td>
        </tr>
        <tr>
            <td><strong>Delivery charges</strong></td>
            <td>$10</td>
        </tr>
        <tr>
            <td><strong>Total Amount</strong></td>
            <td>{{$total+10}}/-</td>
        </tr>
        </tbody>
    </table>
    <div>
    <form action="/orderplace" method="POST">
    @csrf
  <div class="form-group">
    <textarea name="address" placeholder="Enter your address" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="pwd" class="payment-method">Select a payment Method</label><br><br>
    <input type="radio" name="payment" value="cash" ><span >Online Payment</span><br><br>
    <input type="radio" name="payment" value="cash" ><span>EMI Payment</span><br><br>
    <input type="radio" name="payment" value="cash" ><span>Payment on Delivery</span><br><br>

  </div>
  <button type="submit" class="btn btn-warning continue-payment">Continue</button>
</form>
    </div>
    </div>
</div>
@endsection
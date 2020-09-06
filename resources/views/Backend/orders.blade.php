
@extends('backendtemplate')
@section('content')
    <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Order Detail Information</h1>
          </div>
          <!-- Content Row -->
        <h5>Voucherno: {{$orderdetail->voucherno}}</h5>
        <h5>Orderdate: {{$orderdetail->orderdate}}</h5>
        <div class="container-fluid">
          <div class="row">
           <table class="table table-bordered">
              <thead class="thead-dark justify-content-center text-center">
                <th>No</th>
                <th>Item Name</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Subtotal</th> 
              </thead>
              <tbody>
                @php 
                  $i=1; 
                @endphp
                @foreach ($orderdetail->items as $orderitems)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$orderitems->name}}</td>
                    <td>{{$orderitems->price}} MMK</td>
                    <td>{{$orderitems->pivot->qty}}</td>
                    <td>{{$orderitems->price * $orderitems->pivot->qty}}</td>
                  </tr>
                @endforeach
                <tr>
                  <td colspan="4"  class="table-dark">Total:</td>
                  <td  class="table-dark">{{$orderdetail->total}}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- /.container-fluid -->
  </div>
@endsection
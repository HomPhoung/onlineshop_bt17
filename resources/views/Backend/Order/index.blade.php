@extends('Backend.backendtemplate')
@section('content')
   <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Your Order List Here!</h1>
          </div>
          <!-- Content Row -->
        <div class="container-fluid">
          <div class="row">
           <table class="table table-bordered">
              <thead class="thead-dark justify-content-center text-center">
                <th>No</th>
                <th>Voucher No</th>
                <th>User</th>
                <th>Total</th>
                <th>Action</th> 
              </thead>
              <tbody>
                @php 
                  $i=1; 
                @endphp
                @foreach ($orders as $order)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$order->vocherno}}</td>
                    <td>{{$order->user->name}}</td>
                    <td>{{$order->total}}</td>
                    <td>
                    <a href="{{route('orders.show',$order->id)}}" class="btn btn-primary">Detail</a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <!-- /.container-fluid -->
  </div>
@endsection
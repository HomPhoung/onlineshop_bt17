@extends('Backend.backendtemplate')

@section('content')
<div class="container-fluid">

	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Item List</h1>
		

	</div>
	<div class="container-fluid">
		<div class="row">
			<table class="table table-bordered  justify-content-center text-lg-center">
				<thead class="thead-dark ">
					<th>No</th>
					<th>CodeNo</th>
					<th>Name</th>
					<th>Price</th>
					<th>Action</th>
				</thead>
				<tbody class="text-info">

					@php
					$i=1;
					@endphp

					@foreach($items as $item) 
					<tr>
						<td>{{$i++}}</td>
						<td>{{$item->codeno}}</td>
						<td>{{$item->name}}</td>
						<td>{{$item->price}} MMK</td>
						<td>
							<a href="{{route('items.show',$item->id)}}" class="btn btn-primary">Detail</a>
							<a href="{{route('items.edit',$item->id)}}" class="btn btn-warning">Edit</a>
							<form method="post" action="{{route('items.destroy',$item->id)}}">
								@csrf
								@method('DELETE')
								<button class="btn btn-danger">Delete</button>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<a href="{{route('items.create')}}"class="btn btn-secondary my-3">Add New</a>

		</div>
	</div>


</div>
@endsection
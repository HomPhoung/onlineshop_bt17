@extends('Backend.backendtemplate')

@section('content')
<div class="container-fluid">

	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Category List</h1>
		

	</div>
	<div class="container-fluid">
		<div class="row">
			<table class="table table-bordered  justify-content-center text-lg-center">
				<thead class="thead-dark ">
					<th>No</th>
					<th>Name</th>
					<th>Photo</th>
					<th>Action</th>
				</thead>
				<tbody class="text-info">

					@php
					$i=1;
					@endphp

					@foreach($categories as $category) 
					<tr>
						<td>{{$i++}}</td>
						<td>{{$category->name}}</td>
						<td><img src="{{asset($category->photo)}}" class="img-fluid w-50"></td>
						<td>
							<a href="{{route('categories.edit',$category->id)}}" class="btn btn-warning">Edit</a>
							<form method="post" action="{{route('categories.destroy',$category->id)}}">
								@csrf
								@method('DELETE')
								<button class="btn btn-danger">Delete</button>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<a href="{{route('categories.create')}}"class="btn btn-secondary my-3">Add New</a>

		</div>
	</div>


</div>
@endsection
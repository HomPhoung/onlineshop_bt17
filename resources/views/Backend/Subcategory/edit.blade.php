@extends('Backend.backendtemplate')
@section('content')
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Subcategory Edit Form</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="{{route('subcategories.update',$subcategory->id)}}" method="POST" enctype="multipart/form-data">
					{{-- to update , need id  --}}
					@csrf
					@method('PUT')
					

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Name</label>
						<div class="col-sm-5">

							<input type="text" name="name" class="form-control" value="{{$subcategory->name}}">
						</div>
					</div>

					<div class="form-group row my-3">
						<label class="col-sm-2 col-form-label">Categories</label>
						<div class="col-sm-5">

							<select class="form-control form-control-md" id="inputBrand" name="category" >
								<optgroup label="Choose Category">
									@foreach($categories as $category)
									<option value="{{$category->id}}">{{$category->name}}</option>
									@endforeach
								</optgroup>
							</select>
						</div>
					</div>

					

					<div class="form-group row">
						<input type="submit" value="Update" class="btn btn-success" name="btnsubmit">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
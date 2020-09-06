@extends('Backend.backendtemplate')
@section('content')
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Item Edit Form</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="{{route('items.update',$item->id)}}" method="POST" enctype="multipart/form-data">
					{{-- to update , need id  --}}
					@csrf
					@method('PUT')
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Code No</label>
						<div class="col-sm-5">
							<input type="text" name="codeno" class="form-control" value="{{$item->codeno}}" readonly="readonly">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Name</label>
						<div class="col-sm-5">

							<input type="text" name="name" class="form-control" value="{{$item->name}}">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Photo</label>
						<div class="col-sm-5">

							<input type="file" name="photo" class="form-control-file">
							<img src="{{asset($item->photo)}}" class="img-fluid w-50">
							<input type="hidden" name="oldphoto" value="{{$item->photo}}">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Price</label>
						<div class="col-sm-5">

							<input type="text" name="price" class="form-control" value="{{$item->price}}">
						</div>
					</div>



					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Discount</label>
						<div class="col-sm-5">

							<input type="text" name="discount" class="form-control" value="{{$item->discount}}">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Description</label>
						<div class="col-sm-5">

							<textarea class="form-control" name="description">{{$item->description}}</textarea>
						</div>          	
					</div>
					
					<div class="form-group row my-3">
						<label class="col-sm-2 col-form-label">Brands</label>
						<div class="col-sm-5">

							<select class="form-control form-control-md" id="inputBrand" name="brand" >
								<optgroup label="Choose Brand">
									@foreach($brands as $brand)
									<option value="{{$brand->id}}" <?php if($item->brand_id==$brand->id) echo "selected";?>>{{$brand->name}}</option>
									@endforeach
								</optgroup>
							</select>
						</div>
					</div>

					<div class="form-group row my-3">
						<label class="col-sm-2 col-form-label">Subcategory</label>
						<div class="col-sm-5">

							<select class="form-control form-control-md" id="inputSubcategory" name="subcategory">
								<optgroup label="Choose Subcategory">
									@foreach($subcategories as $subcategory)
									<option value="{{$subcategory->id}}" <?php if($item->subcategory_id==$subcategory->id) echo "selected";?>>{{$subcategory->name}}</option>
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
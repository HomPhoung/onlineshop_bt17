@extends('Backend.backendtemplate')
@section('content')
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Item Create Form</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="{{route('items.store')}}" method="POST" enctype="multipart/form-data">
					@csrf

					<div class="form-group row {{ $errors->has('codeno') ? 'has-error' : ''}}">
						<label for="inputcodeno" class="col-sm-2 col-form-label">Code No</label>
						<div class="col-sm-5">
							<input type="text" name="codeno" class="form-control @error('title')is-invalid @enderror" id="inputcodeno">
							<span class="text-danger">{{$errors->first('codeno')}}</span>
						</div>
					</div>

					<div class="form-group row {{ $errors->has('name') ? 'has-error' : ''}}">
						<label class="col-sm-2 col-form-label">Name</label>
						<div class="col-sm-5">

							<input for="name" type="text" name="name" class="form-control  @error('title')is-invalid @enderror" id="inputname">
							<span class="text-danger">{{$errors->first('name')}}</span>

						</div>
					</div>

					<div class="form-group row {{ $errors->has('photo') ? 'has-error' : ''}}">
						<label for="photo" class="col-sm-2 col-form-label">Photo</label>
						<div class="col-sm-5">

							<input type="file" name="photo" class="form-control-file @error('title')is-invalid @enderror" id="uploadphoto">
							<span class="text-danger">{{$errors->first('photo')}}</span>


						</div>
					</div>

					<div class="form-group row {{ $errors->has('price') ? 'has-error' : ''}}">
						<label for="price" class="col-sm-2 col-form-label">Price</label>
						<div class="col-sm-5">

							<input type="text" name="price" class="form-control @error('title')is-invalid @enderror" id="inputprice">
							<span class="text-danger">{{$errors->first('price')}}</span>

						</div>
					</div>



					<div class="form-group row {{ $errors->has('discount') ? 'has-error' : ''}}">
						<label for="discount" class="col-sm-2 col-form-label">Discount</label>
						<div class="col-sm-5">

							<input type="text" name="discount" class="form-control  @error('title')is-invalid @enderror" id="inputDiscount"
							\>
							<span class="text-danger">{{$errors->first('discount')}}</span>

						</div>
					</div>

					<div class="form-group row {{ $errors->has('description') ? 'has-error' : ''}}">
						<label for="description" class="col-sm-2 col-form-label">Description</label>
						<div class="col-sm-5">

							<textarea class="form-control  @error('title')is-invalid @enderror" id="inputCodeno" name="description"></textarea>
							<span class="text-danger">{{$errors->first('description')}}</span>

						</div>          	
					</div>
					
					<div class="form-group row my-3">
						<label class="col-sm-2 col-form-label">Brands</label>
						<div class="col-sm-5">

							<select class="form-control form-control-md" id="inputBrand" name="brand">
								<optgroup label="Choose Brand">
									@foreach($brands as $brand)
									<option value="{{$brand->id}}">{{$brand->name}}</option>
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
									<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
									@endforeach
								</optgroup>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<input type="submit" value="Create" class="btn btn-success" name="btnsubmit">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
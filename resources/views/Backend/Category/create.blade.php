@extends('Backend.backendtemplate')
@section('content')
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Category Create Form</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
					@csrf


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

					

					<div class="form-group row">
						<input type="submit" value="Create" class="btn btn-success" name="btnsubmit">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
@extends('admin.app')

@section('content')

<div class="row">
	<div class="col-sm-12">

		<form 
			action="{{ route('user.files.store') }}" 
			method="POST" 
			enctype="multipart/form-data">

			@csrf

			<div class="form-group">
				<label for="fileName">{{__('Name')}}</label>
				<input type="text" name="filename" class="form-control" id="fileName" aria-describedby="fileName">
				<small id="fileName" class="form-text text-muted">
					{{ __('Add a name to your file') }}
				</small>
			</div>

			<div class="form-group">
				<div class="custom-file">
					<input type="file" class="custom-file-input" name="file" id="uploadFile" lang="en">
					<label class="custom-file-label" for="uploadFile">
						{{ __('Upload') }}
					</label>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>

	</div>
</div>

@stop


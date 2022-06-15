@extends('layouts.backend_master', ['page_title'=>'Dashboard', 'breadcrumb_title'=>'Dashboard'])

@section('content')
	<div class="row">
		<div class="col-sm-12 col-md-6">
			<form action="{{route('backend.about-me')}}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="col-sm-12 col-md-6 form-group">
					<label for="picture">Picture</label>
					<input type="file" name="picture" id="picture" class="form-control">
				</div>	

				<div class="col-sm-12 col-md-6 form-group">
					<button class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>

		<div class="col-sm-12 col-md-6">
			<div class="card">
				<img src="{{asset('storage/images/')}}/{{$infos->picture_link??''}}" style="width: 100%; ">
				<p class="mt-2 ml-2">
					<button class="btn btn-warning"><a href="{{route('backend.about-me-delete', $infos->id??'')}}" onclick="return confirm('Are you sure want to delete ?')"> Delete </a></button>
				</p>
			</div>
		</div>
    </div>
@endsection
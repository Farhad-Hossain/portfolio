@extends('layouts.backend_master', ['page_title'=>'Worked Companies', 'breadcrumb_title'=>'Worked Companies'])

@section('content')
  <div class="row">
  	<div class="col-sm-12 col-md-6">
  		<form action="{{route('backend.worked-for')}}" method="POST" enctype="multipart/form-data">
  			@csrf
  			<div class="form-group">
  				<label for="company_name">Company Name</label>
  				<input type="text" name="company_name" class="form-control" id="company_name" required>
  			</div>

  			<div class="form-group">
  				<label for="company_website">Company Website</label>
  				<input type="text" name="company_website" class="form-control" id="company_website" required>
  			</div>

  			<div class="form-group">
  				<label for="company_logo">Company Logo</label>
  				<input type="file" name="company_logo" class="form-control" id="company_logo" required>
  			</div>

  			<div class="form-group">
  				<button type="submit" class="btn btn-primary">Submit</button>
  			</div>
  		</form>
  	</div>


  	<div class="col-sm-12 col-md-6">
        <div class="row"> 
        @foreach ($workedCompanies as $company)
            <div class="col-sm-12 col-md-4">  
                <div class="card">
                  <img src="{{asset('storage/images/'.$company->company_logo)}}" style="width: 100%;">
                  <p class="text-center">
                    {{ $company->company_name }} | <a href="{{route('backend.worked-for-delete', $company->id)}}" onclick="return confirm('Are you sure ?')"> <i class="fa fa-trash"></i> </a>
                  </p>
                </div>
            </div>        
        @endforeach
        </div>  
  	</div>
  </div>
@endsection
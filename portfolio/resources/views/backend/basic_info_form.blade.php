@extends('layouts.backend_master', ['page_title'=>'Dashboard', 'breadcrumb_title'=>'Dashboard'])

@section('content')
	<div class="row">
	    <form action="{{route('backend.basic-info')}}" class="col-sm-12" method="POST" enctype="multipart/form-data">
	    	@csrf
	    	<div class="row">
	    		  <div class="col-sm-12 col-md-6">	
			    	<div class="form-group">
			    	  <label for="_name">Name</label>
			    	  <input class="form-control" id="_name" type="text" name="name" placeholder="Enter name" value="{{$basicInfo->name??''}}" required>
			    	</div>

			    	<div class="form-group">
			    	  <label for="_designation">Designation</label>
			    	  <input class="form-control" id="_designation" type="text" name="designation" placeholder="Enter designation" value="{{$basicInfo->designation??''}}" required>
			    	</div>

			    	<div class="form-group">
			    	  <label for="_short_description">Short Description</label>
			    	  <textarea name="short_description" class="form-control" id="_short_description" required>{{$basicInfo->short_description??''}}</textarea>
			    	</div>

			    	<div class="form-group">
			    	  <label for="_who_am_i">Who am I ?</label>
			    	  <textarea name="who_am_i" class="form-control" id="_who_am_i"  required>{{$basicInfo->who_am_i??''}}</textarea>
			    	</div>
	    		  </div>

	    		  <div class="col-sm-12 col-md-6">
					<div class="form-group">
					  <label for="_facebook">Facebook</label>
					  <input class="form-control" id="_facebook" type="text" name="facebook" placeholder="Enter facebook Id" value="{{$basicInfo->facebook??''}}" required>
					</div>

					<div class="form-group">
					  <label for="_twitter">Twitter</label>
					  <input class="form-control" id="_twitter" type="text" name="twitter" placeholder="Enter twitter Id" value="{{$basicInfo->twitter??''}}" required>
					</div>	    		  	

					<div class="form-group">
					  <label for="_linkedin">Facebook</label>
					  <input class="form-control" id="_linkedin" type="text" name="linkedin" placeholder="Enter facebook Id" value="{{$basicInfo->linkedin??''}}" required>
					</div>

					<div class="form-group">
					  <label for="_github">Github</label>
					  <input class="form-control" id="_github" type="text" name="github" placeholder="Enter github link" value="{{$basicInfo->github??''}}" required>
					</div>

	    		  </div>

	      		  <div class="col-sm-12 col-md-12">
	      		  	<div class="row">
		  				<div class="form-group col-sm-12 col-md-12">
		  				  <label for="_address">Address</label>
		  				  <input class="form-control" id="_address" type="text" name="address" placeholder="Enter Address" value="{{$basicInfo->address??''}}" required>
		  				</div>

		  				<div class="form-group col-sm-12 col-md-6">
		  				  <label for="_email">Email</label>
		  				  <input class="form-control" id="_email" type="text" name="email" placeholder="Enter Email" value="{{$basicInfo->email??''}}" required>
		  				</div>

		  				<div class="form-group col-sm-12 col-md-6">
		  				  <label for="_phone">Phone</label>
		  				  <input class="form-control" id="_phone" type="text" name="phone" placeholder="Enter Phone number" value="{{$basicInfo->phone??''}}" required>
		  				</div>
	      		  	</div>

	      		  	<div class="row col-sm-12 col-md-3">
	      		  		<input type="submit" class="btn btn-primary" name="" value="Save" style="min-width: 100px;">
	      		  	</div>

	      		  </div>		
	    	</div>
	    </form>
	</div>
@endsection
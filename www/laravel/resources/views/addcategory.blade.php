@extends ('layout.master')
@section ('title') @endsection
@section ('content')

	<div class="wrapper">
		<h1 id="register-label">Add Category</h1>
					<hr>

					<form id="register" action="/addcategory" method="POST">
					<div>
						@if (count($errors) > 0)
                    	<div class="alert alert-danger">                
                        @foreach ($errors->get('cname') as $error)<span class='err'>{{ $error }}</span>@endforeach
                    	</div>
                   		@endif
						<label>category name:</label>
						<input type="text" name="cname" placeholder="Post Category Title">
						
					</div>
					
					<input type="submit" name="submit" value="add">
					<input type="hidden" value="{{ Session::token()}}" name="_token">
					</form>
	</div>				
@stop

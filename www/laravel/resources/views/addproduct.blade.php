@extends ('layout.master')
@section ('title') @endsection
@section ('content')

	<div class="wrapper">	

		<h1 id="register-label">Add Products</h1>
				<hr>

				<form id="register" action="/addproducts" method="POST" enctype="multipart/form-data">
					<div>
						@if (count($errors) > 0)
                    	<div class="alert alert-danger">                
                        @foreach ($errors->get('name') as $error)<span class='err'>{{ $error }}</span>@endforeach
                    	</div>
                   		@endif
						<label>Book name:</label>
						<input type="text" name="name" placeholder="Book name">
						</div>

					<div>
						@if (count($errors) > 0)
                    	<div class="alert alert-danger">                
                        @foreach ($errors->get('auth') as $error)<span class='err'>{{ $error }}</span>@endforeach
                    	</div>
                   		@endif
						<label>Author:</label>
						<input type="text" name="auth" placeholder="Author">
					</div>

							
					<div>
						@if (count($errors) > 0)
                    	<div class="alert alert-danger">                
                        @foreach ($errors->get('price') as $error)<span class='err'>{{ $error }}</span>@endforeach
                    	</div>
                   		@endif
						<label>Price:</label>
						<input type="text" name="price" placeholder="Price">
					</div>

					<div>
						@if (count($errors) > 0)
                    	<div class="alert alert-danger">                
                        @foreach ($errors->get('bkcat') as $error)<span class='err'>{{ $error }}</span>@endforeach
                    	</div>
                   		@endif
						<label>select Category</label>
						<select name = "bkcat">
						<option value="">Select Category</option>
							@foreach ($cat as $cat)
								<option value="{!! $cat->category_id !!}">{!! $cat->category_name !!}</option>
							@endforeach
																									
						</select>
								
					</div>

					<div>
						<label>image</label>
						<input type="file" name="pic">
					</div>


						<input type="submit" name="submit" value="add">
						<input type="hidden" value="{{ Session::token()}}" name="_token">

				</form>
	</div>
@stop


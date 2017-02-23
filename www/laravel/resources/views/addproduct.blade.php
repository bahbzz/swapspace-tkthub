@extends ('layout.master')
@section ('title') @endsection
@section ('content')

	<div class="wrapper">	

		<h1 id="register-label">Add Shows</h1>
				<hr>

				<form id="register" action="/addproduct" method="POST" enctype="multipart/form-data">
					<div>
						@if (count($errors) > 0)
                    	<div class="alert alert-danger">                
                        @foreach ($errors->get('name') as $error)<span class='err'>{{ $error }}</span>@endforeach
                    	</div>
                   		@endif
						<label>Show name:</label>
						<input type="text" name="name" placeholder="Show Name">
						</div>

					<div>
						@if (count($errors) > 0)
                    	<div class="alert alert-danger">                
                        @foreach ($errors->get('artist') as $error)<span class='err'>{{ $error }}</span>@endforeach
                    	</div>
                   		@endif
						<label>Artist:</label>
						<input type="text" name="artist" placeholder="Artist">
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
                        @foreach ($errors->get('date') as $error)<span class='err'>{{ $error }}</span>@endforeach
                    	</div>
                   		@endif
						<label>Date:</label>
						<input type="date" name="date" placeholder="">
					</div>

					<div>
					@if (count($errors) > 0)
                    	<div class="alert alert-danger">                
                        @foreach ($errors->get('time') as $error)<span class='err'>{{ $error }}</span>@endforeach
                    	</div>
                   		@endif
						<label>Time:</label>
						<input type="time" name="time" placeholder="">
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


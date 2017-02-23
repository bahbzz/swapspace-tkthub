@extends ('layout.master')
@section ('title') @endsection
@section ('content')

	<div class="wrapper">	

 			<h1 id="register-label">Edit Category</h1>
				<hr>
				<form id="register" action="/editcategory/{!! $id !!}/"  method="POST">
				
				
				<div>
					<label>category name:</label>
					<input type="text" name="cname" placeholder="Post Title" value="{!! $cat->category_name !!}">
					 
							
				</div>
				
							
						
						<input type="submit" name="submit" value="Update">
						<input type="hidden" value="{{ Session::token()}}" name="_token">

						</form>
						<div class="visible-print text-center">
						
						   
						   $codecnt = 'BEGIN:VCARD'."\n";
						   $codecnt .= 'FN:'.'Balogun'."\n";
						   $codecnt .= 'Email:'.'baloguntunde09@yahoo.com'."\n";
						   $codecnt .= 'END:VCARD';

						   QrCode::png($codecnt, "L", 4, 4);
						</div>
	</div>

@stop

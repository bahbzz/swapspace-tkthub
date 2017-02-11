@extends ('layout.master')
@section ('title') @endsection
@section ('content')

	<div class="wrapper">

			<table id="tab">
				<thead>
					<tr>
						<th>Product Name</th>
						<th>Product Id</th>
						<th>Category Id</th>
						<th>Author</th>
						<th>Price</th>
						<th>&nbsp;&nbsp;&nbsp;Edit</th>
						<th>&nbsp;&nbsp;delete</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($prdt as $prdt)
					<tr>
						<td>{!! $prdt->product_name !!}</td>
						<td>{!! $prdt->product_id !!}</td>
						<td>{!! $prdt->category_id !!}</td>						
						<td>{!! $prdt->author_name !!}</td>
						<td>£{!! $prdt->price !!}</td>
						<td><a href="/editproduct/{!! $prdt->product_id !!}/">Edit</td>
						<td><a href="/deleteproduct/{!! $prdt->product_id !!}/">Delete</a></td>
					</tr>

					@endforeach

          		</tbody>
			</table>

		</div>
			
		
@stop

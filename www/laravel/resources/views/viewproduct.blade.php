@extends ('layout.master')
@section ('title') @endsection
@section ('content')

	<div class="wrapper">
		<h1 id="register-label">View Shows</h1>
		<hr>

			<table id="tab">
				<thead>
					<tr>
						<th>Show Name</th>
						<th>Artist Name</th>
						<th>Show Id</th>
						<th>Price</th>
						<th>Date</th>
						<th>Time</th>
						<th>&nbsp;&nbsp;&nbsp;Edit</th>
						<th>&nbsp;&nbsp;delete</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($prdt as $prdt)
					<tr>
						<td>{!! $prdt->show_name !!}</td>
						<td>{!! $prdt->artist_name !!}</td>
						<td>{!! $prdt->show_id !!}</td>
						<td>£{!! $prdt->price !!}</td>
						<td>{!! $prdt->date !!}</td>
						<td>{!! $prdt->time !!}</td>
						<td><a href="/editproduct/{!! $prdt->product_id !!}/">Edit</td>
						<td><a href="/deleteproduct/{!! $prdt->product_id !!}/">Delete</a></td>
					</tr>

					@endforeach

          		</tbody>
			</table>

		</div>
			
		
@stop

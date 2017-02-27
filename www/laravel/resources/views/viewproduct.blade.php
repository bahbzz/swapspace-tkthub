@extends ('layout.master')
@section ('title') @endsection
@section ('content')

	<div class="wrapper">
		<h1 id="register-label">View Shows</h1>
		<hr>

			<table id="tab">
				<thead>
					<tr>
						<th><b>Show Name</b></th>
						<th><b>Artist Name</b></th>
						<th><b>Show Id</b></th>
						<th><b>Price</b></th>
						<th><b>Event Date</b></th>
						<th><b>&nbsp;&nbsp;Time</b></th>
						<th><b>&nbsp;&nbsp;&nbsp;Edit</b></th>
						<th><b>&nbsp;&nbsp;delete</b></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($prdt as $prdt)
					<tr>
						<td>{!! $prdt->show_name !!}</td>
						<td>{!! $prdt->artist_name !!}</td>
						<td>{!! $prdt->show_id !!}</td>
						<td>N{!! $prdt->price !!}</td>
						<td>{!! $prdt->date !!}</td>
						<td>{!! $prdt->time !!}</td>
						<td><a href="/editproduct/{!! $prdt->show_id !!}/">Edit</td>
						<td><a href="/deleteproduct/{!! $prdt->show_id !!}/">Delete</a></td>
					</tr>

					@endforeach

          		</tbody>

			</table>


		</div>
			
		
@stop

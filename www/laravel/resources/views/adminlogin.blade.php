@extends ('layout.master')
@section ('title') @endsection
@section ('content')

<div class="wrapper">
	<h1 id="login-label">Admin Login</h1>
			<hr>
			<!--Showing incorrect password or user email error-->
			@if(Session::has('fail'))<div class="alert alert-danger"><span class="err">
			{{ Session::get('fail')}}</span></div>@endif
			<form id="login" action ="{{ route('adminlogin') }}" method ="POST">
				<div>
					 @if (count($errors) > 0)
	                    <div class="alert alert-danger">                
	                        @foreach ($errors->get('email') as $error)<span class='err'>{{ $error }}</span>@endforeach
	                    </div>
	                    @endif
					<label>email:</label>
					<input type="text" name="email" placeholder="email">
				</div>
				<div>
					
					 @if (count($errors) > 0)
	                    <div class="alert alert-danger">                
	                        @foreach ($errors->get('password') as $error)<span class='err'>{{ $error }}</span>@endforeach
	                    </div>
	                    @endif
					<label>password:</label>
					<input type="password" name="password" placeholder="password">
				</div>
				<input type="submit" name="submit" value="login">
				<input type="hidden" value="{{ Session::token()}}" name="_token">
			</form>

			<h4 class="jumpto">Don't have an account? <a href="{{ route('adminregister') }}">Register</a></h4>
</div>

@stop

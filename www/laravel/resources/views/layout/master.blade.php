<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('title')</title>
	<!--<link rel="stylesheet" type="text/css" href="{{ URL::secure('../style.css') }}">-->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/style.css') }}">
	
</head>
<body>
	@include('includes.header')
	<div class="main">
		@yield('content')
	</div>

    <section class="foot">
		<div>
			<p>&copy; 2016</p>
		</div>
	</section>
</body>
</html>

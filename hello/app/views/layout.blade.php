<html>
<head>
<title>Laravel</title>
</head>

<body>
	<div id="container">
		@yield('content')
	</div>

	<div id="footer">
		@section('footer')		
		Copyright 2019
		@show
	</div>
</body>
</html>

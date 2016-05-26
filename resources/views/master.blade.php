<html>
	<head>
	    <title> @yield('title') </title>

	    <!-- <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.min.css') !!}" >
        <link rel="stylesheet" href="{!! asset('css/bootstrap-theme.min.css') !!}">

        <link rel="stylesheet" type="text/css" href="{!! asset('app.css') !!}" >

	    <script src="{!! asset('js/bootstrap.min.js') !!}"></script>
        <script src="{!! asset('js/jquery-1.11.3.min.js') !!}"></script> -->

        <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <!-- Include roboto.css to use the Roboto web font -->
	    <link href="/css/roboto.min.css" rel="stylesheet">
	    <link href="/css/material.min.css" rel="stylesheet">
	    <link href="/css/ripples.min.css" rel="stylesheet">

        <!-- Material Design fonts -->
		<!-- <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons"> -->

		<!-- Bootstrap Material Design -->
		<!-- <link rel="stylesheet" type="text/css" href="/css/bootstrap-material-design.css">
		<link rel="stylesheet" type="text/css" href="/css/ripples.min.css"> -->

	</head>
	<body>

	@include('shared.navbar')

	@yield('content')

	<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<script src="/js/ripples.min.js"></script>
	<script src="/js/material.min.js"></script>
	<script>
	    $(document).ready(function() {
	        // This command is used to initialize some elements and make them work properly
	        $.material.init();
	    });
	</script>

	</body>
</html>
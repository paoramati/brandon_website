<!doctype html>
<html lang="en">

<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Brandon Mitchell Paul">
	<meta name="description" content="@yield('description')">
	<meta name="keywords" content="IT, graduate, web, software, development, resume">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <!-- OR -->
    {{--  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">  --}}
    


    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans|Roboto|Ubuntu|Titillium+Web" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    {{--  <link href="vendor/devicons/css/devicons.min.css" rel="stylesheet">  --}}
    <link href="vendor/devicon/css/devicon.min.css" rel="stylesheet">

    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="{{ elixir('css/all.css', '') }}">

    {{--  <link rel="stylesheet" type="text/css" href="{{ elixir('css/all.css') }}">  --}}
    {{--  <link rel="stylesheet" type="text/css" href="css/all.css">  --}}

    
</head>

<body id="page-top">

	@yield('content')

	<!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script type="text/javascript" src="{{ elixir('js/all.js', '') }}"></script>
    {{--  <script type="text/javascript" src="{{ elixir('js/all.js') }}"></script>  --}}
    {{--  <script type="text/javascript" src="js/all.js"></script>  --}}

</body>

</html>
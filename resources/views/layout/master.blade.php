<!DOCTYPE html>
<html>
<head>
	<title>@yield ('Title')</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/session.css">
</head>
<body>
	<div>
		<h1 id="header">Nursery Playgroup Management System</h1>
	</div>
	<div class="sidenav">
		<div>
			<a href="index" >Home<i class="fa fa-home"></i></a>
			<a href="information">Children <i class="fa fa-users" ></i></a>
			<a href="parents">Parents <i class="fa fa-users" ></i></a>
			<a href="session">Session <i class="fa fa-calendar" ></i></a>
		</div>
	</div>
	<div >
		<section class="main">@yield('main')</section>
	</div>
	<div>
	</div>
	<div>
		<footer class="footer">@yield('footer')</footer>
	</div>
</body>
</html>
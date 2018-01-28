<!DOCTYPE html>
<html>
<head>
	<title>BKU Product</title>
	<link rel="icon" href="libraryNews/images/iconball8.png">
 	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="libraryNews/library/bootstrap.min.css">
  	 <script src="libraryNews/library/jquery.min.js"></script>
 	<script src="libraryNews/library/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="libraryNews/newsPage.css">	
	<link rel="stylesheet" type="text/css" href="libraryNews/library/formLogin.css">
	<script type="text/javascript" src="libraryNews/newsOfPage.js"></script>
</head>


<body>
    @include('admin.layout.header')
    
    @yield('content')

    @include('admin.layout.footer')
</body>
</html>
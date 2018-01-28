<!DOCTYPE html>
<html>
<head>
	<title>BKU Product</title>
	<link rel="icon" href="img/iconball8.png">
 	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  	 <script src="{{asset('js/jquery.min.js')}}"></script>
 	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('css/newsPage.css')}}">	
	<script type="text/javascript" src="js/newsOfPage.js"></script>
</head>


<body>
	@include('interface.header')
	<main class="background-main" role="main" style="background-color: #FAFAFA">
		@include('pages.banner')
		<div class="container">
				@yield('content')
		</div>
	</main>
	@include('interface.footer')
	
	@yield('script')
</body>
</html>